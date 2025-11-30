<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\Doctor;
use App\Models\DoctorSchedule;
use App\Models\Patient;
use App\Models\Specialty;
use App\Notifications\BookingNotifications;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index($doctorId, $specialtyName)
    {
        $doctor = Doctor::find($doctorId);

        // dd($doctorId, $specialtyName);
        return view('pages.booking_confirmation', compact('doctor', 'specialtyName'));
    }

    public function store(StoreBookingRequest $request)
    {
        $doctor_id = Doctor::where('name', $request->name_doctor)->first();

        DB::transaction(function () use ($request, $doctor_id) {
            $booking = new Booking;
            $booking->create([
                'doctor_id' => $doctor_id->id,
                'specialty_id' => $doctor_id->specialty_id,
                'name_patient' =>  $request->name_patient,
                'phone_patient' =>  $request->phone_patient,
                'email' =>  $request->email,
                'visit_type' =>  $request->visit_type,
                'notes' =>  $request->notes,
                'user_id' => FacadesAuth::id(),
            ]);
            $patient = new Patient;
            $patient->create([
                'name' => $request->name_patient,
                'phone' => $request->phone_patient,
                'email' => $request->email,
                'notes' => $request->notes,
            ]);
            $today = strtolower(now()->format('l'));

            $doctorSchedule = DoctorSchedule::where('doctor_id', $doctor_id->id)
                ->where('day_of_week', $today)->first();
            $doctorSchedule->current_appointments += 1;
            $doctorSchedule->save();

            $admins = \App\Models\User::where('role', 'admin')->get();

            foreach ($admins as $admin) {
                $admin->notify(new BookingNotifications($doctor_id,  $request->name_patient ));
            }
        });
        $today = strtolower(now()->format('l'));

        $doctorSchedule = DoctorSchedule::where('doctor_id', $doctor_id->id)
            ->where('day_of_week', $today)->first();
        return view('pages.success', [
            'doctor_id' => $doctor_id,
            'doctorSchedule' => $doctorSchedule,
            'request' => $request
        ]);
    }
}
