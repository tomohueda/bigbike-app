<?php

namespace App\Http\Requests\Prouct;

use Illuminate\Foundation\Http\FormRequest;

class RentalClassRequest extends FormRequest
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
        return [
            // 名前。最大値は64文字
            'name' => 'required|string|max:64',
            // 詳細
            'detail' => 'string|max:2048',
            //順番
            'order' => 'integer|between:0,1000',
        ];
    }
}
