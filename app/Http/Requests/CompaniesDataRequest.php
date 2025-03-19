<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesDataRequest extends FormRequest
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
        $id = $this->route('company');

        return [
            'name' => 'required|string|max:255',
            'short_name' => 'required|string|max:50|unique:companies,short_name,' . ($id ?? 'null'),
            'email' => 'nullable|email|unique:companies,email,' . ($id ?? 'null'),
            'phone' => 'nullable|string|max:15',
        ];
    }
}
