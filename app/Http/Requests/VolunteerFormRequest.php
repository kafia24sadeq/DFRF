<?php

namespace Systems\Http\Requests;

use Systems\Http\Requests\Request;

class volunteerFormRequest extends Request
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
        $rules = [
                'name'=>'required',
                'birthday'=>'required',
                'address'=>'required',
                'phoneNo1'=>'required',
                'educational_qualification'=>'required',
                'have_volunteered'=>'required',
                'why_to_volunteer'=>'required',
        ];
        return $rules;

    }
}
