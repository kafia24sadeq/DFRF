<?php

namespace Systems\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationFormRequest extends FormRequest
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
            'name'=>'required|max:30|filled',
            'email'=>'required|email',
            //   'message'=>'required',
            // 'source'=>'required',
            // 'governorate'=>'required',
            'phone'=>'required',
            // 'whatsapp'=>'required',
            'message'=>'required',
        ];
    }
}
