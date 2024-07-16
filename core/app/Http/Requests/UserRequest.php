<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|string|min:6|min:11|unique:users,name',
            'password' => 'required|same:confirm_password|min:6|max:14',
            'confirm_password' => 'required|min:6|max:14',
            'mudra' => 'required|in:bdt,inr,npr',
            'phone' => 'required|max:11',
            'verify_code' => 'required'
        ];
    }
}
