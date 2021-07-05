<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkerRequest extends FormRequest
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
        /*$rules = [
            'name' => ['required'],
            'surname' => ['required'],
            'dni' => ['required', 'numeric', 'digits:8', Rule::unique('workers')->ignore($this->route('user')->id)],
            'state' => ['required'],
            'rol' => ['required'],
            'email' => ['required', Rule::unique('workers')->ignore($this->route('user')->id)]
        ];

        if ($this->filled('password'))
        {
            $rules['password'] = ['min:8', 'confirmed'];
        }

        return $rules;*/
    }
}
