<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(){
        // return view('auth.login');
        // dd(request()->all());
        $validate = request()->validate([
            'email' => ['required','email'],
            'password'=> ['required']
        ]);
        if(Auth::attempt($validate)){
            request()->session()->regenerate();
            return redirect('/jobs')->with(['success'=>'You have succesfully logged In! Enjoy the journey!!']);
            }else{
                return back()->with(['error'=>'Invalid email or password']);
            }
    }
    public function destroy(){
        // return view('auth.login');
        // dd('Logout user');
        Auth::logout();
        return redirect('/login');
    }
}
