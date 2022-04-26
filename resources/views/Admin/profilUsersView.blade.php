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
              <h1>Rôles</h1>
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
                        <th style="width: 50px">Nom roles</th>
                        <th style="width: 50px">Description</th>
                        <th style="width: 70px">Status</th>
                        <th style="width: 10px">Options</th>
                      </tr>
                    </thead>
                    <tbody>
            @if(!empty($roles) && $roles->count())
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
                                <a href="{{ route('Admin.profilsUsersView', $role->id ) }}" class="btn btn-primary" data-toggle="modal" data-target="#modal-default1"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                        @endforeach
                      @else
                        <tr>
                            <td colspan="10">There are no data.</td>
                        </tr>
                    @endif
                    </tbody>
                  </table>
                  {!! $roles->links() !!}
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
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
               <!-- general form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Ajouter un rôle</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form>
                    <div class="row"
                    <!-- input states -->
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">Nom Rôle</label>
                        <input type="text" class="form-control">
                      </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">Description</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group multi_select_option">
                        <select name="" id="" class="form-control multi_select">
                            <option>Choisir les permissions</option>
                             @foreach ($permission as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
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
              </div>
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
<script src="">
    $(document).ready(function()
    {
        $('.multi_select').selectpicker();
    })
</script>
