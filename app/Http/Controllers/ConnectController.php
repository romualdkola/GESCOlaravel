<?php
namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Arr;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class ConnectController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout','Login','ActiveDesactive');
    }

    public function index()
    {
        return view('login');
    }

    public function Login(Request $request)
    {

        $input = $request->all();
        $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required',
        ]);

    if (Auth::attempt(['email' => $input['email'], 'password' => $input['password'], 'status' => 1]))
        {

             Alert::success('Bienvenue', 'Connexion reussie');
            return redirect()->route('Admin.index');
            }
        else
        {
            Alert::error('Desole', 'Vous n\'etes pas autorise a vous connecter, Veuillez contacter
            l\'administrateur');
            return redirect('/');

    }
}

public function registed(Request $request)
{
    $user = User::create([
        'name' => $data['name'],
        'password' => Hash::make($data['password']),
      ]);

      // every new user gets the role "student"
      $user->roles()->assign('Superadministrateur');

      return $user;
}
    public function logout(Request $request)
            {

                Session::flush();
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
               return redirect()->route('home');
            }


public function ActiveDesactive($id)
            {
                $roleAll = Role::All()->except("Superadministrateur");
                $userUnique = User::paginate(4);

                $user = User::find($id);
                if ($user){
                    if ($user->status == "0"){
                        $user->status = "1";
                    }else{
                        $user->status = "0";
                    }
                    $user->save();
                }
                return back();
            }
}
