<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function create(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $this->validateRequest($credentials);

        try {
            if (Auth::attempt($credentials)) {
                return redirect()->route('home');
            } else {
                // Authentication failed, redirect back with error message
                return redirect()->back()->withInput()->withErrors(['login_fail' => 'Invalid email or password']);
            }
        } catch (\Illuminate\Database\QueryException $e) {
            return view("error.db_error");
        }

    }

    private function validateRequest(array $credentials)
    {
        // Validate the credentials
        return Validator::make($credentials, [
            "email" => "required|min:2|max:255|email",
            "password" => "required|min:2|max:100"
        ])->validate();
    }

    private function checkCredentials($user, $inputPassword)
    {

    }
}
