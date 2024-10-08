<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('get')){
            return view('Client.User.login');
        }
        else if ($request->isMethod('post')) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                if (Auth::User()->role == 'admin') {
                    return redirect(route('admin'));
                } else {
                    if (!empty($_POST['remember'])) {
                        setcookie('email', $_POST['email'], time() + 3600);
                        setcookie('password', $_POST['password'], time() + 3600);
                    } else {
                        setcookie('email', '');
                        setcookie('password', '');
                    }
                    return redirect()->intended(route('home'));
                }
            }
            return back()->with('error', 'Email or password is incorrect');
        }
    }

    public function register(Request $request){
        if ($request->isMethod('get')) {
            return view('Client.User.register');
        } else if ($request->isMethod('post')) {
            $request->validate([
                'name' => [
                    'required',
                    'regex:/^[\pL\s]+$/u'
                ],
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
                'phone' => 'required|numeric|digits:10',
            ]);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'role' => 'user'
            ]);
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
