<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'tweet' => 'required|max:140'
        ];
    }

    public function tweet(): string
    {
        return $this->input('tweet');
    }
}
