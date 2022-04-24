<?php

namespace Systems\Http\Requests;

use Systems\Http\Requests\Request;

class ProductFormRequest extends Request
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
          'name'=>'required',
          'price'=>'required',
          'content'=>'required',
          'warranty'=>'required',
          'image_name'=>'required',
        ];
    }
}
