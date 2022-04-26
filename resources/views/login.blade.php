<!DOCTYPE html>
        @include('layouts.header')
            <body class="hold-transition sidebar-mini layout-fixed login-page">
                <div class="login-box">
                    <!-- /.login-logo -->
                    <div class="card card-outline card-primary">
                      <div class="card-header text-center">
                        <a href="/" class="h1"><b>GESCO</b></a>
                      </div>
                      <div class="card-body">
                        <p class="login-box-msg">Démarrer une nouvelle session</p>
                        <form action="{{ route('login.users') }}" method="POST">
                          @csrf
                          <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                              </div>
                            </div>
                          </div>
                          <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password"  id="password" name="password" required autocomplete="new-password">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                          <div class="col-7">
                              <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                  Rester connecté
                                </label>
                              </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-5">
                              <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                            </div>
                            <!-- /.col -->
                          </div>
                        </form>
                        <p class="mb-1">
                          <a href="forgot-password.html">Mot de passe oublié?</a>
                        </p>
                        <p class="mb-0">
                          <a href="{{ route('register.index') }}" class="text-center">Créer un compte</a>
                        </p>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.login-box -->

            </body>
        @include('layouts.footScript')
</html>
