<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MaterialRequest extends Request
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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            case 'POST':
            {   
                return [
                    'title' => 'required | min:4',
                    'file'  => 'required | mimes:jpeg,jpg,bmp,png,gif,doc,pdf,ppt,zip,wav,mp3,mpg,avi',
                    'published_at'  => 'required|date'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title' => 'required | min:4',
                    'published_at'  => 'required|date'
                ];
            }
            default: break;
        }
    }
}
