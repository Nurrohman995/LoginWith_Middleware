<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ContohController extends Controller
{
    public function __construct(){
        // $this->middleware(['check']);
    }
    public function index(){
        return view('contoh');
    }
    public function dologin(Request $req){
        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/masuk');
            // return 'sukses';
        }else{
            return redirect('/gagal')->with('errors','Password Salah');
        }
    }
    public function LogOut(){
        Auth::logout();
        return redirect('/');
    }
}
