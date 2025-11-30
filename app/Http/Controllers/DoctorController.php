<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use App\Models\Specialty;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index($name)
    {
        $specialty = Specialty::where("name", $name)->first();
        $doctors = Doctor::where('specialty_id', $specialty->id)->get();
        $results = [];

        foreach ($doctors as $doctor) {
            $schedule = DoctorSchedule::where('doctor_id', $doctor->id)->get();

            
            $available = DoctorSchedule::is_Avalible_2($schedule);

            // خزّن النتيجة
            $results[$doctor->id] = $available;


        }
 
        return view("pages.doctors_list", compact("doctors", 'specialty', 'results'));
    }

    public function show(){
        $doctors =Doctor::all();
        return view('pages.doctors_show', compact('doctors'));
    }

    public function details($id){
        $doctor = Doctor::findOrFail($id);
        return view('pages.doctor_details', compact('doctor'));
    }

}
