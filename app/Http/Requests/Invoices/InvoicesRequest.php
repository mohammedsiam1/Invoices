<?php

namespace App\Http\Requests\Invoices;

use Illuminate\Foundation\Http\FormRequest;

class InvoicesRequest extends FormRequest
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
            case 'POST': {
                    return [
                'invoice_number'=>'required',
                'invoice_Date'=>'required',
                'Due_date'=>'required',
                /* 'product'=>'required', */
                'Section'=>'required',
                'Amount_collection'=>'required',
                'Amount_Commission'=>'required',
               
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'invoice_number'=>'required',
                        'invoice_Date'=>'required',
                        'Due_date'=>'required',
                        /* 'product'=>'required', */
                        'Section'=>'required',
                        'Amount_collection'=>'required',
                        'Amount_Commission'=>'required',
                    ];
                }
        }
    }
}
