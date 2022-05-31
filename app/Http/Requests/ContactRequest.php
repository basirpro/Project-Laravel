<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() //Проверка на то авторизован или нет пользователь
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
            'message' => 'required|min:15|max:500',
            'name' => 'required',
            'subject' => 'required|min:5|max:50',
            'email' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'имя'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'email.required' => 'Поле email является обязательным',
            'message.required' => 'Поле сообщение является обязательным',
            'message.min' => 'У поля message минимальных символов 15 должно быть',
            'subject.required' => 'Поле тема является обязательным',
        ];
    }
}
