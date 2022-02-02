<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Users;

class UserController extends Controller
{
    public function saveUsers(Request $request){
        $users = new Users();
        $users->name             = $request->name;
        $users->date_of_birth    = $request->date_of_birth;
        $users->gender           = $request->gender;
        $users->country          = $request->country;
        $users->mobile           = $request->mobile;
        $users->mobile_verified  = $request->mobile_verified;
        $users->email            = $request->email;
        $users->email_verified   = $request->email_verified;
        $users->password         = $request->password;
        $users->save();

        return Response::json($users,201);


      
    }
}
