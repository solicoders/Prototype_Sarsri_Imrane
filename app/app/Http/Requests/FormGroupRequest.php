<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormGroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Group_number' => 'required',
            'Reference' => 'required',
            'school_years_id' => 'required'
        ];
    }
}