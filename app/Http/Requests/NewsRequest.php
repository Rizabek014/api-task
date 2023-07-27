<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiFormRequest;

class NewsRequest extends ApiFormRequest
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
            'id' => 'integer|exists:news,id',
            'header' => 'string|min:2|max:255',
            'announcement' => 'string|min:2|max:255',
            'text' => 'string|min:2|max:255',
            'author_id'=> 'integer|exists:authors,id',
            'rubric_id' => 'integer|exists:rubrics,id',
        ];
    }

    public function messages()
    {
        return [
            'id.integer' => 'ID field must be integer',
            'id.exists' => 'No such ID exists',

            'header.string' => 'field header must be string',
            'header.min' => 'field header must have at least [:min] character',
            'header.max' => 'field header can have max [:max] character',

            'announcement.string' => 'field announcement must be string',
            'announcement.min' => 'field announcement must have at least [:min] character',
            'announcement.max' => 'field announcement can have max [:max] character',

            'text.string' => 'field text must be string',
            'text.min' => 'field text must have at least [:min] character',
            'text.max' => 'field text can have max [:max] character',

            'author_id.integer' => 'field author_id must be integer',
            'author_id.exists' => 'No such author_id exists',

            'rubric_id.integer' => 'field rubric_id must be integer',
            'rubric_id.exists' => 'No such rubric_id exists',
        ];
    }
}
