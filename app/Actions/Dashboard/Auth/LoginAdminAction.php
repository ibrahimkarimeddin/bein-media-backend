<?php
namespace App\Actions\Dashboard\Auth;

use App\Http\Requests\Dashboard\Auth\LoginAdminRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class LoginAdminAction{

    public function handel(LoginAdminRequest $request){

        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];
         $admin = Admin::where('email', $credentials['email'])->first();
         // check if two password are same
         if(!Hash::check($request->password , $admin->password)){
            return false;
         }

        $token = $admin->createToken('admin')->plainTextToken;
        $admin['role_type']= "Super Admin";
        return [
            'admin' => $admin,
            'token' => $token,
        ];
    }



}
