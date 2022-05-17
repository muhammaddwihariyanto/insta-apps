<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="icon" type="image/png" href="{{ asset ('/assets/images/icons/favicon.png') }}"> --}}
    <link rel="icon" type="image/png" href="{{ asset ('/assets/images/icons/favicon.png') }}">

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css"> 
    <link rel="icon" type="image/png" href="{{ asset ('/assets/images/insta.png') }}">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">   

</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
          <div class="card login-card">
            <div class="row no-gutters">
              <div class="col-md-5">
                <img src="/assets/images/icons/logo.png" alt="login" class="login-card-img">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="brand-wrapper">
                    <h2 class="logo">Selamat Datang,</h2>
                    <!-- <img src="assets/images/logo.svg" alt="logo" class="logo"> -->
                  </div>
                  <p class="login-card-description">Silahkan Login terlebih dahulu,</p>
                  <form action="/pos" method="post">
                    {{ csrf_field() }}
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if(\Session::has('alert-success'))
                            <div class="alert alert-success">
                                <div>{{Session::get('alert-success')}}</div>
                            </div>
                    @endif    
                      <div class="form-group">
                        <label for="nippos" class="input-group">ID User</label>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan UserID">
                      </div>
                      <div class="form-group mb-4">
                        <label for="pasword" class="input-group">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                      </div>
                      {{-- <a href="index" class="btn btn-block login-btn mb-4">Login</a> --}}
                      <button  type="submit" id="login" class="btn btn-block login-btn mb-4">Login</button>
                    </form>
                    <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
                    <p class="login-card-footer-text">Belum memiliki akun? <a href="{{ route("daftarakun") }}" class="text-reset">Registrasi disini!</a></p>
                    <nav class="login-card-footer-nav">
                      <a href="#!">Copyright Sisfo ITTelkom Surabaya</a>
                      <!-- <a href="#!"></a> -->
                    </nav>
                </div>
              </div>
            </div>
          </div>
    
                <!-- <div class="form-prompt-wrapper">
                  <div class="custom-control custom-checkbox login-card-check-box">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                  </div>              
                  <a href="#!" class="text-reset">Forgot password?</a>
                </div>
                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
              </form>
              <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
            </div>
          </div> --> 
        </div>
      </main>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <script src="vendor/jquery/jquery-3.2.1.min.js" type="ed9f4c598878380139853296-text/javascript"></script>

    <script src="vendor/animsition/js/animsition.min.js" type="ed9f4c598878380139853296-text/javascript"></script>

    <script src="vendor/bootstrap/js/popper.js" type="ed9f4c598878380139853296-text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="ed9f4c598878380139853296-text/javascript"></script>

    <script src="vendor/select2/select2.min.js" type="ed9f4c598878380139853296-text/javascript"></script>

    <script src="vendor/daterangepicker/moment.min.js" type="ed9f4c598878380139853296-text/javascript"></script>
    <script src="vendor/daterangepicker/daterangepicker.js" type="ed9f4c598878380139853296-text/javascript"></script>

    <script src="vendor/countdowntime/countdowntime.js" type="ed9f4c598878380139853296-text/javascript"></script>

    <script src="js/main.js" type="ed9f4c598878380139853296-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="ed9f4c598878380139853296-text/javascript"></script>
    <script type="ed9f4c598878380139853296-text/javascript">
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="ed9f4c598878380139853296-|49" defer=""></script>
</body>

</html>