<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        switch ($this->method()) {
            case 'POST':
            {
                return [
                    'section_name'=>'required|unique:sections|max:255'
                 ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'section_name' => 'required|max:255|unique:sections',
                    
                ];
            }
            default: break;
        }

       
    }
}
