<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'name_doctor'    => 'required|string|max:255',
        'name_specialty' => 'required|string|max:255',
        'name_patient'   => 'required|string|max:255',
        'phone_patient'  => 'required|string|max:20',
        'email'          => 'required|email|max:255',
        'visit_type'     => 'required|in:new,follow-up',
        'notes'          => 'nullable|string|max:1000',
        ];
    }
}
