<?php

namespace Systems\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseFormRequest extends FormRequest
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
            'name' =>'required',
            'course_content'=>'required',
            'course_time'=>'required',
            'starting_date'=>'required',
            'trainer_name'=>'required',
            'hours_no'=>'required',
            'status'=>'required',
        ];
    }
}
