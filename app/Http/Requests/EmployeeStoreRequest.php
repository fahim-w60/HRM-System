<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'emp_name' => 'required',
            'emp_email' => 'required',
            'designation' => 'required',
            'designation' => 'required',
            'department_id' => 'required',
        ];
        [
            'department_id.required' => 'department is required',
        ];
    }
}
