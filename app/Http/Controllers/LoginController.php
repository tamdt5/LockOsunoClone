<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    
    public function getLogin ()
    {
        if (!Auth::check()) {
            return view('login.index');
        }
        
        return redirect()->route('admin.categories.index');
    }

    public function postLogin (LoginRequest $request)
    {
        $userdoichieu=DB::table('users')->where('email',$request->email)->first();

        $login = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => $userdoichieu->level,
        ];
        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->route('admin.categories.index');
        }
        return back()->with([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout (Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('getLogin');
    }
}
