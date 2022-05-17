<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Eltro Apps</title>
  <link rel="icon" type="image/png" href="{{ asset('/assets/images/icons/favicon.png') }}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/detailsiswa.css')}}">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <!-- Navbar -->
    @include('admin/beranda/header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin/beranda/sidebar')

     
        <!-- Content Header (Page header) -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Profil {{ Auth::user()->name }} </h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{route('admindasbor')}}">Home</a></li>
                      <li class="breadcrumb-item active">Data Profil {{ Auth::user()->name }} </li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
  <section class="content">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div>
              @if (!empty(Session::get('success')))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ Session::get('success') }}</strong>
              </div>
          @endif
          @if (!empty(Session::get('error')))
              <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ Session::get('error') }}</strong>
              </div>
          @endif
        </div>
      <div class="row">
        
        <br>
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="card card-orange card-outline">
            <div class="card-body box-profile">
            @foreach($data_admin as $p)
              <div class="text-center">
                <div class="profile-img">
                    <img src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-student-glyph-black-icon-png-image_691145.jpg" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div>
                </div>
              </div>

              <h3 class="profile-username text-center"> {{$p->name}}</h3>

              <p class="text-muted text-center"> {{$p->email}}</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>User ID</b><a class="float-right"><b>{{ $p->id }}</b> </a>
                  </li>
           
               
                
               @endforeach
            </ul>
            </div>
            
            <!-- /.card-body -->
          </div>
        </div>
        
          <!-- /.card -->
        <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profil</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Profil</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="card-body">
                    @foreach($data_admin as $p)
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-10">
                          
                            <input type="text"  class="form-control" name="name"  value="{{ $p->name }}" readonly>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="text"  class="form-control" name="email" value="{{ $p->email }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">No Telp </label>
                            <div class="col-sm-10">
                              <input type="text"  class="form-control" name="no_hp"  value="{{ $p->no_hp }}" readonly>
                            </div>
                        </div>
                        
                        
                        
                    @endforeach    
                  
                    <!-- /.post -->
                
                  <!-- /.tab-pane -->
                  
                  </div>
                    <!-- /.tab-pane -->
                </div>
                  
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    @foreach($data_admin as $p)
                    <form class="form-horizontal" method="post" action="{{route('editprofiladmin')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="id"  class="form-control" value= "{{$p->id}}" readonly>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{ $p->name }}" placeholder="Name" name="name">
                            </div>
                          </div>
                        <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">No Hp Admin</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{ $p->no_hp }}" placeholder="no_hp" name="no_hp" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{ $p->email }}" placeholder="email" name="email" >
                        </div>
                      </div>
                      
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                      </div>
                    </form>
                    @endforeach
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
      
            <!-- /.card -->
      
          
    

            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                    <a href="{{route('admindasbor')}}" class="btn btn-secondary">Kembali</a>
                    <!-- <input type="submit" value="Save Changes" class="btn btn-success float-right"> -->
                    </div>
                </div>
              </div>
            </section>

</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<!-- REQUIRED SCRIPTS -->
<script>
$(document).ready( function () {
  $('#tSiswa').DataTable();
} );
</script>
</body>
</html>
