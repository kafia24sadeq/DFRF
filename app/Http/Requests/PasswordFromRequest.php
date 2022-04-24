<?php

namespace Systems\Http\Requests;

use Systems\Http\Requests\Request;

class PasswordFromRequest extends Request
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
            'password'=>'required|alpha_num|min:6|confirmed',
            'password_confirmation'=>'alpha_num|min:6',
        ];
    }
}
