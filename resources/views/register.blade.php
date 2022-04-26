<!DOCTYPE html>
    @include('layouts.header')
        <body class="login-page">
            <div class="register-box">
              <div class="card card-outline card-primary">
                <div class="card-header text-center">
                  <a href="{{ route('register.index') }}" class="h1"><b>GESCO</b></a>
                </div>
                <div class="card-body">
                  <p class="login-box-msg">Merci de créer votre compte</p>

                  <form action="{{ route('register.users') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Nom complet" id="name"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="email" class="form-control" placeholder="Adresse électronique" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" placeholder="mot de passe" id="password" name="password" required autocomplete="new-password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" placeholder="Confirmer mot de passe" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
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
                    <div class="row">
                      <div class="col-8">
                        <div class="icheck-primary">
                          <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                          <label for="agreeTerms">
                          j'accepte les <a href="#">termes</a>
                          </label>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Valider</button>
                      </div>
                      <!-- /.col -->
                    </div>
                  </form>
                  <a href="{{ route('home') }}" class="text-center">J'ai déja un compte</a>
                </div>
                <!-- /.form-box -->
              </div><!-- /.card -->
            </div>
        </body>
    @include('layouts.footScript')
</html>
