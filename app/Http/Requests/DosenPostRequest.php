<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DosenPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nid' => ['required|unique:dosen'],
            'nama' => ['required'],
            'no_hp' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ];
    }
}
