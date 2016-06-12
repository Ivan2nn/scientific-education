<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateMaterialRequest extends Request
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
            'title' => 'required | min:4',
            'file'  => 'required | mimes:jpeg,jpg,bmp,png,gif,doc,pdf,ppt,zip',
            'published_at'  => 'required'
        ];
    }
}
