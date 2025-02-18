<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Events\Registered;


class UserController extends Controller
{
    public function create(){
        return view('auth.Register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'fullname' => ['required', 'max:20', 'min:5'],
            'username' => ['required', 'max:15', 'min:5'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:8'],
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
       if ($request->hasFile('profile_photo')) {
            $image = $request->file('profile_photo');
            $imageName = time() . '.' . $image->extension();
            $imagePath = $image->storeAs('uploads', $imageName, 'public');
            $formFields['profile_photo'] = $imagePath;
        }

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'created account success and logged in!');
    }

    public function login(){
        return view('Auth.Login');
    }

    public function Autentificate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('status', 'you are now logged in');
        }
        return back()->withErrors([
            'email' => 'invalid Credentials'
        ])->onlyInput('email');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('status', 'Logged out successfully!');
    }
}
