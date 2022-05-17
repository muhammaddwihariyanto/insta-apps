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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}

    <style>
        #file-upload {
            /* display: none; */
        }
        .custom-file-upload {
            /* border: 1px solid #ccc; */
            background-color: #e2e2e2;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin/beranda/header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin/beranda/sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
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
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Posting your Status &emsp; <small>(Text and
                                            Image)</small></h3>
                                </div>


                                <form id="quickForm" method="POST" action="{{ route('poststatus') }}" enctype="multipart/form-data">
                                    {!! Form::open(['files' => true]) !!}
                                    <div class="card-body">
                                        <div class="form-floating">
                                            <label for="floatingTextarea">Write Your Status</label>

                                            <textarea class="form-control" name="status_text" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        </div>
                                    </div>

                                    <div class="card-footer clearfix">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="file-upload" class="custom-file-upload"><i
                                                        class="fas fa-image"></i> </label>
                                                        <input id="file-upload" name="status_image_upload" type="file">
                                            </div>

                                            <div class="col-md-6">

                                                <button type="submit" class="btn btn-warning float-right btn-sm"> <i
                                                        class="fa fa-plus">Add Status</i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {!! Form::close() !!}

                            </div>
                            @foreach ($top_15_posts as $status)
                                @include('layouts/app-internal/user-status-layout', [
                                    'status' => $status,
                                    'user' => \App\Eloquent\User::find($status->user_id),
                                    'comments' => \App\Eloquent\statusComments::where('status_id', $status->id)->get(),
                                    'comment_count' => \App\Eloquent\statusComments::where('status_id', $status->id)->count(),
                                    'like_count' => \App\Eloquent\statusLikes::where('status_id', $status->id)->count(),
                                ])
                            @endforeach

                        </div>


                        <div class="col-md-6">
                        </div>

                    </div>




                </div><!-- /.container-fluid -->




            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- /.content-wrapper -->

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
        @include('admin/beranda/footer')
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
