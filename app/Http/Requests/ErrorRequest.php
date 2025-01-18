<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'login'=>'required|min: 3',
                'password'=>'required|min: 8',
        ];
    }
    public function messages()
    {
        return[
            'login.required' => 'Дурачёк, как ты без ЛОГИНА войти хочешь',
            'login.min' => 'Дурачёк, у нас нет логинов корчое 3 букв',
            'password.required' => 'Дурачёк, как мы без ПАРОЛЯ пустим тебя',
            'password.min' => 'не не не, пароль должен быть минмум 8 символов',
        ];
    }
}