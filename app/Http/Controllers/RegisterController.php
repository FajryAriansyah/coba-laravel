<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255', // membuat dua kondisi dengan memisahkannya dengan pipe
            'username' => ['required', 'min:3', 'max:255', 'unique:users'], // membuat beberapa kondisi dengan array.
            'email' => 'required|email:dns|unique:users', // dns agar sesuai dengan domain name system
            'password' => 'required|min:5|max:255'
        ]);
        // enkripsi password cara 1
        // $validatedData['password'] = bcrypt($validatedData['password']);
        // enkripsi password cara 2
        $validatedData['password'] = Hash::make($validatedData['password']);



        User::create($validatedData);

        // $request->session()->flash('success', "Registrasi berhasil! silahkan login"); // Megirim sesi sukses

        return redirect('/login')->with('success', "Registrasi berhasil! silahkan login");
        
    }
}
