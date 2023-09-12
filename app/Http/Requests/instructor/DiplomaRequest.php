<?php

namespace App\Http\Requests\instructor;

use Illuminate\Foundation\Http\FormRequest;

class DiplomaRequest extends FormRequest
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
            'name' =>'required',
            'description' =>'required',
            'discount' =>'required',
            'category' => 'required',
        ];
    }
}
