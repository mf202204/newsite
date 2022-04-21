<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 空欄OK、特殊記号禁止
            'title' => 'nullable|regex:/^[^#<>^;_]*$/',
            // 必須、特殊記号禁止
            'main' => 'required|regex:/^[^#<>^;_]*$/',
            // 必須、Email形式のみOK
            'email' => 'required|email',
            // 必須、数字と+と半角空欄のみOK
            'phone' => 'required|regex:/^[0-9 +]*$/'
        ];
    }

    public function messages()
    {
        return [
            'title.regex' => '使用禁止記号#<>^;_を消してください',
            'main.required' => '必須 (required)',
            'email.required' => '必須 (required)',
            'phone.required' => '必須 (required)',
            'main.regex' => '使用禁止記号#<>^;_を消してください',
            'email.email' => '正しいEmail形式で入力ください',
            'phone.regex' => '使えるのは、数字と+のみです'
        ];
    }
}
