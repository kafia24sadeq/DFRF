<?php

namespace Systems\Http\Requests;

use Systems\Http\Requests\Request;

class WorkFormRequest extends Request
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
            'name'=>"required",
            'content'=> "required",
            'image_name'=>"required",
        ];
    }
}
