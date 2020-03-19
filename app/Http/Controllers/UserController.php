<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use App\Models\Users\User_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
//use JWTAuth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\PayloadFactory;
use Tymon\JWTAuth\JWTManager as JWT;

class UserController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

    public function register(Request $request)
    {
    
        $user = User::create([
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'name' => $request->get('name'),
            'phone_num' => $request->get('phone_num'),
            'location' => $request->get('location'),
            'picture' => $request->get('picture'),
            'youtube_url' => $request->get('youtube_url')
        ]);

        $user_type = User_type::create([
            'user_id' => User::where('email', $request->get('email'))->first('id')->id,
            'type_id' => $request->get('type')
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }

    public function getAuthenticatedUser()
        {
                try {
                        if (! $user = JWTAuth::parseToken()->authenticate()) {
                            return response()->json(['user_not_found'], 404);
                        }

                } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
                        return response()->json(['token_expired'], $e->getStatusCode());
                } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                        return response()->json(['token_invalid'], $e->getStatusCode());
                } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
                        return response()->json(['token_absent'], $e->getStatusCode());
                }
                return response()->json(compact('user'));
        }

    public function getUserType(Request $request) {

        $id=$request->id;
        $user_type = User_type::where('user_id', $id)->first('type_id')->type_id;
        return response()->json($user_type);
    }

    public function getUserInfo(Request $request) {

        $id = $request->id;
        $user_info = User::where('id', $id)->first();
        return response()->json($user_info);
    }
}
