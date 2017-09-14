<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __constructor(){
            $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store() {

        if (! auth()->attempt(request(['password'])))
        {
            return back()->withErrors([
                'message' => 'Niepoprawne dane logowania'
            ]);
        }

        return redirect('/');
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
