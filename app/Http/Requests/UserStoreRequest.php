<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:50', 'string'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required'],
            'address' => ['required', 'max:255', 'string'],
            'phone' => ['required', 'max:13', 'string'],
            'avatar' => ['nullable', 'file'],
            'roles' => 'array',
        ];
    }
}
