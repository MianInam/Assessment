<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Auth\AuthInterface;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Traits\CommonTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    protected $authInterface;

    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    use CommonTrait;

    public function login(LoginRequest $request)
    {
        return $this->authInterface->login($request->validated());
    }

    public function logout()
    {
        return $this->authInterface->logout();
    }

    function register(RegisterRequest $request)
    {
        return $this->authInterface->register($request->validated());
    }

}
