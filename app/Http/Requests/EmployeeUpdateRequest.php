<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
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
            'emp_email' => 'required',
            'emp_name' => 'required',
            'designation' => 'required',
            'designation' => 'required',
            'department_id' => 'required',
            'designation' => 'required',
            'salary' => 'required',
            'join_date' => 'required',
        ];
    }
}
