<!DOCTYPE html>
<html lang="en">
 
<head>
    <title>Registrasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <link rel="icon" type="image/png" href="{{ asset ('/assets/images/icons/favicon.png') }}"> --}}
    <link rel="icon" type="image/png" href="{{ asset('/assets/images/icons/favicon.png') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/animate/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/animsition/css/animsition.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/select2/select2.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url('/assets/images/bg-01.jpg');">
                    <span class="login100-form-title-1">
                       Insta Apps ITTelkom Surabaya
                    </span>
                </div>
                <!-- menampilkan error validasi -->
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="login100-form validate-form" action="{{ route("registrasi") }}" method="post">
                    {{ csrf_field() }}
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <div class="wrap-input100 validate-input m-b-26" data-validate="phone number is required">
                        <span class="label-input100">User ID</span>
                        <input class="input100" type="text" name="id"
                            placeholder="Enter Nippos Number : 0852303603xx">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Name is required">
                        <span class="label-input100">Nama Lengkap</span>
                        <input class="input100" type="text" name="name" placeholder="Enter name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Name is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Enter Email">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Name is required">
                        <span class="label-input100">Nomer HP</span>
                        <input class="input100" type="text" name="no_hp" placeholder="Enter No Hp" required>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Konfirmasi Password</span>
                        <input class="input100" type="password" name="confirmation" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                    

                    
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn container-fluid "
                            style="border-radius:9px; background-color:rgb(72, 95, 228)" type="submit">
                            Daftar
                        </button>
                    </div>

                    <br>
                    <br>

                    <div class="flex-sb-m w-full p-b-30">
                        <div>
                            <a href="#" class="txt1">

                            </a>
                        </div>
                        <div>
                            <a href="/pos" class="txt1">
                                Sudah Punya Akun
                            </a>
                        </div>
                    </div>

                </form>
            </div>
            
        </div>
        
    </div>


    <script src="{{ asset('/vendor/jquery/jquery-3.2.1.min.js') }}" type="ed9f4c598878380139853296-text/javascript">
    </script>

    <script src="{{ asset('/vendor/animsition/js/animsition.min.js') }}" type="ed9f4c598878380139853296-text/javascript">
    </script>

    <script src="{{ asset('/vendor/bootstrap/js/popper.js') }}" type="ed9f4c598878380139853296-text/javascript"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}" type="ed9f4c598878380139853296-text/javascript">
    </script>

    <script src="{{ asset('/vendor/select2/select2.min.js') }}" type="ed9f4c598878380139853296-text/javascript"></script>

    <script src="{{ asset('/vendor/daterangepicker/moment.min.js') }}" type="ed9f4c598878380139853296-text/javascript">
    </script>
    <script src="{{ asset('/vendor/daterangepicker/daterangepicker.js') }}"
        type="ed9f4c598878380139853296-text/javascript"></script>

    <script src="{{ asset('/vendor/countdowntime/countdowntime.js') }}" type="ed9f4c598878380139853296-text/javascript">
    </script>

    <script src="{{ asset('/js/main.js') }}" type="ed9f4c598878380139853296-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="ed9f4c598878380139853296-text/javascript"></script>
    <script type="ed9f4c598878380139853296-text/javascript">
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="ed9f4c598878380139853296-|49" defer=""></script>
       
</body>

</html>
