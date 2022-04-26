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
                  <h1>Compte #U00{{ $user->id }}A22</h1>
                </div>
                <div class="col-sm-6">
                @if(Auth::user()->id != $user->id)
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                        <i class="fas fa-refresh" aria-hidden="true"></i> Mettre à jour le profil
                      </button>
                  @endif
                 </div>
                <div class="col-sm-3">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                    <li class="breadcrumb-item active">#</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content-header">
            <div class="container-fluid">
              <div class="row col-md-12">
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user shadow">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header bg-info">
                        <h3 class="widget-user-username">{{ $user->name }}</h3>
                        <h5 class="widget-user-desc">{{ $user->email }}</h5>
                      </div>
                      <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="{{ asset('files/dist/img/user8-128x128.jpg') }}" alt="User Avatar">
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-5 border-right">
                            <div class="description-block">
                              <h5 class="description-header" style=" color:red;">Il y'a 12H</h5>
                              <span class="description-text">Connecté(e)</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                         
                          <!-- /.col -->
                          <div class="col-sm-7">
                            <div class="description-block">
                              <h5 class="description-header" style="color: goldenrod;">Superadministrateur</h5>
                              <span class="description-text">Type de compte</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                      </div>
                    </div>
                </div>

                        <div class="col-md-8">
                            <!-- Widget: user widget style 1 -->
                            <div class="card card-widget widget-user shadow">
                              <!-- Add the bg color to the header using any of the bg-* classes -->
                              <div class="widget-user-header bg-info">
                                <h3 class="widget-user-username">Alexander Pierce</h3>
                                <h5 class="widget-user-desc">Founder & CEO</h5>
                              </div>
                              <div class="widget-user-image">
                                <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                              </div>
                              <div class="card-footer">
                                <div class="row">
                                  <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                      <h5 class="description-header">3,200</h5>
                                      <span class="description-text">SALES</span>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                      <h5 class="description-header">13,000</h5>
                                      <span class="description-text">FOLLOWERS</span>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-4">
                                    <div class="description-block">
                                      <h5 class="description-header">35</h5>
                                      <span class="description-text">PRODUCTS</span>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                </div>
            {{-- <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Nom:</label>
                        <input type="text" value="{{$user->name}}" class="form-control">
                        <span class="nom_err error text-danger"></span>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group col-md-12">
                        <label>Adresse email:</label>
                        <input type="text" value="{{$user->email}}" class="form-control">
                        <span class="email_err error text-danger"></span>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group col-md-12">
                        <label>Rôles:</label>
                        <select class="form-control" id="roles">
                            <option value="">--Veuillez selectionner</option>
                            @foreach($roles as $item)
                                <option {{$user->hasRole($item->name)?"selected":""}} value="{{$item->id}}">{{$item->display_name}}</option>
                            @endforeach
                        </select>
                        <span class="role_err error text-danger"></span>
                        <!-- /.input group -->
                    </div>
                </div> <button type="button" class="btn btn-primary" data-dismiss="modal">Mettre à jour</button>
            </div> --}}
        </div>
    </div>
  </div>
</div>
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
              <input type="text" class="form-control" placeholder="Nom complet" value="{{ $user->name }}">
            </div>
          <div class="form-group">
              <label class="col-form-label" for="inputSuccess">Addresse électronique</label>
              <input type="text" class="form-control" placeholder="Email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="inputSuccess">Photo de profil</label>
                <input type="file" class="form-control" placeholder="Ajouter une photo de profil" value="{{ $user->email }}">
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
        </section>
    </div>
@endsection