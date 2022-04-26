@extends('layouts.app')

@section('content')
<div class="wrapper">
    @include('layouts.navbar')
    <!-- Main Sidebar Container -->
    @include('layouts.sidebar')
    <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-3">
              <h1>Utilisateurs</h1>
            </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-edit"></i> Ajouter
                  </button>
              </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                <li class="breadcrumb-item active">#</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">roleId</th>
                        <th style="width: 30px">Nom roles</th>
                        <th style="width: 30px">Addresse electronique</th>
                        <th style="width: 30px">Status</th>
                        <th style="width: 40px">Options</th>
                      </tr>
                    </thead>
                    <tbody>
                  @if(!empty($user) && $user->count())
                        @foreach ($user as $users)
                        <tr>
                            <td>users_U0{{ $users->id }}</td>
                            @if ( $users->name=='Superadministrateur')
                            <td >{{ $users->name }}</td>
                            @elseif($users->name=='Administrateur')
                            <td>{{ $users->name }}</td>
                            @else
                            <td>{{ $users->name }}</td>
                            @endif
                            <td class="badge bg-warning">{{ $users->email }}</td>
                            @if ( $users->status== 1)
                                 <td><span class="badge bg-success">Activé(e)</span></td>
                                 @else
                                 <td><span class="badge bg-danger">Désactivé(e)</span></td>
                            @endif
                           
                            <td>
                                <a href="{{route('Admin.profilsUsersView', $users->id)}}" class="btn btn-outline-primary btn-flat"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-outline-danger btn-flat"><i class="fa fa-trash"></i></a>
                                @if ($users->status== 1)
                                <a href="{{ route('Active.Desactive',$users->id) }}" class="btn btn-outline-success"><i class="fas fa-eye"></i></a>
                                  @else
                                  <a href="{{ route('Active.Desactive',$users->id) }}" class="btn btn-outline-warning"><i class="fa fa-eye-slash"></i></a>
                                @endif
                            </td>
                          </tr>
                        @endforeach
                  @else
                        <tr>
                            <td colspan="10">Il n'y a aucune données existante.</td>
                        </tr>
                  @endif
                    </tbody>
                  </table>
                  {!! $user->links() !!}
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
        </div><!-- /.container-fluid -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Default Modal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ajouter un utilisateur</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
              <div class="col-sm-12">
                  <div class="form-group">
                      <label class="col-form-label" for="inputSuccess">Nom Complet</label>
                      <input type="text" class="form-control" placeholder="Nom complet">
                    </div>
                  <div class="form-group">
                      <label class="col-form-label" for="inputSuccess">Addresse électronique</label>
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputSuccess">Mot de passe</label>
                      <input type="password" class="form-control" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputSuccess">Comfimer mot de passe</label>
                      <input type="password" class="form-control" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                      <select name="" id="" class="form-control">
                        <option value="">
                         Choisir le rôle
                        </option>
                        @foreach ($role as $roles)
                        <option value="{{ $roles->name }}" >
                          {{ $roles->name }}
                        </option>
                        @endforeach
                      </select>
                  </div>
              </div>
                  </div>

                  <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Fermer</button>
                      <button type="button" class="btn btn-primary"><i class="fa fa-check"></i>Ajouter</button>
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
               
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        </div>
          <!-- /.modal -->
      </section>
      
</div>
</div>
@endsection
