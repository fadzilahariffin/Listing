<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserApiController extends Controller
{
    public $success_status = 200;
    public $error_status = 401;

    public function login()
    { 

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $token = auth()->user()->createToken('MyApp')->accessToken; 
            return response()->json(['token'=> $token, 'user_id' => auth()->user()->id , 'status' => ['code' => $this->success_status,'message' => 'Access Granted']], $this->success_status); 
        } 

        return response()->json(['error'=> 'Unauthorised','status' => ['code' => $this->error_status,'message' => 'Access Denied']], $this->error_status); 
    

    }

}
