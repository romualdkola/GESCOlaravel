<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('Admin.index') }}" class="brand-link" style=" text-align:center; font-size: 40px;">
      <span><b>GESCO<b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('files/dist/img/user8-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('Admin.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Paramétrage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fa-solid fa-circle-dollar-to-slot nav-icon"></i>
                  <p>Caisse</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="fa fa-university nav-icon"></i>
                  <p>Etablissements</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                          <i class="fa fa-address-book nav-icon"></i>
                          <p>Dévise & Adresse</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                          <i class="fa fa-calendar nav-icon"></i>
                          <p>Ajouter une année</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                          <i class="fa fa-rotate-right nav-icon"></i>
                          <p>Cycles</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                          <i class="fas fa-chart-line nav-icon" aria-hidden="true"></i>
                          <p>Niveaux</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                          <i class="far fa-building nav-icon"></i>
                          <p>Classes</p>
                        </a>
                      </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-flag nav-icon"></i>
                  <p>Pays</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="fas fa-question nav-icon"></i>
                  <p>Types de versement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="fa fa-university nav-icon"></i>
                  <p>Stucture de pris en charge</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="fa fa-book " aria-hidden="true"></i>
                  <p>Matière</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Enseigne.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enseignant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Découpage Académique</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type de note</p>
                </a>
              </li>
            </ul>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-sync fas fa-user"></i>
              <p>
               Enseignants
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('Enseigne.index') }}" class="nav-link">
                  <i class="fa-solid fa-share fas nav-icon"></i>
                  <p>Inscription</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="fa-solid fa-undo fas nav-icon"></i>
                  <p>Réinscription</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-sync fas fa-user"></i>
              <p>
               Elèves
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('Eleve.index') }}" class="nav-link">
                  <i class="fa-solid fa-share fas nav-icon"></i>
                  <p>Inscription</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="fa-solid fa-undo fas nav-icon"></i>
                  <p>Réinscription</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="fa-solid fa-sync fas nav-icon"></i>
                  <p>Transferts de classe</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               Administration
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('Admin.profilsUsers') }}" class="nav-link">
                  <i class="fa-solid fas fa-user nav-icon"></i>
                  <p>Rôles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Admin.permissionsUsers') }}" class="nav-link">
                  <i class="fa fa-star nav-icon"></i>
                  <p>Permissions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Admin.usersView') }}" class="nav-link">
                  <i class="fa-solid fas fa-users nav-icon"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
              Finances
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                <i class="fa fa-pencil"></i>
                  <p>Règlement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compte élèves</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compte caisse</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Matière
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Matière / Classe</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notes / Elèves</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notes individuelles</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
