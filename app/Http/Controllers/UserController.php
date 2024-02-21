<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Register user
    public function register(Request $request)
    {
        $main_id = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);;
        $formFields = $request->validate([
            'username' => ['required', Rule::unique('users', 'username')],
            'password' => 'required|min:6',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone' => 'required'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $formFields['main_id'] = $main_id;

        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('alert', 'New account created successfully');
    }

    public function loginuser(Request $request)
    {
        $formFields = $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return json_encode(['status' => 'success', 'response' => "Logged in successfully"]);
        }

        // return back()->withErrors(['username' => 'Invalid credentials'])->onlyInput('username');

        return json_encode(['status' => 'error', 'response' => "Invalid credentials"]);
    }

    //Logout user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('alert', 'You have logged out successfully');
    }

    //Show Dashboard
    public function dashboard()
    {
        return view('dashboard.index');
    }
}
