<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'FirstName' => ['required'],
            'LastName' =>['required'],
            'Campus' => ['required'],
            'Course' => ['required'],
            'Email' => ['required'],
            'Password' => ['required'],
            'Confirm_password' =>['required','same:Password']

        ];
    }

    public function messages()
    {
        return [
            'Firstname.required' => 'Please enter your First Name',
            'LastName.required' => 'Please enter your Last Name',
            'Campus.required' => 'Please enter your Campus',
            'Email.required' => 'Please enter your Email',
            'Password.required' => 'Please enter a Password'

        ];
    }
}
