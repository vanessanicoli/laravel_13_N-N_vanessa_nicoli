<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required | min:3',
            'subtitle' => 'required | min:3',
            'author' => 'required | min:3',
            'body' => 'required | min:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio e deve avere almeno 3 caratteri',
            'title.min' => 'Il titolo deve avere almeno 3 caratteri',
            'subtitle.required' => 'Il sottotitolo è obbligatorio e deve avere almeno 3 caratteri',
            'subtitle.min' => 'Il sottotitolo deve avere almeno 3 caratteri',
            'author.required' => 'L\'autore è obbligatorio e deve avere almeno 3 caratteri',
            'author.min' => 'L\'autore deve avere almeno 3 caratteri',
            'body.required' => 'Il corpo è obbligatorio e deve avere almeno 10 caratteri',
            'body.min' => 'Il corpo deve avere almeno 10 caratteri',
        ];
    }
}
