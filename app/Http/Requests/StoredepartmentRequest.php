<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoredepartmentRequest extends FormRequest
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
            "name"=>"required|string|min:3|max:25|unique:departments,name",
            "description"=>"nullable|min:10|max:100"
        ];
    }
}
