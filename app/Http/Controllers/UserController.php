<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Users;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Users::all();
    }

    public function test(){
        return 'test';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'mobile' => ['required',Rule::unique('users')->ignore($user->id, 'user_id')],
            'email' => ['required',Rule::unique('users')->ignore($user->id, 'user_id')],
            'password' => ['required', 'confirmed', Password::min(8)->uncompromised(3),Hash::make($request->newPassword)]

        ]);
        //
        return Users::create($request -> all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Users::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       $post = Users::find($id);
       $post -> update($request -> all());
       return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Users::destroy($id);
    }
}

// public function saveUsers(Request $request){
//     $users = new Users();
//     $users->name             = $request->name;
//     $users->date_of_birth    = $request->date_of_birth;
//     $users->gender           = $request->gender;
//     $users->country          = $request->country;
//     $users->mobile           = $request->mobile;
//     $users->mobile_verified  = $request->mobile_verified;
//     $users->email            = $request->email;
//     $users->email_verified   = $request->email_verified;
//     $users->password         = $request->password;
//     $users->save();

//     return Response::json($users,201);  
// }