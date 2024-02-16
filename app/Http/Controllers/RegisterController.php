<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }

    public function create(Request $request)
    {
        $validated_data = $request->validate([
            "first_name" => "required|min:2|max:50|regex:/^[^\s]+$/",
            "last_name" => "required|min:2|max:50|regex:/^(?!\s)(?!.*\s{2})[\w\s]+$/",
            "age" => "required|numeric|min:13|max:150",
            "gender" => "required|in:Male,Female",
            "email" => "required|email:filter|unique:users",
            "password" => "required|min:6|confirmed"
        ]);



        dd($validated_data);
    }
}
