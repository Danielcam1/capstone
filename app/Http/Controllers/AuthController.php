<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 
class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
 
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->middlename = $request->middlename;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return back()->with('success', 'Registered successfully');
    }
 
    public function login()
    {
        return view('login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Logged-In Successfully');
        }
 
        return back()->with('error', 'Invalid Email or Password');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}