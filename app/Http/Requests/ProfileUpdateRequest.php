<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // 管理者orユーザーの判定
        if ($this->is('admin/*')) {
            return [
                'name' => ['string', 'max:255'],
                'email' => ['email', 'max:255', Rule::unique(Admin::class)->ignore($this->user()->id)],
            ];
        }
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
