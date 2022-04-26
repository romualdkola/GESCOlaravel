<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use DB;

class RegisterController extends Controller
{


    public function index()
    {
        $roleAll = Role::All();
        return view('register',['role'=>$roleAll]);
    }

    public function register(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(4);
         $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],

        ]);

            $userAll = User::All();
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            $user = User::create($input);
            $user->attachRole('Superadministrateur');
            return view('login');
    }

    function generateRandomPassword($chars) {
        $data = '123456789ABCDEFGHIJKLMNPQRSTUVWXYZ';
        return substr(str_shuffle($data), 0, $chars);
    }
}
