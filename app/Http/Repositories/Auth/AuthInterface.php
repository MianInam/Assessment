<?php

namespace App\Http\Repositories\Auth;

interface AuthInterface
{
    public function register($request);
    public function logout();
    public function login($request);
}
