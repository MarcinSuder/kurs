<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsRequest extends FormRequest
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
            'nick' => 'required|max:40',
            'comment' => 'required|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'nick.required' => 'Proszę wypełnić pole Nick',
            'comment.required' => 'Proszę wpisać treść komentarza',


        ];
    }
}
