<?php

namespace App\Http\Requests\Prouct;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // バリデーションルール
        return [
            'name' => 'required|string|max:64',
            'copy' => 'string|max:64',
            'detail' => 'string|max:2048',
            'spec' => 'string|max:4096',
            'url' => 'string|max:256',
            'order' => 'integer|between:0,1000',

            // 投稿された商品画像
            'images' => 'array|max:4',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    // 投稿された商品画像
    public function images(): array
    {
        return $this->file('images', []);
    }
}
