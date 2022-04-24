<?php

namespace Systems\Http\Requests;

use Systems\Http\Requests\Request;

class postFormRequest extends Request
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

        if ($this->input('action')=="restore"){
            return [
//                'comments_status'=>'required',
            ];
        }elseif ($this->input('action')=="draft"){
            return [

                'title'=>'required'
            ];

        }elseif ($this->input('action')=="delete"){
            return [

//                'title'=>'required'
            ];

        }else{
            return [
                'title'=>'required',
                'content'=>'required',
                'category_id'=>'required',
                'date'=>'required',
//                'comments_status'=>'required',
//                'image'=>'required',
            ];
        }
    }
}
