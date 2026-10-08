<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
public function showloginform(){
return view ('auth.login');    
}

public function showregister(){
return view('auth.register');    
}

public function login(Request $request) {
$credentials = $request->validate([
'email' => 'required|email',
'password' => 'required'
 ]);
if (Auth::attempt($credentials)) {
$request->session()->regenerate();
return redirect('/dashboard')->with('success', 'Login ho gaya!');
 }
return back()->withErrors([
'email' => 'Email ya password galat hai.',
])->onlyInput('email');
}

public function register(Request $request){
$request->validate([
'first_name' => 'required|string|max:255',
'last_name' => 'required|string|max:255',
'phone_number' => 'required|string|max:15',
'email' => 'required|string|email|max:255|unique:users',
'password' => 'required|string|min:6',
 ]);
User::create([
'first_name' => $request->first_name,
'last_name' => $request->last_name,
'phone_number' => $request->phone_number,
'email' => $request->email,
'password' => Hash::make($request->password),
]);
return redirect()->back()->with('success', 'Registration successful!');
}

public function logout(Request $request) {
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect('/login');
}
}
