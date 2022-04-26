<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Laratrust\Traits\LaratrustUserTrait;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function users(){
        $users = User::join('role_user', 'role_user.user_id', '=', 'users.id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id');

        return $users;
    }


    public function index()

    {
        $Superadministrateur = $this->users()->where('roles.name', 'Superadministrateur')->count();
        $Administrateur = $this->users()->where('roles.name', 'Administrateur')->count();
        $Caissier = $this->users()->where('roles.name', 'Caissier')->count();
        $Enseignant = $this->users()->where('roles.name', 'Enseignant')->count();
        $Elève = $this->users()->where('roles.name', 'Elève')->count();

        $userAll = User::All();
        $Inactifs = User::All()->where('status',0);
        $Actifs = User::All()->where('status',1);
        return view('Admin.Admin',['Inactifs'=>$Inactifs,'Actifs'=>$Actifs,'user'=>$userAll,'Caissier'=>$Caissier,'Enseignant'=>$Enseignant,'Elève'=>$Elève]);
    }

    public function profilsUsers()

    {
        $roleAll = Role::paginate(3);
        $permissions = Permission::All();
        return view('Admin.profilUsersView',['roles'=>$roleAll,'permission'=>$permissions]);
    }

    public function profilsUsersView($id)

    {
        $roleUnique = Role::find($id);

        return view('Admin.profilUsers',['rolesUnique'=>$roleUnique]);
    }

    public function permissionsUsers()

    {
        $permissionUnique = Permission::paginate(5);
        return view('Admin.permissionsView',['permissionsUnique'=>$permissionUnique]);
    }

    public function usersView()

    {
        $roleAll = Role::All()->except("Superadministrateur");
        $userUnique = User::paginate(4);
        return view('Admin.usersView',['user'=>$userUnique],['role'=>$roleAll]);

    }

    public function show($id)
    {
        $user = User::find($id);
         $users =  Role::with('users')->where('id','=',$id);
        //User::join('role_user','users.id', '=', 'role_user.user_id')
        //                 ->join('roles', 'roles.id', '=', 'role_user.role_id')
        //                 -> where('users.id', '=', $id)
        //                 ->get();
       //var_dump($users);
        if ($user){
            $roles = Role::whereNotIn('roles.name', ['Caissier','Superadministrateur','Administrateur','Enseignant'])->get();
           return view('Admin.show', ['user'=>$user, 'roles'=>$roles,'usersRole'=>$users]);

        }else{
            return response()->json(['type' => 'error', 'message' => 'Une erreur est survenue !']);
        }
    }

    public function edit($id){
        $user = User::find($id);
        if ($user){
            $roles = Role::whereNotIn('roles.name', ['etudiant', 'candidat'])->get();
            return view('admin.users.modals.edit', ['user'=>$user, 'roles'=>$roles]);
        }else{
            return response()->json(['type' => 'error', 'message' => 'Une erreur est survenue !']);
        }
    }

}
