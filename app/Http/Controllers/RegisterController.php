<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password_confirmation' => ['required', 'same:password'],
        ]);   
        if  ($validator->fails()) {
            return  redirect()->back()->withErrors($validator)->withInput();;
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string','min:8','regex:/^(?=.*[A-Z])(?=.*\d).+$/'],
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
            
        ]);

        $user = User::where('email', $request->email)->first();


        Mail::to($user->email)->send(new WelcomeEmail($user));
        return view('auth.login');
}
}


