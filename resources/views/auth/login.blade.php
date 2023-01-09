<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Deltabots - Signin</title>


    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../../../../css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../release/v4.0.0/css/line.css">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
  </head>

  <body>

    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">
        <div class="container">
          <div class="row flex-center min-vh-100 py-5">
            <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index-1.html">
                <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"></div>
              </a>
              <div class="text-center mb-7">
                <h3 class="text-1000">Sign In</h3>
                <p class="text-700">Get access to your account</p>
              </div>
              <a class="btn btn-phoenix-secondary w-100 mb-3" href="{{ url('auth/twitter') }}"><span class="fab fa-twitter text-danger me-2 fs--1"></span>Continue with twitter</a>
              <div class="position-relative">
                <hr class="bg-200 mt-5 mb-4">
                <div class="divider-content-center">or use email</div>
              </div>

              <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                <div class="form-icon-container"><input class="form-control @error('email') is-invalid @enderror form-icon-input" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autocomplete="email" autofocus><span class="fas fa-user text-900 fs--1 form-icon"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              </div>
              <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                <div class="form-icon-container"><input class="form-control @error('password') is-invalid @enderror form-icon-input" type="password" placeholder="Password" name="password" required autocomplete="current-password"><span class="fas fa-key text-900 fs--1 form-icon"></span>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
              </div>
              <div class="row flex-between-center mb-7">
                <div class="col-auto">
                  <div class="form-check mb-0"><input class="form-check-input"type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                </div>
                </div>
                <div class="col-auto">
                                @if (Route::has('password.request'))
                                    <a class="fs--1 fw-semi-bold" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                </div>
              </div><button class="btn btn-primary w-100 mb-3">Sign In</button>
              <div class="text-center"><a class="fs--1 fw-bold" href="{{ route('register') }}">Create an account</a></div>
            </form>  
            </div>
          </div>
        </div>
      </div>
      <script>
        var navbarTopShape = localStorage.getItem('phoenixNavbarTopShape');
        var navbarPosition = localStorage.getItem('phoenixNavbarPosition');
        var body = document.querySelector('body');
        var navbarDefault = document.querySelector('#navbarDefault');
        var navbarTopNew = document.querySelector('#navbarTopNew');
        var navbarSlim = document.querySelector('#navbarSlim');
        var navbarTopSlimNew = document.querySelector('#navbarTopSlimNew');

        var documentElement = document.documentElement;
        var navbarVertical = document.querySelector('.navbar-vertical');

        if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
          navbarDefault.remove();
          navbarTopNew.remove();
          navbarTopSlimNew.remove();
          navbarSlim.style.display = 'block';
          navbarVertical.style.display = 'inline-block';
          body.classList.add('nav-slim');
        } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
          navbarDefault.remove();
          navbarVertical.remove();
          navbarTopNew.remove();
          navbarSlim.remove();
          navbarTopSlimNew.removeAttribute('style');
          body.classList.add('nav-slim');
        } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
          navbarDefault.remove();
          navbarSlim.remove();
          navbarVertical.remove();
          navbarTopSlimNew.remove();
          navbarTopNew.removeAttribute('style');
          documentElement.classList.add('navbar-horizontal')

        } else {
          body.classList.remove('nav-slim');
          navbarSlim.remove();
          navbarTopNew.remove();
          navbarTopSlimNew.remove();
          navbarDefault.removeAttribute('style');
          navbarVertical.removeAttribute('style');
        }

        var navbarTopStyle = localStorage.getItem('phoenixNavbarTopStyle');
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
          navbarTop.classList.add('navbar-darker');
        }

        var navbarVerticalStyle = localStorage.getItem('phoenixNavbarVerticalStyle');
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVerticalStyle === 'darker') {
          navbarVertical.classList.add('navbar-darker');
        }
      </script>
    </main>

    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
  </body>

</html>