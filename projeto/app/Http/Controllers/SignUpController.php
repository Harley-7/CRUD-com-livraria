<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index(){
        return view('signup', [
            'title' => 'Cadastre-se'
        ]);
    }

    public function create(Request $request){
        
        $validated = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8' 
        ]);

    }


}
