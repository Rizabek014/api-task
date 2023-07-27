<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiFormRequest;

class RubricsRequest extends ApiFormRequest
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
            'id' => 'integer|exists:rubrics,id',
            'parent_id' => 'nullable|integer|exists:rubrics,id',
            'name' => 'string|min:2|max:255',
        ];
    }
    public function messages()
    {
        return [
            'id.integer' => 'ID field must be integer',
            'id.exists' => 'No such ID exists',

            'parent_id.integer' => 'field parent_id must be integer',
            'parent_id.exists' => 'No such ID exists',

            'name.string' => 'field name must be string',
            'name.min' => 'field name must have at least [:min] character',
            'name.max' => 'field name can have max [:max] character',
        ];
    }
}
