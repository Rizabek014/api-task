<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiFormRequest;

class AuthorsRequest extends ApiFormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id' => 'integer|exists:authors,id',
            'Name' => 'string|min:2|max:255',
            'email' => 'string|min:2|max:255|email',
            'img' => 'string|min:2|max:255',
        ];
    }
    public function messages()
    {
        return [
            'id.integer' => 'ID field must be integer',
            'id.exists' => 'No such ID exists',

            'Name.string' => 'field name must be string',
            'Name.min' => 'field name must have at least [:min] character',
            'Name.max' => 'field name can have max [:max] character',

            'email.string' => 'field email must be string',
            'email.min' => 'field email must have at least [:min] character',
            'email.max' => 'field email can have max [:max] character',
            'email.email' => 'attribute must be a example.com address',

            'img.string' => 'field img must be string',
            'img.min' => 'field img must have at least [:min] character',
            'img.max' => 'field img can have max [:max] character',
        ];
    }
}
