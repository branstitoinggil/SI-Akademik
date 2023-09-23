<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $token = auth('api')->attempt($credentials);
        if(!$token){
            return response()->json(['error' => 'Unauthorized'],401);
        }

        $user = Auth::user();
        return response()->json([
                'status' => 'success',
                'user' => $user,
                'authorisation' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
    }

    public function me(){
        return response()->json(auth()->user());
    }

    public function logout(){
        auth('api')->logout();
        return response()->json(['message' => 'Successfully Logged out !']);
    }

    public function refresh(){
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL*60
        ]);
    }

    public function register(Request $request){
        
        $validator = Validator::make($request->all(),[
            'nip' => 'required|string|max:255|unique:users',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        try{
            if($validator->fails()){
                return response()->json([
                    'status' => 'error',
                    'success' => 'false',
                    'error' => $validator->errors()->toArray()
                ],400);
            }else{
                $user = User::create([
                    'nip' => $request->input('nip'),
                    'nama' => $request->input('nama'),
                    'email' => $request->input('email'),
                    'no_hp' => $request->input('no_hp'),
                    'password' => bcrypt($request->input('password')),
                ]);
    
                return response()->json([
                    'message' => 'User Telah Dibuat !',
                    'User' => $user
                ]);
            }
        }catch(\Throwable $e){
            return $e->getMessage();
        }
    }
}
