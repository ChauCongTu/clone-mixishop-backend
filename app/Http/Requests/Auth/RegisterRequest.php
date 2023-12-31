<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:5|max:50',
            'email' => 'required|email|min:2|unique:users',
            'password' => 'required|min:6',
            'gender' => 'required',
            'address' => 'required|min:5',
            'phone_number' => 'required'
        ];
    }
    public function messages() {
        return [
            'required' => ':name Không được để trống'
        ];
    }
}
