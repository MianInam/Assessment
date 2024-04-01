<?php

namespace App\Http\Repositories\Auth;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\CommonTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthRepository implements AuthInterface
{
    use CommonTrait;

    public function login($request)
    {
        try {
            if (!Auth::attempt($request)) {
                return $this->sendError("invalid credentials", false);
            }
            $user = User::where('email', $request['email'])->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;
            return $this->sendSuccess("success", ["user"=>new UserResource($user),"token"=>$token]);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), false);
        }

    }

    public function register($request)
    {
        try {

            $user = User::create([
                'name' => ucfirst($request['name']),
                'email' => $request['email'],
                'password' => Hash::make($request['password'])
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;
            return $this->sendSuccess("success", ["user"=>new UserResource($user),"token"=>$token]);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), false);
        }

    }

    public function logout()
    {
        try {
            auth()->user()->tokens()->delete();
            return $this->sendSuccess("Logout Successfully", null);
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), false);
        }

    }
}
