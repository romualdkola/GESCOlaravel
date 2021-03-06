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
              <h1>Enseignants</h1>
            </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus-circle"></i> Nouveau
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
                        <th style="width: 50px">Matricule</th>
                        <th style="width: 50px">Nom</th>
                        <th style="width: 50px">Prenom</th>
                        <th style="width: 50px">Anciennete</th>
                        <th style="width: 50px">Niveau Etude</th>
                        <th style="width: 70px">Status</th>
                        <th style="width: 10px">Options</th>
                      </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td>Role_A0{{ $role->id }}</td>
                            @if ( $role->name=='Superadministrateur')
                            <td class="badge bg-warning">{{ $role->name }}</td>
                            @elseif($role->name=='Administrateur')
                            <td class="badge bg-success">{{ $role->name }}</td>
                            @else
                            <td class="badge bg-primary">{{ $role->name }}</td>
                            @endif
                            <td>{{ $role->description }}</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <a href="{{ route('Admin.profilsUsersView', $role->id ) }}" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody> --}}
                  </table>
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
                  <h4 class="modal-title">Inscrire un Enseignant</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
        <div class="modal-body">
                   <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <span style="color: red;">(*) Champs Obligatoire</span>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row"
                  <!-- input states -->
              <div class="col-sm-6">
                  <div class="form-group">
                      <label class="col-form-label" for="inputSuccess">Matricule<span style="color: red;">*</span> </label>
                      <input type="text" class="form-control" placeholder="Matricule">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">Date de naissance<span style="color: red;">*</span> </label>
                        <input type="text" class="form-control" placeholder="Date de naissance">
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">Sexe<span style="color: red;">*</span> </label>
                        <select name="" id="" class="form-control" placeholder="Sexe">
                           <option>Choix sexe</option>
                           <option value="Masculin">M</option>
                           <option value="Feminin">F</option>
                       </select>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">Niveau d'etudes</label>
                       <select name="" id="" class="form-control" placeholder="Niveau etudes ...">
                           <option>Choix niveau</option>
                           <option value="BEP">BEP</option>
                           <option value="BAC">BAC</option>
                           <option value="BAC+1">BAC+1</option>
                           <option value="BAC+2">BAC+2</option>
                           <option value="BAC+3">BAC+3</option>
                       </select>
                      </div>
                  <div class="form-group">
                      <label class="col-form-label" for="inputSuccess">Decret d'autorisation d'enseigner</label>
                      <input type="text" class="form-control" placeholder="Decret autorisation">
                    </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label" for="inputSuccess">Nom<span style="color: red;">*</span> </label>
                    <input type="text" class="form-control" placeholder="Nom(s) Enseignant">
                  </div>
                  <div class="form-group">
                      <label class="col-form-label" for="inputSuccess">Prenom<span style="color: red;">*</span></label>
                      <input type="text" class="form-control" placeholder="Prenom(s) Enseignant">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputSuccess">Anciennete dans l'enseignement</label>
                      <input type="text" class="form-control" placeholder="Nombres d'annees">
                    </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputSuccess">Anciennete dans l'etablissement</label>
                    <input type="text" class="form-control" placeholder="Nombres d'annees">
                  </div>
            </div>
                  <div class="row">
                    <div class="card-header card-warning">
                        <span style="">Informations complementaire</span>
                      </div>
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <span style="color: goldenrod;">Classe(s) tenues</span>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <span style="color: goldenrod;">Matiere(s) enseignee(s)</span>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                      </div>
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

                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          <div class="modal fade" id="modal-default1">
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
                <h3 class="card-title">Ajouter un r??le</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row"
                  <!-- input states -->
              <div class="col-sm-12">
                  <div class="form-group">
                      <label class="col-form-label" for="inputSuccess">Nom R??le</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  <div class="form-group">
                      <label class="col-form-label" for="inputSuccess">Description</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
              </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Checkbox checked</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" disabled>
                          <label class="form-check-label">Checkbox disabled</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" checked>
                          <label class="form-check-label">Checkbox checked</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" disabled>
                          <label class="form-check-label">Checkbox disabled</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- radio -->
                      <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Checkbox</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Checkbox checked</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" disabled>
                            <label class="form-check-label">Checkbox disabled</label>
                          </div>
                        </div>
                    </div>
                  </div>

                  <div class="row">

                  </div>

                  <div class="row">

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

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>

          <!-- /.modal -->
      </section>

</div>
</div>
@endsection
