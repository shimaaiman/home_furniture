<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Auth;

class AuthController extends Controller
{
    Public function login(Request $request){
    	$LoginData = ['email' => $request -> email, 'password' => $request -> password];

    	if(Auth::attempt($LoginData)){
    		$user = Auth::user();
    		$token = $user->createToken('my api token')->accessToken;

    		return Response([
    			'status' => 'success',
    			'token' => $token
    		]);
    	}
    	return Response([
    			'status' => 'error',
    			'message' => 'invalid authentication'
    		]);

    }
}
