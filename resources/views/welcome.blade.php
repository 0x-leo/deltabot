<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Deltabots - (The Cauldron)</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/simplebar/simplebar.min.js"></script>
    <script src="assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../release/v4.0.0/css/line.css">
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar bg-white navbar-expand-lg sticky-top">
        <div class="container-small px-0 px-sm-3"><a class="navbar-brand flex-1 flex-lg-grow-0" href="{{ url('/') }}">
            <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="phoenix" width="33">
              <p class="logo-text ms-2">deltabots</p>
            </div>
          </a>
          <div class="d-lg-none">
            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
          </div><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="border-bottom border-bottom-lg-0 mb-2">
              <div class="search-box d-inline d-lg-none">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search rounded-pill my-4" type="search" placeholder="Search" aria-label="Search">
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item border-bottom border-bottom-lg-0"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3 active" aria-current="page" href="{{ url('/console/pricing') }}">Pricing</a></li>
            </ul>

            @if (Route::has('login'))
            <div class="d-grid d-lg-flex align-items-center">
                    @auth
                    <div>
                        <a class="btn btn-link me-1 mb-1" type="button" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form>
                    </div>
                        <a href="{{ url('/console') }}" class="btn btn-phoenix-primary order-0">Go to console</a>
                    @else
                        <li class="nav-item d-flex align-items-center d-none d-lg-block">
                            <div class="theme-control-toggle fa-icon-wait px-2">
                                <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark">
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                                    <span class="icon" data-feather="moon"></span>
                                </label>
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                                    <span class="icon" data-feather="sun"></span>
                                </label>
                            </div>
                        </li>

                        <a class="btn btn-link text-900 order-1 order-lg-0"  href="{{ route('login') }}">Sign in</a>
                        @if (Route::has('register'))
                        <a class="btn btn-phoenix-primary order-0" href="{{ route('register') }}">Sign Up</a>
                        @endif
                    @endauth
            </div>
            @endif


          </div>
        </div>
      </nav>
      <section class="bg-white pb-8" id="home">
        <div class="container-small hero-header-container">
          <div class="row align-items-center">
            <div class="col-12 col-lg-auto order-0 order-md-1 text-end order-1">
              <div class="position-relative p-5 p-md-7 d-lg-none">
                <div class="bg-holder" style="background-image:url(assets/img/bg/bg-23.png);background-size:contain;"></div>
                <!--/.bg-holder-->
                <div class="position-relative"><img class="w-100 shadow-lg d-dark-none rounded-2" src="assets/img/bg/bg-31.png" alt="hero-header"><img class="w-100 shadow-lg d-light-none rounded-2" src="assets/img/bg/bg-30.png" alt="hero-header"></div>
              </div>
              <div class="hero-image-container position-absolute top-0 bottom-0 end-0 d-none d-lg-block">
                <div class="position-relative h-100 w-100">
                  <div class="position-absolute h-100 top-0 d-flex align-items-center end-0" style="left:-23%;"><img class="pt-7 pt-md-0 w-100" src="assets/img/bg/bg-1-2.png" alt="hero-header"></div>
                  <div class="position-absolute h-100 top-0 d-flex align-items-center end-0"><img class="pt-7 pt-md-0 w-100 shadow-lg d-dark-none rounded-2" src="assets/img/bg/bg.png" alt="hero-header"><img class="pt-7 pt-md-0 w-100 shadow-lg d-light-none rounded-2" src="assets/img/bg/bg.png" alt="hero-header"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 text-lg-start text-center pt-8 pb-6 order-0">
              <h1 class="fs-5 fs-lg-6 fs-md-7 fs-lg-6 fs-xl-7 fs fw-black mb-4"><span class="text-primary me-3">MEV</span>bots<br>for the smart trader</h1>
              <p class="mb-5">Gain an edge in DeFi trading by employing Maximal Extractable Value (MEV) strategies.
                Stay ahead of the competition, trade smarter and earn more.
              </p>
              
              @if (Route::has('login'))
              @auth
              <a class="btn btn-lg btn-primary rounded-pill me-3" href="#!" role="button">Deploy a bot</a>

              @else
              @if (Route::has('register'))
              <a class="btn btn-lg btn-primary rounded-pill me-3" href="#!" role="button">Sign up</a><a class="btn btn-link me-2 fs-0 p-0 text-decoration-none" href="#!" role="button">Check Demo<span class="fa-solid fa-angle-right ms-2 fs--1"></span></a>
              @endif
              @endauth
              @endif
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5 pt-xl-13 bg-white">
        <div class="container-small">
          <div class="row g-0">
            <div class="col-6 col-md-3">
              <div class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end"><img class="w-100" src="assets/img/brand2/aave.png" alt=""></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-md"><img class="w-100" src="assets/img/brand2/uni.png" alt=""></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end border-end-md"><img class="w-100" src="assets/img/brand2/comp.png" alt=""></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-lg-0"><img class="w-100" src="assets/img/brand2/inch.png" alt=""></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end border-bottom border-bottom-md-0"><img class="w-100" src="assets/img/brand2/pancake.png" alt=""></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-md border-bottom border-bottom-md-0"><img class="w-100" src="assets/img/brand2/crv.png" alt=""></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end"><img class="w-100" src="assets/img/brand2/venus.png" alt=""></div>
            </div>
            <div class="col-6 col-md-3">
              <div class="p-2 p-sm-5 p-md-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-lg-0"><img class="w-100" src="assets/img/brand2/sushi.png" alt=""></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-15 pb-0" id="feature">
        <div class="container-small">
          <div class="position-relative z-index-2">
            <div class="row">
              <div class="col-lg-6 text-center text-lg-start pe-xxl-3">
                <h4 class="text-primary fw-bolder mb-4">Features</h4>
                <h2 class="mb-3 text-black lh-base">A fully integrated suite<br>of value-extracting programs</h2>
                <p class="mb-5">MEV in the DeFi space is made possible by the incentives behind transaction ordering within blocks. Deltabots Foundation provides you with battle-tested bots, so that you can execute complex MEV stratigies for big profits</p><a class="btn btn-lg btn-outline-primary rounded-pill me-2" href="#!" role="button">Find out more<i class="fa-solid fa-angle-right ms-2"></i></a>
              </div>
              <div class="col-sm-6 col-lg-3 mt-7 text-center text-lg-start">
                <div class="h-100 d-flex flex-column justify-content-between">
                  <div class="border-start-lg border-dashed ps-4"><img class="mb-4" src="assets/img/icons/illustrations/bolt.png" width="48" height="48" alt="">
                    <div>
                      <h5 class="fw-bolder mb-2">Lightning Speed</h5>
                      <p class="fw-semi-bold lh-sm">On ethereum it takes 12 seconds to complete a transfer. During that timeframe, our bots can see every pending, unconfirmed transaction–essentially peering into the future and allowing them to front-run trades in milliseconds</p>
                    </div>
                    <div><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check Demo<span class="fa-solid fa-angle-right ms-2"></span></a></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3 mt-7 text-center text-lg-start">
                <div class="h-100 d-flex flex-column">
                  <div class="border-start-lg border-dashed ps-4"><img class="mb-4" src="assets/img/icons/illustrations/pie.png" width="48" height="48" alt="">
                    <div>
                      <h5 class="fw-bolder mb-2">Multi-purpose</h5>
                      <p class="fw-semi-bold lh-sm">The bot executes more than one MEV strategy in a series of transactions</p>
                    </div>
                    <div><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check Demo<i class="fa-solid fa-angle-right ms-2"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-12 align-items-center justify-content-between text-center text-lg-start">
              <div class="col-lg-5"><img class="img-fluid mb-9 mb-lg-0 d-dark-none" src="assets/img/spot-illustrations/22_2.png" alt=""><img class="img-fluid mb-9 mb-lg-0 d-light-none" src="assets/img/spot-illustrations/dark_22.png" alt=""></div>
              <div class="col-lg-6">
                <h6 class="text-primary mb-2 ls-2">SIGNAL</h6>
                <h3 class="fw-bolder mb-3">Recieve the signals instantly</h3>
                <p class="mb-5 px-md-7 px-lg-0">Deltabots makes it possible for you to quickly and effectively receive every signal. No need for block-time delays.</p><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check Demo<i class="fa-solid fa-angle-right ms-2"></i></a>
              </div>
            </div>
            <div class="row mt-2 align-items-center justify-content-between text-center text-lg-start">
              <div class="col-lg-5 order-0 order-lg-1"><img class="img-fluid mb-9 mb-lg-0 d-dark-none" src="assets/img/spot-illustrations/23_2.png" height="394" alt=""><img class="img-fluid mb-9 mb-lg-0 d-light-none" src="assets/img/spot-illustrations/dark_23.png" height="394" alt=""></div>
              <div class="col-lg-6">
                <h6 class="text-primary mb-2 ls-2">ROI</h6>
                <h3 class="fw-bolder mb-3">See Your ROI Grow</h3>
                <p class="mb-5 px-md-7 px-lg-0">Grow with deltabots. We help you with everything you might need, to setup your MEV bot, watch your profits grow</p><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check Demo<i class="fa-solid fa-angle-right ms-2"></i></a>
              </div>
            </div>
            <div class="row mt-2 align-items-center justify-content-between text-center text-lg-start">
              <div class="col-lg-5"><img class="img-fluid mb-9 mb-lg-0 d-dark-none" src="assets/img/spot-illustrations/24_2.png" height="394" alt=""><img class="img-fluid mb-9 mb-lg-0 d-light-none" src="assets/img/spot-illustrations/dark_24.png" height="394" alt=""></div>
              <div class="col-lg-6 text-center text-lg-start">
                <h6 class="text-primary mb-2 ls-2">REPORTS</h6>
                <h3 class="fw-bolder mb-3">Get Reports Ready</h3>
                <p class="mb-5 px-md-7 px-lg-0">With Deltabots Hybrid, you can get ready reports on your growth analysis anytime. This dashboard also has all filters accessible according to your needs.</p><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check Demo<i class="fa-solid fa-angle-right ms-2"></i></a>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <div class="position-relative">
        <div class="bg-holder z-index-2 d-none d-md-block" style="background-image:url(assets/img/bg/13.png);background-size:auto;background-position:right;"></div>
        <!--/.bg-holder-->
        <div class="bg-holder z-index-2 d-none d-md-block d-lg-none d-xl-block" style="background-image:url(assets/img/bg/bg-12.png);background-size:auto;background-position:left;"></div>
        <!--/.bg-holder-->
        <div class="bottom-0 start-0 end-0 bg-white"><svg class="w-100 text-soft" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
          </svg></div>
      </div>
      <div class="position-relative">
        <div class="bg-holder world-map-bg" style="background-image:url(assets/img/bg/bg-13.png);"></div>
        <!--/.bg-holder-->
        <div class="bg-holder z-index-2 opacity-25" style="background-image:url(assets/img/bg/bg-right-21.png);background-size:auto;background-position:right;"></div>
        <!--/.bg-holder-->
        <div class="bg-holder z-index-2 mt-9 opacity-25" style="background-image:url(assets/img/bg/bg-left-21.png);background-size:auto;background-position:left;"></div>
        <!--/.bg-holder-->
        <svg class="w-100 text-white position-relative" preserveaspectratio="none" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
        </svg>
        <section class="overflow-hidden z-index-2">
          <div class="container-small light">
            <div class="position-relative">
              <div class="row mb-6">
                <div class="col-xl-6 text-center text-md-start">
                  <h2 class="text-white mb-2">Being used by thousands of traders</h2>
                  <h1 class="fs-md-5 fs-xl-6 fw-black text-gradient-info text-uppercase mb-4 mb-md-0">WORLDWIDE</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-8 text-center text-md-start mb-6 mb-xl-0">
                  <div class="d-md-flex justify-content-md-between">
                    <div class="mb-6 mb-md-0 me-4">
                      <h1 class="display-1 text-white fw-bolder" data-countup='{"endValue":125,"duration":10,"prefix":"$","suffix":"k"}'>0 <span>k</span></h1>
                      <p class="text-white">Every month, there is more<br class="d-md-none d-lg-block">than $125k in MEV profits.</p>
                    </div>
                    <div class="mb-6 mb-md-0 me-4">
                      <h1 class="display-1 text-white fw-bolder" data-countup='{"endValue":23,"duration":10,"suffix":"k"}'>0</h1>
                      <p class="text-white">We have 23k+ active<br class="d-md-none d-lg-block">traders</p>
                    </div>
                    <div class="mb-6 mb-md-0 me-4">
                      <h1 class="display-1 text-white fw-bolder" data-countup='{"endValue":8,"duration":0.5}'>0</h1>
                      <p class="text-white">We support 8 bluechip EVM chains<br class="d-md-none d-lg-block">with great success potential. </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 text-center text-md-start"><img class="img-fluid" src="assets/img/generic/capterra.png" alt=""></div>
              </div>
            </div>
          </div>
        </section><svg class="text-white w-100 position-relative" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 368L1920 0.730011L1920 368L0 368Z" fill="currentColor"></path>
        </svg>
      </div>

      <section id="team">
        <div class="bg-holder z-index-2" style="background-image:url(assets/img/bg/bg-left-17.png);background-size:auto;background-position:left center;"></div> 
        <!--/.bg-holder-->
        <div class="bg-holder z-index-2" style="background-image:url(assets/img/bg/bg-right-17.png);background-size:auto;background-position:right center;"></div>
        <!--/.bg-holder-->
        <div class="position-absolute top-0 end-0 start-0"><svg class="w-100 text-white" preserveaspectratio="none" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
          </svg></div>
        <div class="position-absolute bottom-0 end-0 start-0"><svg class="text-white w-100" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 368L1920 0.730011L1920 368L0 368Z" fill="currentColor"></path>
          </svg></div>
        <div class="container-small position-relative py-1" style="z-index:10">
          <div class="row">
            <div class="col-12 mb-4 text-center text-sm-start">
              <h4 class="text-primary fw-bolder mb-3">Team</h4>
              <h2>Our small team behind our success</h2>
            </div>
            <div class="col-md-6 text-center text-sm-start">
              <p>We have a small but strong development team to follow up on the development process. Reach out to us for further information.</p>
            </div>
            <div class="col-md-6 text-center text-sm-start">
              <p>The team is ready to answer all your questions within minutes. The efficient team is always at your beck and call.</p>
            </div>
          </div>
          <div class="row align-items-center ps-lg-11 pe-lg-9">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="text-center mt-5 position-relative">
                <div class="team-avatar-container d-inline-block position-relative">
                  <div class="bg-holder" style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;"></div>
                  <!--/.bg-holder-->
                  <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/62.png" alt="...">
                </div>
                <h4>John Smith</h4>
                <h6 class="mb-3 fw-semi-bold">CEO, Global Cheat</h6><span class="fa-brands fa-facebook text-primary me-3"></span><span class="fa-brands fa-twitter text-primary me-3"></span><span class="fa-brands fa-linkedin-in text-primary"></span>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="text-center mt-5 position-relative">
                <div class="team-avatar-container d-inline-block position-relative">
                  <div class="bg-holder" style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;"></div>
                  <!--/.bg-holder-->
                  <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/63.png" alt="...">
                </div>
                <h4>Marc Chiasson</h4>
                <h6 class="mb-3 fw-semi-bold">Vice President</h6><span class="fa-brands fa-facebook text-primary me-3"></span><span class="fa-brands fa-twitter text-primary me-3"></span><span class="fa-brands fa-linkedin-in text-primary"></span>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="text-center mt-5 position-relative">
                <div class="team-avatar-container d-inline-block position-relative">
                  <div class="bg-holder" style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;"></div>
                  <!--/.bg-holder-->
                  <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/64.png" alt="...">
                </div>
                <h4>Lilah Lola</h4>
                <h6 class="mb-3 fw-semi-bold">Marketing Manager</h6><span class="fa-brands fa-facebook text-primary me-3"></span><span class="fa-brands fa-twitter text-primary me-3"></span><span class="fa-brands fa-linkedin-in text-primary"></span>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="text-center mt-5 position-relative">
                <div class="team-avatar-container d-inline-block position-relative">
                  <div class="bg-holder" style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;"></div>
                  <!--/.bg-holder-->
                  <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/65.png" alt="...">
                </div>
                <h4>Thomas Doe</h4>
                <h6 class="mb-3 fw-semi-bold">UX Designer</h6><span class="fa-brands fa-facebook text-primary me-3"></span><span class="fa-brands fa-twitter text-primary me-3"></span><span class="fa-brands fa-linkedin-in text-primary"></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="position-relative">

          <!-- ============================================-->
          <!-- <section> begin ============================-->
          <section style="padding-top:250px;">
            <div class="container-small">
              <div class="row position-relative">
                <div class="col-12 col-sm-12 col-lg-5 mb-4 order-0 order-sm-0"><a href="#"><img class="mb-3" src="assets/img/icons/logo-white.png" height="48" alt=""></a>
                  <h3 class="text-white light">Deltabots</h3>
                </div>
                <div class="col-lg-7">
                  <div class="row justify-content-between">
                    <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
                      <div class="border-dashed border-start border-primary-300 ps-3" style="--phoenix-border-opacity: .2;">
                        <h5 class="fw-bolder mb-2 text-light light">Help</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="mb-1"><a class="text-500 hover-text-100 light text-decoration-none" href="#!">Contact</a></li>
                        </ul>
                      </div>
                      <div class="border-dashed border-start border-primary-300 ps-3" style="--phoenix-border-opacity: .2;">
                        <h5 class="lh-lg fw-bolder mb-2 text-light light">Community</h5>
                        <ul class="list-unstyled mb-2">
                          <li class="mb-1"><a class="text-500 hover-text-100 light text-decoration-none" href="https://twitter.com/deltabots">Twitter</a></li>
                          <li class="mb-1"><a class="text-500 hover-text-100 light text-decoration-none" href="https://t.me/mev_bots">Telegram</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- end of .container-->
          </section><!-- <section> close ============================-->
          <!-- ============================================-->

        </div>
      </div>
    </main><!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="../../v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="assets/js/phoenix.js"></script>
    <script src="vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendors/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="vendors/bigpicture/BigPicture.js"></script>
    <script src="vendors/countup/countUp.umd.js"></script>
    <script src="../../maps/api/js-1?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap" async=""></script>
    <script src="../../v3/smtp.js"></script>
  </body>

</html>