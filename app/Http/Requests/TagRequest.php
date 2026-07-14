<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|unique:tags,name'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome del tag è obbligatorio e deve avere almeno 3 caratteri',
            'name.min' => 'Il nome del tag deve avere almeno 3 caratteri',
            'name.unique' => 'Questo tag esiste già'
        ];
    }
}
