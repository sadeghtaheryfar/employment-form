<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInputsFromRequest extends FormRequest
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
            'type' => 'required|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'title' => 'required|max:120|min:3|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'placeholder' => 'required|max:120|min:3|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'select_values' => 'max:120|min:3|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'recruitment_id' => 'max:120|min:3|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'status' => 'max:120|min:3|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
        ];
    }
}
