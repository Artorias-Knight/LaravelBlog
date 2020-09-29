<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'mailsubject' => 'required',
            'content' => 'required',
            //'file' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'mailsubject.required' => 'Por favor informe o nome',
            'content.required' => 'Por favor informe o conteúdo do email',
            //'file.required' => 'Por favor anexe os arquivos em pdf ou em forma de imagem',
        ];
    }
}
