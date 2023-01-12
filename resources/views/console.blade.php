
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

   
    <title>Deltabots Management Console</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <script src="https://kit.fontawesome.com/205e9e2fb4.js" crossorigin="anonymous"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/simplebar/simplebar.min.js"></script>
    <script src="assets/js/config.js"></script>
    <link href="vendors/choices/choices.min.css" rel="stylesheet">
    <link href="vendors/dhtmlx-gantt/dhtmlxgantt.css" rel="stylesheet">
    <link href="vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="release/v4.0.0/css/line.css">
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
  </head>

  <body>

    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">
        <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
          <script>
            var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
           <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">

                <li class="nav-item">
                  <span class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#home" role="button" aria-expanded="true" aria-controls="home"><div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-search search-box-icon"></span></span><span class="nav-link-text">MEV Inspect</span>
                  </div></a>
                </li>

                <li class="nav-item">
                      <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#" role="button" data-bs-toggle="tooltip" data-bs-placement="right" title="You do not have acess to this page">
                          <div class="d-flex align-items-center">
                      <span class="nav-link-text">Arbitrage</span>
                    </div></a></span>
                </li>
                <li class="nav-item">
                    <span class="nav-item-wrapper">
                    <a class="nav-link dropdown-indicator label-1" href="#" role="button" data-bs-toggle="tooltip" data-bs-placement="right" title="You do not have acess to this page">
                    <div class="d-flex align-items-center">
                    <span class="nav-link-text">Liquidations</span>
                    </div></a></span>
               </li>
                  <li class="nav-item">
                      <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#" role="button" data-bs-toggle="tooltip" data-bs-placement="right" title="You do not have acess to this page">
                          <div class="d-flex align-items-center">
                        <span class="nav-link-text">Frontrun</span></div></a>
                      </span>
                  </li>

      <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
      </nav>
      <nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="{{ url('/') }}">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="phoenix" width="33">
                  <p class="logo-text ms-2 d-none d-sm-block">deltabots</p>
                </div>
              </div>
            </a>
          </div>
          <div class="search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm rounded-pill search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search">
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
              
              <div class="text-center">
                <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item dropdown">
            <span class="fs-1 fw-semi-bold text-900 ms-2">{{ Auth::user()->name }}</span>
            </li>
          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-top navbar-slim navbar-expand" id="navbarSlim" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand navbar-brand" href="index-1.html">deltabots <span class="text-1000">slim</span></a>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs--1 fw-bold">Light</span></label></div>
            </li>
          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-top navbar-expand-lg" id="navbarTopNew" style="display:none;">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-target="#navbarToplCollapse" aria-controls="navbarToplCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="index-1.html">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="phoenix" width="27">
                <p class="logo-text ms-2 d-none d-sm-block">deltabots</p>
              </div>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarToplCollapse">
          <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
              <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="dashboards">
                <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold" href="index-1.html">E commerce</a><a class="dropdown-item fw-semi-bold" href="project-management.html">Project management</a><a class="dropdown-item fw-semi-bold" href="landing.html">Landing</a><a class="dropdown-item fw-semi-bold" href="apps/social/feed.html">Social feed</a></div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="appss">Apps</a>
              <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="appss">
                <div class="dropdown-menu-content navbar-top-card p-3">
                  <div class="scrollbar max-h-dropdown">
                    <div class="row gx-0">
                      <div class="col-6">
                        <div class="nav flex-column">
                          <p class="nav-link mb-0 fw-bold">Admin</p><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/add-product.html">Add product</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/products.html">Products</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/customers.html">Customers</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/customer-details.html">Customer details</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/orders.html">Orders</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/order-details.html">Order details</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/refund.html">Refund</a>
                          <p class="nav-link mb-0 fw-bold">Landing</p><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/homepage.html">Homepage</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Product details</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/products-filter.html">Products filter</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/cart.html">Cart</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/checkout.html">Checkout</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/shipping-info.html">Shipping info</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/profile.html">Profile</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/favourite-stores.html">Favourite stores</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/wishlist.html">Wishlist</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/order-tracking.html">Order tracking</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/invoice.html">Invoice</a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="nav flex-column">
                          <p class="nav-link mb-0 fw-bold">Projects</p><a class="nav-link fw-semi-bold" href="apps/project-management/create-new.html">Create new</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-list-view.html">Project list view</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-card-view.html">Project card view</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-board-view.html">Project board view</a><a class="nav-link fw-semi-bold" href="apps/project-management/todo-list.html">Todo list</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-details.html">Project details</a>
                          <p class="nav-link mb-0 fw-bold">Email</p><a class="nav-link fw-semi-bold" href="apps/email/inbox.html">Inbox</a><a class="nav-link fw-semi-bold" href="apps/email/email-detail.html">Email detail</a><a class="nav-link fw-semi-bold" href="apps/email/compose.html">Compose</a>
                          <p class="nav-link mb-0 fw-bold">Events</p><a class="nav-link fw-semi-bold" href="apps/events/create-an-event.html">Create an event</a><a class="nav-link fw-semi-bold" href="apps/events/event-detail.html">Event detail</a>
                          <p class="nav-link mb-0 fw-bold">Social</p><a class="nav-link fw-semi-bold" href="apps/social/profile.html">Profile</a><a class="nav-link fw-semi-bold" href="apps/social/settings.html">Settings</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
              <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="pagess">
                <div class="dropdown-menu-content navbar-top-card p-3">
                  <div class="scrollbar max-h-dropdown">
                    <div class="row gx-0">
                      <div class="col-6">
                        <div class="nav flex-column"><a class="nav-link fw-semi-bold" href="pages/starter.html">Starter</a><a class="nav-link fw-semi-bold" href="pages/pages/faq.html">Faq</a>
                          <p class="nav-link mb-0 fw-bold">Pricing</p><a class="nav-link fw-semi-bold" href="pages/pages/pricing/pricing-column.html">Pricing column</a><a class="nav-link fw-semi-bold" href="pages/pages/pricing/pricing-grid.html">Pricing grid</a><a class="nav-link fw-semi-bold" href="pages/pages/notifications.html">Notifications</a><a class="nav-link fw-semi-bold" href="pages/pages/members.html">Members</a>
                          <p class="nav-link mb-0 fw-bold">Split</p><a class="nav-link fw-semi-bold" href="pages/authentication/split/sign-in.html">Sign in</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/sign-up.html">Sign up</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/sign-out.html">Sign out</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/reset-password.html">Reset password</a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="nav flex-column">
                          <p class="nav-link mb-0 fw-bold">Errors</p><a class="nav-link fw-semi-bold" href="pages/errors/404.html">404</a><a class="nav-link fw-semi-bold" href="pages/errors/500.html">500</a>
                          <p class="nav-link mb-0 fw-bold">Simple</p><a class="nav-link fw-semi-bold" href="pages/authentication/simple/sign-in.html">Sign in</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/sign-up.html">Sign up</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/sign-out.html">Sign out</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/lock-screen.html">Lock screen</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
              <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="moduless">
                <div class="dropdown-menu-content navbar-top-card p-3">
                  <div class="scrollbar max-h-dropdown">
                    <div class="row gx-0">
                      <div class="col-6">
                        <div class="nav flex-column"><a class="nav-link fw-semi-bold" href="modules/forms/basic/form-control.html">Form control</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/input-group.html">Input group</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/select.html">Select</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/checks.html">Checks</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/range.html">Range</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/floating-labels.html">Floating labels</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/layout.html">Layout</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/editor.html">Editor</a></div>
                      </div>
                      <div class="col-6">
                        <div class="nav flex-column"><a class="nav-link fw-semi-bold" href="modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/rating.html">Rating</a><a class="nav-link fw-semi-bold" href="modules/forms/wizard.html">Wizard</a><a class="nav-link fw-semi-bold" href="modules/icons/feather.html">Feather</a><a class="nav-link fw-semi-bold" href="modules/icons/font-awesome.html">Font awesome</a><a class="nav-link fw-semi-bold" href="modules/icons/unicons.html">Unicons</a><a class="nav-link fw-semi-bold" href="modules/tables/basic-tables.html">Basic tables</a><a class="nav-link fw-semi-bold" href="modules/tables/advance-tables.html">Advance tables</a><a class="nav-link fw-semi-bold" href="modules/components/accordion.html">Accordion</a><a class="nav-link fw-semi-bold" href="modules/components/avatar.html">Avatar</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
              <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="documentations">
                <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold" href="documentation/getting-started.html">Getting started</a><a class="dropdown-item fw-semi-bold" href="documentation/customization/styling.html">Styling</a><a class="dropdown-item fw-semi-bold" href="documentation/customization/plugin.html">Plugin</a><a class="dropdown-item fw-semi-bold" href="documentation/layouts/vertical-navbar.html">Vertical navbar</a><a class="dropdown-item fw-semi-bold" href="documentation/layouts/horizontal-navbar.html">Horizontal navbar</a><a class="dropdown-item fw-semi-bold" href="documentation/gulp.html">Gulp</a><a class="dropdown-item fw-semi-bold" href="documentation/design-file.html">Design file</a><a class="dropdown-item fw-semi-bold" href="changelog.html">Changelog</a><a class="dropdown-item fw-semi-bold" href="showcase.html">Showcase</a></div>
              </div>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
          </li>
         
        </ul>
      </nav>
      <nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlimNew" style="display:none;">
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs--1 fw-bold">Light</span></label></div>
          </li>
        </ul>
      </nav>
      <div class="content">

<div class="row gy-3 mb-6 justify-content-between">
          <div class="col-md-9 col-auto">
            <h2 class="mb-2 text-1100">Dashboard</h2>
            <h5 class="text-700 fw-semi-bold">Here’s what’s going on right now</h5>
          </div>
          <div class="col-md-3 col-auto">
            <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}'><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
          </div>
        </div>
        <div class="row mb-3 gy-6">
          <div class="col-12 col-xxl-2">
            <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-books text-primary-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">0<span class="fs-1 fw-semi-bold text-900 ms-2">Bots</span></h2>
                    <p class="text-800 fs--1 mb-0">Running</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-users-alt text-success-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">0<span class="fs-1 fw-semi-bold text-900 ms-2">Transactions</span></h2>
                    <p class="text-800 fs--1 mb-0">Successful</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-invoice text-warning-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">0<span class="fs-1 fw-semi-bold text-900 ms-2">Transactions</span></h2>
                    <p class="text-800 fs--1 mb-0">Failed</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-refresh text-danger-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">0<span class="fs-1 fw-semi-bold text-900 ms-2">Transactions</span></h2>
                    <p class="text-800 fs--1 mb-0">Reverted</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6 col-xxl-5">
          <div class="card border border-300 h-100 w-100 overflow-hidden">
              <div class="card-body px-5 position-relative">
                <h3 class="mb-5">Deploy a bot</h3>
                <p class="text-700 fw-semi-bold">To get started, deploy an MEV bot, which runs on a virtual server in the cloud.</p>
              </div>
              <div class="card-footer border-0 py-0 px-5 z-index-1">
                  <a href="{{ url('/console/deployment') }}" class="btn btn-primary">Deploy a bot</a>
                  <a href="{{ url('/') }}" class="btn btn-phoenix-primary order-0">Mempool</a>
                  <br>
                  <br>
                    <p class="text-700 fw-semi-bold">Note: You bots will search on <a href="#">Binance Smart Chain (BSC)</a> by default</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6 col-xxl-5">
            <div class="card border border-300 h-100 w-100 overflow-hidden">
              <div class="card-body px-5 position-relative">
                
                <h3 class="mb-5">Additional information</h3>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item fw-semi-bold border-0"><a href="#">Getting started guide</a></li>
                      <li class="list-group-item fw-semi-bold border-0"><a href="#">Documentation</a></li>
                      <li class="list-group-item fw-semi-bold border-0"><a href="#">Forums</a></li>
                      <li class="list-group-item fw-semi-bold border-0"><a href="#">Pricing</a></li>
                      <li class="list-group-item fw-semi-bold border-0"><a href="#">Contact us</a></li>
                    </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 pb-3 border-y border-300">
          <div class="row">
            <div class="col-12 col-xl-7 col-xxl-6">
              <div class="row g-3 mb-3">
                <div class="col-12 col-md-6">
                  <h3 class="text-1100 text-nowrap">Extracted MEV by Protocol</h3>
                  <p class="text-700 mb-md-7">Updated in real time</p>
                  <div class="d-flex align-items-center justify-content-between">

                  </div>
                  <hr class="bg-200 mb-2 mt-2">
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/green.png" alt="" height="8" width="16">Alpaca</p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/blue.png" alt="" height="8" width="16">PancakeSwap V2</p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/skyblue.png" alt="" height="8" width="16">Venus</p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/red.png" alt="" height="8" width="16">BiSwap</p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/yellow.png" alt="" height="8" width="16">Apeswap</p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/yellow.png" alt="" height="8" width="16">Coinwind</p>
                  </div>

                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/yellow.png" alt="" height="8" width="16">Wombat</p>
                  </div>
                  
                  <button class="btn btn-outline-primary mt-5">See Details<svg class="svg-inline--fa fa-angle-right ms-2 fs--2 text-center" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <span class="fas fa-angle-right ms-2 fs--2 text-center"></span> Font Awesome fontawesome.com --></button>
                </div>
                <div class="col-12 col-md-6">
                  <div class="position-relative mb-sm-4 mb-xl-0">
                    <div class="echart-issue-chart" style="min-height: 390px; width: 100%; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" _echarts_instance_="ec_1671278318193"><div style="position: relative; width: 339px; height: 390px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;"><canvas data-zr-dom-id="zr_0" width="339" height="390" style="position: absolute; left: 0px; top: 0px; width: 339px; height: 390px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class="" style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgb(255, 255, 255); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 10px; top: 0px; left: 0px; transform: translate3d(14px, 246px, 0px); border-color: rgb(255, 204, 133); pointer-events: none; visibility: hidden; opacity: 0;"><div style="margin: 0px 0 0;line-height:1;"><div style="font-size:14px;color:#666;font-weight:400;line-height:1;">Tasks assigned to me</div><div style="margin: 10px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><span style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#ffcc85;"></span><span style="font-size:14px;color:#666;font-weight:400;margin-left:2px">R &amp; D</span><span style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">24</span><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="clear:both"></div></div></div></div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-12 col-xl-5 col-xxl-6">
                  <h3>Cumulative Extracted MEV - Gross Profit</h3>
                  <div class="echart-zero-burnout-chart" style="min-height: 320px; width: 100%; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" _echarts_instance_="ec_1671278318192"><div style="position: relative; width: 694px; height: 320px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="694" height="320" style="position: absolute; left: 0px; top: 0px; width: 694px; height: 320px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class="" style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgb(15, 17, 26); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 10px; top: 0px; left: 0px; transform: translate3d(60px, 78px, 0px); border-color: rgb(49, 55, 74); pointer-events: none; visibility: hidden; opacity: 0;"><div>
                <p class="mb-2 text-600">
                  Dec 03, 2022
                </p>
            <div class="ms-1">
                <h6 class="text-700"><svg class="svg-inline--fa fa-circle me-1 fs--2" style="color: #90d67f;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <span class="fas fa-circle me-1 fs--2" style="color:#90d67f"></span> Font Awesome fontawesome.com -->
                  Issues found : 3
                </h6>
              </div><div class="ms-1">
                <h6 class="text-700"><svg class="svg-inline--fa fa-circle me-1 fs--2" style="color: #60c6ff;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <span class="fas fa-circle me-1 fs--2" style="color:#60c6ff"></span> Font Awesome fontawesome.com -->
                  Open : 6
                </h6>
              </div><div class="ms-1">
                <h6 class="text-700"><svg class="svg-inline--fa fa-circle me-1 fs--2" style="color: #ffcc85;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <span class="fas fa-circle me-1 fs--2" style="color:#ffcc85"></span> Font Awesome fontawesome.com -->
                  In Progress : 11
                </h6>
              </div><div class="ms-1">
                <h6 class="text-700"><svg class="svg-inline--fa fa-circle me-1 fs--2" style="color: #3e465b;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <span class="fas fa-circle me-1 fs--2" style="color:#3e465b"></span> Font Awesome fontawesome.com -->
                  Actual : 20
                </h6>
              </div>
                  </div></div></div>
            </div>
          </div>
        </div>
          
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              2022 &copy;<a class="ms-1" href="#">Deltabots Foundation</a></p>
            </div>
          </div>
        </footer>
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
    </main><!-- ===============================================-->

    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="vendors/choices/choices.min.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/dhtmlx-gantt/dhtmlxgantt.js"></script>
    <script src="assets/js/phoenix.js"></script>
    
  </body>

</html>
