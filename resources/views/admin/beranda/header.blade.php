<!-- Navbar -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="/template/dist/img/pens.png" alt="AdminLTELogo" height="60" width="60">
</div>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link">Hello {{Auth::user()->name}} | Waktu : {{ date('Y-m-d H:i:s') }}</a>
      </li>      
    </ul>   

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->