<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login (Request $request) {
        if($request->method()=="GET") {
            return view('auth.login');
        }
        $email = $request ->input('email');
        $password = $request ->input("password");
        $pengguna = Users::query()->where("email",$email)->first();
        if($pengguna == null) {
            return redirect()->back()->withErrors(["msg"=>"email tidak ditemukan"]);
        }
        if(!Hash::check($password,  $pengguna->password)) {
            return redirect()->back()->withErrors(["msg"=>"password salah !"]);
        }
        if(!session()->isStarted()) session()->start();
        session()->put("logged", true);
        session()->put("isPengguna", $pengguna->id);
        return redirect('/');
    }
    function logout() {
        session()->flush();
        return redirect()->route("login");
    }
}
