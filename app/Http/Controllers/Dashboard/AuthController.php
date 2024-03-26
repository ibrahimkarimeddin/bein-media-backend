<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\Dashboard\Auth\LoginAdminAction;
use App\Enums\ResponseEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Auth\LoginAdminRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(LoginAdminRequest $request , LoginAdminAction $loginAdminAction){


        $data = $loginAdminAction->handel($request);

        return $this->sendResponse(ResponseEnum::GET , $data);
    }

}
