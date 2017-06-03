<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'required|between:1,1000'
        ];
    }

    public function messages()
    {
        return [
            'body.required' => 'Komentar tidak boleh kosong',
            'body.between' => 'Komentar harus antara :min sampai :max karakter'
        ];
    }
}
