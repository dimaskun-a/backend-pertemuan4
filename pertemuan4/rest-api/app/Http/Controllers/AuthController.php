<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        /**
         * fitur Register
         * Ambil input name, email, dan password
         *input datanya ke database menggunakan user model
         */

        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];

        $user = user::create($input);

        $data = [
            'massage' => 'Register is successfully'
        ];

        return response()->json($data, 200);
    }

    public function login(Request $request)
    {
        /**
         *fitur login
         *ambil input email dan password dari user
         *ambil input email dan password dari database berdasarkan email
         *bandingkan data input user dan data dari database
         */

         $input = [
             'email' => $request->email,
             'password' => $request->password,
         ];

         $user = user::where('email',$input['email'])->first();
         if ($input['email'] = $user->email && Hash::check($input['password'], $user->password)) {
             $token = $user->CreateToken('auth_token');
             $data =[
                 'massage' => 'login is successfully',
                 'token' => $token->plainTextToken
             ];

             return response()->json($data, 200);
        }
        else {
            $data = [
                'massage' => 'login is invalid'
            ];

            return response()->json($data, 401);
        }
    }
}
