<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('index');
    }

    public function index()
    {
        return view('Eleve.index');
    }

    public function addEleves()
    {

        return back();
    }
}
