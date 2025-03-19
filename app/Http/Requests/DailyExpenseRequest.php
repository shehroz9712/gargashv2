<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DailyExpenseRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'bags' => 'nullable|integer|min:0',
            'cash_payment' => 'nullable|numeric|min:0',
            'vehicle' => 'required|string|max:255',
            'expense_type' => 'required|in:diesel,misc,carriage,fare',
            'amount' => 'required|numeric|min:0',
        ];
    }
}
