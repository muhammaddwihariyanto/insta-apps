<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-orange elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route("admindasbor") }}" class="brand-link">
    <img src="{{ asset('lte/dist/img/images.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"> {{Auth::user()->name}}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/assets/images/icons/logo.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{route('admindasbor')}}" class="d-block">Dashboard</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Akun
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" >
                  <li class="nav-item">
                    <a href="{{ route("adminprofil") }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Profil</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              
        <li class="nav-item">
          <a href="{{ url('/logout') }}" class="nav-link">
          
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Keluar
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>