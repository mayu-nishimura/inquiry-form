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
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel_1' => ['required', 'numeric', 'digits:3'],
            'tel_2' => ['required', 'numeric', 'digits:4'], 
            'tel_3' => ['required', 'numeric', 'digits:4'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['nullable', 'string', 'max:255'], 
            'select' => ['required'], 
            'detail' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'first_name.string' => '名前を文字列で入力してください',
            'first_name.max' => '名前を255文字以下で入力してください',
            'last_name.required' => '名を入力してください',
           'last_name.string' => '名前を文字列で入力してください',
            'last_name.max' => '名前を255文字以下で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => 'メールアドレスはメール形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',

            'tel_1.required' => '電話番号を入力してください',
            'tel_1.numeric' => '電話番号は数字で入力してください',
            'tel_1.digits' => '電話番号の市外局番は3桁で入力してください', 
            'tel_2.required' => '電話番号を入力してください', 
            'tel_2.numeric' => '電話番号は数字で入力してください',
            'tel_2.digits' => '電話番号の市内局番は4桁で入力してください', 
            'tel_3.required' => '電話番号を入力してください', 
            'tel_3.numeric' => '電話番号は数字で入力してください', 
            'tel_3.digits' => '電話番号の加入者番号は4桁で入力してください',

            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所は255文字以下で入力してください',
            'building.string' => '建物名を文字列で入力してください',
            'building.max' => '建物名は255文字以下で入力してください',
            'select.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせの内容を入力してください',
            'detail.string' => 'お問い合わせ内容を文字列で入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以下で入力してください'
        ];
    }
}
