<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditGigRequest extends FormRequest
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
        return [
            'company_name'=>'required',
            'job_title'=>'required',
            'job_location'=>'required',
            'contact_email'=>'required|email',
            'website'=>'required',
            'tags'=>'required',
            'description'=>'required'
        ];
    }
}
