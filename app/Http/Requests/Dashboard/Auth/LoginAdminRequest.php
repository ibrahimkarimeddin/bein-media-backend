<?php

namespace App\Http\Requests\Dashboard\Auth;

use App\Http\Requests\Base\BaseRequestForm;

class LoginAdminRequest extends BaseRequestForm
{

    public function rules()
    {
        return [
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|string|max:255|min:8',
        ];
    }
}
