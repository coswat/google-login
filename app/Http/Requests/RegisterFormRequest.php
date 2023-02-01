<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'name' => [
                'required',
                'max:15',
            ],

            'email' => [
                'required',
                'unique:users',
                'email',
                'max:40',
            ],

            'password' => [
                'required',
                'min:8',
                'max:40',
            ],

            'confirm_password' => [
                'required_with:password',
                'same:password',
                'min:8',
            ],
        ];
    }
}
