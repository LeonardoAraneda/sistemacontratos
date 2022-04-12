<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
        $user = $this->route('user');
        return [
            'name' => 'required|max:25',
            'rut' => [
                'required','unique:users,rut,' . $user->id
                ],
            'rol' => 'required',
            'area' => 'required',
            'email' => [
                'required', 'email', 'unique:users,email,' . request()->route('user')->id
            ],
            'password' => 'sometimes'
        ];
    }
}
