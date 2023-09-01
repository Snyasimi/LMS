<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBookRequest extends FormRequest
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
            //
            'BookId' => ['sometimes','required'],
            'BookName' => ['required'],
            'Author' => ['required'],
            'ISBN' => ['required'],
            'Category' =>['required'],
            'NumberOfCopies' =>['required'],
            'BookDescription' => ['required'],
            'CallNumber' => ['required']

        ];
    }
}
