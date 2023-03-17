<?php

namespace App\Http\Requests\Prouct;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
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
            // 商品名。最大値は64文字
            'name' => 'required|string|max:64',
            // 価格
            'detail' => 'required|string|max:2048'
        ];
    }
}
