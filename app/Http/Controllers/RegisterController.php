<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }



    public function create(Request $request)
    {
        try {
            $validated_data = $this->validateRequest($request);
            $final_data = $this->filtering($validated_data);
            $this->store($final_data);
            return redirect()->route('login')->with('success', 'Registration Successful! Please Login to Continue')->with("email" , $final_data['email']);
        } catch (\Illuminate\Database\QueryException $e) {
            return view("error.db_error");
        }
    }







    private function validateRequest(Request $request)
    {

        $validated = $request->validate([
            "first_name" => "required|min:2|max:50|regex:/^[^\s]+$/",
            "last_name" => "required|min:2|max:50|regex:/^(?!\s)(?!.*\s{2})[\w\s]+$/",
            "age" => "required|numeric|min:13|max:150",
            "gender" => "required|in:Male,Female",
            "email" => "required|email:filter|unique:users,email",
            "password" => "required|min:6|confirmed"
        ]);



        return $validated;
    }

    private function store($data)
    {
        $data['password'] = Hash::make($data['password']);
        User::create($data);
    }

    private function filtering($data)
    {
        foreach ($data as $key => $value) {
            if ($key === 'first_name' || $key === 'last_name') {
                $data[$key] = ucfirst(strtolower($value));
            }
        }

        return $data;
    }



}
