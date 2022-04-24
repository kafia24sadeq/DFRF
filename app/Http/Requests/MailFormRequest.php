<?php

namespace Systems\Http\Requests;

use Systems\Http\Requests\Request;

class MailFormRequest extends Request
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
     * @return array
     */
//    public function validationData()
//    {
//        $input = parent::all();
//
//        $input['content'] = strip_tags($input['content']);
//        //modify input here
//
//        return $input;
//    }

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
            'message'=>'required',
//            'source'=>'required',
//            'governorate'=>'required',
//            'phone'=>'required',
//            'whatsapp'=>'required',
//            'message'=>'required',
        ];
    }



}
