<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v5.1.0
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2024 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->

<html lang="en">
  <head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="node_modules/simplebar/dist/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="css/examples.css" rel="stylesheet">
    <script src="js/config.js"></script>
    <script src="js/color-modes.js"></script>
    <link href="node_modules/@coreui/icons/css/free.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
      <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
          <svg class="sidebar-brand-full" width="88" height="32" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
          </svg>
          <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
          </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="index.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
            </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">Theme</li>
        <li class="nav-item"><a class="nav-link" href="colors.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-drop"></use>
            </svg> Colors</a></li>
        <li class="nav-item"><a class="nav-link" href="typography.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-pencil"></use>
            </svg> Typography</a></li>
        <li class="nav-title">Components</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
            </svg> Base</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Accordion</a></li>
            <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Breadcrumb</a></li>
            <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Cards</a></li>
            <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Carousel</a></li>
            <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Collapse</a></li>
            <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> List group</a></li>
            <li class="nav-item"><a class="nav-link" href="base/navs-tabs.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Navs &amp; Tabs</a></li>
            <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Pagination</a></li>
            <li class="nav-item"><a class="nav-link" href="base/placeholders.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Placeholders</a></li>
            <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Popovers</a></li>
            <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Progress</a></li>
            <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Spinners</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Tables</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Tooltips</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-cursor"></use>
            </svg> Buttons</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Buttons</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Buttons Group</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Dropdowns</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="charts.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-chart-pie"></use>
            </svg> Charts</a></li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-notes"></use>
            </svg> Forms</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="forms/form-control.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Form Control</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/select.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Select</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Checks and radios</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/range.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Range</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/input-group.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Input group</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/floating-labels.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Floating labels</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/layout.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Layout</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/validation.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Validation</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-star"></use>
            </svg> Icons</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> CoreUI Icons - Brand</a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> CoreUI Icons - Flag</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
            </svg> Notifications</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Alerts</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Badge</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Modals</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Toasts</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="widgets.html">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-calculator"></use>
            </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-divider"></li>
        <li class="nav-title">Extras</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-star"></use>
            </svg> Pages</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                </svg> Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                </svg> Register</a></li>
            <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bug"></use>
                </svg> Error 404</a></li>
            <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bug"></use>
                </svg> Error 500</a></li>
          </ul>
        </li>
        <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/" target="_blank">
            <svg class="nav-icon">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-description"></use>
            </svg> Docs</a></li>
        <li class="nav-item"><a class="nav-link text-primary fw-semibold" href="https://coreui.io/product/bootstrap-dashboard-template/" target="_top">
            <svg class="nav-icon text-primary">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-layers"></use>
            </svg> Try CoreUI PRO</a></li>
      </ul>
      <div class="sidebar-footer border-top d-none d-md-flex">     
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
      </div>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        <div class="container-fluid border-bottom px-4">
          <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
            <svg class="icon icon-lg">
              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
            </svg>
          </button>
          <ul class="header-nav d-none d-lg-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav">
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
                <svg class="icon icon-lg theme-icon-active">
                  <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                </svg>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="light">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-sun"></use>
                    </svg>Light
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="dark">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-moon"></use>
                    </svg>Dark
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center active" type="button" data-coreui-theme-value="auto">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                    </svg>Auto
                  </button>
                </li>
              </ul>
            </li>
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div></a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Account</div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item"><span>Components</span>
              </li>
              <li class="breadcrumb-item"><span>Icons</span>
              </li>
              <li class="breadcrumb-item active"><span>CoreUI Icons - Free</span>
              </li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="callout callout-info bg-body">CoreUI Admin Template is delivered with CoreUI Icons with more than 1500 icons in multiple formats SVG, JavaScript, and Webfonts. CoreUI Icons are beautifully crafted symbols for common actions and items. You can use them in your digital products for web or mobile apps.<br><br>For more information please visit <a href="https://coreui.io/icons/" target="_blank">CoreUI Icons website</a>.
          </div>
          <div class="card mb-4">
            <div class="card-header"> CoreUI Icons - Free</div>
            <div class="card-body">
              <div class="row text-center">
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-3d"></i>
                  <div>cil-3d</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-4k"></i>
                  <div>cil-4k</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-account-logout"></i>
                  <div>cil-account-logout</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-action-redo"></i>
                  <div>cil-action-redo</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-action-undo"></i>
                  <div>cil-action-undo</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-address-book"></i>
                  <div>cil-address-book</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-airplane-mode"></i>
                  <div>cil-airplane-mode</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-airplane-mode-off"></i>
                  <div>cil-airplane-mode-off</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-airplay"></i>
                  <div>cil-airplay</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-alarm"></i>
                  <div>cil-alarm</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-album"></i>
                  <div>cil-album</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-align-center"></i>
                  <div>cil-align-center</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-align-left"></i>
                  <div>cil-align-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-align-right"></i>
                  <div>cil-align-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-american-football"></i>
                  <div>cil-american-football</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-animal"></i>
                  <div>cil-animal</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-aperture"></i>
                  <div>cil-aperture</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-apple"></i>
                  <div>cil-apple</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-applications"></i>
                  <div>cil-applications</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-applications-settings"></i>
                  <div>cil-applications-settings</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-apps"></i>
                  <div>cil-apps</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-apps-settings"></i>
                  <div>cil-apps-settings</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-bottom"></i>
                  <div>cil-arrow-bottom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-circle-bottom"></i>
                  <div>cil-arrow-circle-bottom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-circle-left"></i>
                  <div>cil-arrow-circle-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-circle-right"></i>
                  <div>cil-arrow-circle-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-circle-top"></i>
                  <div>cil-arrow-circle-top</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-left"></i>
                  <div>cil-arrow-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-right"></i>
                  <div>cil-arrow-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-bottom"></i>
                  <div>cil-arrow-thick-bottom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-from-bottom"></i>
                  <div>cil-arrow-thick-from-bottom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-from-left"></i>
                  <div>cil-arrow-thick-from-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-from-right"></i>
                  <div>cil-arrow-thick-from-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-from-top"></i>
                  <div>cil-arrow-thick-from-top</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-left"></i>
                  <div>cil-arrow-thick-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-right"></i>
                  <div>cil-arrow-thick-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-to-bottom"></i>
                  <div>cil-arrow-thick-to-bottom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-to-left"></i>
                  <div>cil-arrow-thick-to-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-to-right"></i>
                  <div>cil-arrow-thick-to-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-to-top"></i>
                  <div>cil-arrow-thick-to-top</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-thick-top"></i>
                  <div>cil-arrow-thick-top</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-arrow-top"></i>
                  <div>cil-arrow-top</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-assistive-listening-system"></i>
                  <div>cil-assistive-listening-system</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-asterisk"></i>
                  <div>cil-asterisk</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-asterisk-circle"></i>
                  <div>cil-asterisk-circle</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-at"></i>
                  <div>cil-at</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-audio"></i>
                  <div>cil-audio</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-audio-description"></i>
                  <div>cil-audio-description</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-audio-spectrum"></i>
                  <div>cil-audio-spectrum</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-av-timer"></i>
                  <div>cil-av-timer</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-baby"></i>
                  <div>cil-baby</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-baby-carriage"></i>
                  <div>cil-baby-carriage</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-backspace"></i>
                  <div>cil-backspace</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-badge"></i>
                  <div>cil-badge</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-balance-scale"></i>
                  <div>cil-balance-scale</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-ban"></i>
                  <div>cil-ban</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bank"></i>
                  <div>cil-bank</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bar-chart"></i>
                  <div>cil-bar-chart</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-barcode"></i>
                  <div>cil-barcode</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-baseball"></i>
                  <div>cil-baseball</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-basket"></i>
                  <div>cil-basket</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-basketball"></i>
                  <div>cil-basketball</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bath"></i>
                  <div>cil-bath</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bathroom"></i>
                  <div>cil-bathroom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-battery-0"></i>
                  <div>cil-battery-0</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-battery-3"></i>
                  <div>cil-battery-3</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-battery-5"></i>
                  <div>cil-battery-5</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-battery-alert"></i>
                  <div>cil-battery-alert</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-battery-empty"></i>
                  <div>cil-battery-empty</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-battery-full"></i>
                  <div>cil-battery-full</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-battery-slash"></i>
                  <div>cil-battery-slash</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-beach-access"></i>
                  <div>cil-beach-access</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-beaker"></i>
                  <div>cil-beaker</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bed"></i>
                  <div>cil-bed</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bell"></i>
                  <div>cil-bell</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bell-exclamation"></i>
                  <div>cil-bell-exclamation</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bike"></i>
                  <div>cil-bike</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-birthday-cake"></i>
                  <div>cil-birthday-cake</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-blind"></i>
                  <div>cil-blind</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bluetooth"></i>
                  <div>cil-bluetooth</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-blur"></i>
                  <div>cil-blur</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-blur-circular"></i>
                  <div>cil-blur-circular</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-blur-linear"></i>
                  <div>cil-blur-linear</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-boat-alt"></i>
                  <div>cil-boat-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bold"></i>
                  <div>cil-bold</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bolt"></i>
                  <div>cil-bolt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bolt-circle"></i>
                  <div>cil-bolt-circle</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-book"></i>
                  <div>cil-book</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bookmark"></i>
                  <div>cil-bookmark</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-all"></i>
                  <div>cil-border-all</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-bottom"></i>
                  <div>cil-border-bottom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-clear"></i>
                  <div>cil-border-clear</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-horizontal"></i>
                  <div>cil-border-horizontal</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-inner"></i>
                  <div>cil-border-inner</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-left"></i>
                  <div>cil-border-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-outer"></i>
                  <div>cil-border-outer</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-right"></i>
                  <div>cil-border-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-style"></i>
                  <div>cil-border-style</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-top"></i>
                  <div>cil-border-top</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-border-vertical"></i>
                  <div>cil-border-vertical</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bowling"></i>
                  <div>cil-bowling</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-braille"></i>
                  <div>cil-braille</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-briefcase"></i>
                  <div>cil-briefcase</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-brightness"></i>
                  <div>cil-brightness</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-british-pound"></i>
                  <div>cil-british-pound</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-browser"></i>
                  <div>cil-browser</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-brush"></i>
                  <div>cil-brush</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-brush-alt"></i>
                  <div>cil-brush-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bug"></i>
                  <div>cil-bug</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-building"></i>
                  <div>cil-building</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bullhorn"></i>
                  <div>cil-bullhorn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-burger"></i>
                  <div>cil-burger</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-burn"></i>
                  <div>cil-burn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-bus-alt"></i>
                  <div>cil-bus-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-calculator"></i>
                  <div>cil-calculator</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-calendar"></i>
                  <div>cil-calendar</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-calendar-check"></i>
                  <div>cil-calendar-check</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-camera"></i>
                  <div>cil-camera</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-camera-control"></i>
                  <div>cil-camera-control</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-camera-roll"></i>
                  <div>cil-camera-roll</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-car-alt"></i>
                  <div>cil-car-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-caret-bottom"></i>
                  <div>cil-caret-bottom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-caret-left"></i>
                  <div>cil-caret-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-caret-right"></i>
                  <div>cil-caret-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-caret-top"></i>
                  <div>cil-caret-top</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cart"></i>
                  <div>cil-cart</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cash"></i>
                  <div>cil-cash</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-casino"></i>
                  <div>cil-casino</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cast"></i>
                  <div>cil-cast</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cat"></i>
                  <div>cil-cat</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cc"></i>
                  <div>cil-cc</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-center-focus"></i>
                  <div>cil-center-focus</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chart"></i>
                  <div>cil-chart</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chart-line"></i>
                  <div>cil-chart-line</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chart-pie"></i>
                  <div>cil-chart-pie</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chat-bubble"></i>
                  <div>cil-chat-bubble</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-check"></i>
                  <div>cil-check</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-check-alt"></i>
                  <div>cil-check-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-check-circle"></i>
                  <div>cil-check-circle</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-bottom"></i>
                  <div>cil-chevron-bottom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-circle-down-alt"></i>
                  <div>cil-chevron-circle-down-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-circle-left-alt"></i>
                  <div>cil-chevron-circle-left-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-circle-right-alt"></i>
                  <div>cil-chevron-circle-right-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-circle-up-alt"></i>
                  <div>cil-chevron-circle-up-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-double-down"></i>
                  <div>cil-chevron-double-down</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-double-left"></i>
                  <div>cil-chevron-double-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-double-right"></i>
                  <div>cil-chevron-double-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-double-up"></i>
                  <div>cil-chevron-double-up</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-left"></i>
                  <div>cil-chevron-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-right"></i>
                  <div>cil-chevron-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-chevron-top"></i>
                  <div>cil-chevron-top</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-child"></i>
                  <div>cil-child</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-child-friendly"></i>
                  <div>cil-child-friendly</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-circle"></i>
                  <div>cil-circle</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-clear-all"></i>
                  <div>cil-clear-all</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-clipboard"></i>
                  <div>cil-clipboard</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-clock"></i>
                  <div>cil-clock</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-clone"></i>
                  <div>cil-clone</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-closed-captioning"></i>
                  <div>cil-closed-captioning</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cloud"></i>
                  <div>cil-cloud</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cloud-download"></i>
                  <div>cil-cloud-download</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cloud-upload"></i>
                  <div>cil-cloud-upload</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cloudy"></i>
                  <div>cil-cloudy</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-code"></i>
                  <div>cil-code</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-coffee"></i>
                  <div>cil-coffee</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cog"></i>
                  <div>cil-cog</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-color-border"></i>
                  <div>cil-color-border</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-color-fill"></i>
                  <div>cil-color-fill</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-color-palette"></i>
                  <div>cil-color-palette</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-columns"></i>
                  <div>cil-columns</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-command"></i>
                  <div>cil-command</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-comment-bubble"></i>
                  <div>cil-comment-bubble</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-comment-square"></i>
                  <div>cil-comment-square</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-compass"></i>
                  <div>cil-compass</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-compress"></i>
                  <div>cil-compress</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-contact"></i>
                  <div>cil-contact</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-contrast"></i>
                  <div>cil-contrast</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-control"></i>
                  <div>cil-control</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-copy"></i>
                  <div>cil-copy</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-couch"></i>
                  <div>cil-couch</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-credit-card"></i>
                  <div>cil-credit-card</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-crop"></i>
                  <div>cil-crop</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-crop-rotate"></i>
                  <div>cil-crop-rotate</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cursor"></i>
                  <div>cil-cursor</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cursor-move"></i>
                  <div>cil-cursor-move</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-cut"></i>
                  <div>cil-cut</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-data-transfer-down"></i>
                  <div>cil-data-transfer-down</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-data-transfer-up"></i>
                  <div>cil-data-transfer-up</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-deaf"></i>
                  <div>cil-deaf</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-delete"></i>
                  <div>cil-delete</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-description"></i>
                  <div>cil-description</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-devices"></i>
                  <div>cil-devices</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-dialpad"></i>
                  <div>cil-dialpad</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-diamond"></i>
                  <div>cil-diamond</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-dinner"></i>
                  <div>cil-dinner</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-disabled"></i>
                  <div>cil-disabled</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-dog"></i>
                  <div>cil-dog</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-dollar"></i>
                  <div>cil-dollar</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-door"></i>
                  <div>cil-door</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-double-quote-sans-left"></i>
                  <div>cil-double-quote-sans-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-double-quote-sans-right"></i>
                  <div>cil-double-quote-sans-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-drink"></i>
                  <div>cil-drink</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-drink-alcohol"></i>
                  <div>cil-drink-alcohol</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-drop"></i>
                  <div>cil-drop</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-eco"></i>
                  <div>cil-eco</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-education"></i>
                  <div>cil-education</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-elevator"></i>
                  <div>cil-elevator</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-envelope-closed"></i>
                  <div>cil-envelope-closed</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-envelope-letter"></i>
                  <div>cil-envelope-letter</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-envelope-open"></i>
                  <div>cil-envelope-open</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-equalizer"></i>
                  <div>cil-equalizer</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-ethernet"></i>
                  <div>cil-ethernet</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-euro"></i>
                  <div>cil-euro</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-excerpt"></i>
                  <div>cil-excerpt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-exit-to-app"></i>
                  <div>cil-exit-to-app</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-expand-down"></i>
                  <div>cil-expand-down</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-expand-left"></i>
                  <div>cil-expand-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-expand-right"></i>
                  <div>cil-expand-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-expand-up"></i>
                  <div>cil-expand-up</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-exposure"></i>
                  <div>cil-exposure</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-external-link"></i>
                  <div>cil-external-link</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-eyedropper"></i>
                  <div>cil-eyedropper</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-face"></i>
                  <div>cil-face</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-face-dead"></i>
                  <div>cil-face-dead</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-factory"></i>
                  <div>cil-factory</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-factory-slash"></i>
                  <div>cil-factory-slash</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-fastfood"></i>
                  <div>cil-fastfood</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-fax"></i>
                  <div>cil-fax</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-featured-playlist"></i>
                  <div>cil-featured-playlist</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-file"></i>
                  <div>cil-file</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-filter"></i>
                  <div>cil-filter</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-filter-frames"></i>
                  <div>cil-filter-frames</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-filter-photo"></i>
                  <div>cil-filter-photo</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-filter-square"></i>
                  <div>cil-filter-square</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-filter-x"></i>
                  <div>cil-filter-x</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-find-in-page"></i>
                  <div>cil-find-in-page</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-fingerprint"></i>
                  <div>cil-fingerprint</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-fire"></i>
                  <div>cil-fire</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-flag-alt"></i>
                  <div>cil-flag-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-flight-takeoff"></i>
                  <div>cil-flight-takeoff</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-flip"></i>
                  <div>cil-flip</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-flip-to-back"></i>
                  <div>cil-flip-to-back</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-flip-to-front"></i>
                  <div>cil-flip-to-front</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-flower"></i>
                  <div>cil-flower</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-folder"></i>
                  <div>cil-folder</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-folder-open"></i>
                  <div>cil-folder-open</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-font"></i>
                  <div>cil-font</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-football"></i>
                  <div>cil-football</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-fork"></i>
                  <div>cil-fork</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-fridge"></i>
                  <div>cil-fridge</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-frown"></i>
                  <div>cil-frown</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-fullscreen"></i>
                  <div>cil-fullscreen</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-fullscreen-exit"></i>
                  <div>cil-fullscreen-exit</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-functions"></i>
                  <div>cil-functions</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-functions-alt"></i>
                  <div>cil-functions-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-gamepad"></i>
                  <div>cil-gamepad</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-garage"></i>
                  <div>cil-garage</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-gem"></i>
                  <div>cil-gem</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-gif"></i>
                  <div>cil-gif</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-gift"></i>
                  <div>cil-gift</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-globe-alt"></i>
                  <div>cil-globe-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-golf"></i>
                  <div>cil-golf</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-golf-alt"></i>
                  <div>cil-golf-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-gradient"></i>
                  <div>cil-gradient</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-grain"></i>
                  <div>cil-grain</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-graph"></i>
                  <div>cil-graph</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-grid"></i>
                  <div>cil-grid</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-grid-slash"></i>
                  <div>cil-grid-slash</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-group"></i>
                  <div>cil-group</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-hamburger-menu"></i>
                  <div>cil-hamburger-menu</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-hand-point-down"></i>
                  <div>cil-hand-point-down</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-hand-point-left"></i>
                  <div>cil-hand-point-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-hand-point-right"></i>
                  <div>cil-hand-point-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-hand-point-up"></i>
                  <div>cil-hand-point-up</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-happy"></i>
                  <div>cil-happy</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-hd"></i>
                  <div>cil-hd</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-hdr"></i>
                  <div>cil-hdr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-header"></i>
                  <div>cil-header</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-headphones"></i>
                  <div>cil-headphones</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-healing"></i>
                  <div>cil-healing</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-heart"></i>
                  <div>cil-heart</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-highlighter"></i>
                  <div>cil-highlighter</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-highligt"></i>
                  <div>cil-highligt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-history"></i>
                  <div>cil-history</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-home"></i>
                  <div>cil-home</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-hospital"></i>
                  <div>cil-hospital</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-hot-tub"></i>
                  <div>cil-hot-tub</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-house"></i>
                  <div>cil-house</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-https"></i>
                  <div>cil-https</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-image"></i>
                  <div>cil-image</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-image-broken"></i>
                  <div>cil-image-broken</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-image-plus"></i>
                  <div>cil-image-plus</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-inbox"></i>
                  <div>cil-inbox</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-indent-decrease"></i>
                  <div>cil-indent-decrease</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-indent-increase"></i>
                  <div>cil-indent-increase</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-industry"></i>
                  <div>cil-industry</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-industry-slash"></i>
                  <div>cil-industry-slash</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-infinity"></i>
                  <div>cil-infinity</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-info"></i>
                  <div>cil-info</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-input"></i>
                  <div>cil-input</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-input-hdmi"></i>
                  <div>cil-input-hdmi</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-input-power"></i>
                  <div>cil-input-power</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-institution"></i>
                  <div>cil-institution</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-italic"></i>
                  <div>cil-italic</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-justify-center"></i>
                  <div>cil-justify-center</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-justify-left"></i>
                  <div>cil-justify-left</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-justify-right"></i>
                  <div>cil-justify-right</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-keyboard"></i>
                  <div>cil-keyboard</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-lan"></i>
                  <div>cil-lan</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-language"></i>
                  <div>cil-language</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-laptop"></i>
                  <div>cil-laptop</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-layers"></i>
                  <div>cil-layers</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-leaf"></i>
                  <div>cil-leaf</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-lemon"></i>
                  <div>cil-lemon</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-level-down"></i>
                  <div>cil-level-down</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-level-up"></i>
                  <div>cil-level-up</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-library"></i>
                  <div>cil-library</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-library-add"></i>
                  <div>cil-library-add</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-library-building"></i>
                  <div>cil-library-building</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-life-ring"></i>
                  <div>cil-life-ring</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-lightbulb"></i>
                  <div>cil-lightbulb</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-line-spacing"></i>
                  <div>cil-line-spacing</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-line-style"></i>
                  <div>cil-line-style</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-line-weight"></i>
                  <div>cil-line-weight</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-link"></i>
                  <div>cil-link</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-link-alt"></i>
                  <div>cil-link-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-link-broken"></i>
                  <div>cil-link-broken</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-list"></i>
                  <div>cil-list</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-list-filter"></i>
                  <div>cil-list-filter</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-list-high-priority"></i>
                  <div>cil-list-high-priority</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-list-low-priority"></i>
                  <div>cil-list-low-priority</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-list-numbered"></i>
                  <div>cil-list-numbered</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-list-numbered-rtl"></i>
                  <div>cil-list-numbered-rtl</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-list-rich"></i>
                  <div>cil-list-rich</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-location-pin"></i>
                  <div>cil-location-pin</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-lock-locked"></i>
                  <div>cil-lock-locked</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-lock-unlocked"></i>
                  <div>cil-lock-unlocked</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-locomotive"></i>
                  <div>cil-locomotive</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-loop"></i>
                  <div>cil-loop</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-loop-1"></i>
                  <div>cil-loop-1</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-loop-circular"></i>
                  <div>cil-loop-circular</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-low-vision"></i>
                  <div>cil-low-vision</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-magnifying-glass"></i>
                  <div>cil-magnifying-glass</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-map"></i>
                  <div>cil-map</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-media-eject"></i>
                  <div>cil-media-eject</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-media-pause"></i>
                  <div>cil-media-pause</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-media-play"></i>
                  <div>cil-media-play</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-media-record"></i>
                  <div>cil-media-record</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-media-skip-backward"></i>
                  <div>cil-media-skip-backward</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-media-skip-forward"></i>
                  <div>cil-media-skip-forward</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-media-step-backward"></i>
                  <div>cil-media-step-backward</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-media-step-forward"></i>
                  <div>cil-media-step-forward</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-media-stop"></i>
                  <div>cil-media-stop</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-medical-cross"></i>
                  <div>cil-medical-cross</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-meh"></i>
                  <div>cil-meh</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-memory"></i>
                  <div>cil-memory</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-menu"></i>
                  <div>cil-menu</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mic"></i>
                  <div>cil-mic</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-microphone"></i>
                  <div>cil-microphone</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-minus"></i>
                  <div>cil-minus</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mobile"></i>
                  <div>cil-mobile</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mobile-landscape"></i>
                  <div>cil-mobile-landscape</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-money"></i>
                  <div>cil-money</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-monitor"></i>
                  <div>cil-monitor</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mood-bad"></i>
                  <div>cil-mood-bad</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mood-good"></i>
                  <div>cil-mood-good</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mood-very-bad"></i>
                  <div>cil-mood-very-bad</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mood-very-good"></i>
                  <div>cil-mood-very-good</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-moon"></i>
                  <div>cil-moon</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mouse"></i>
                  <div>cil-mouse</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mouth-slash"></i>
                  <div>cil-mouth-slash</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-move"></i>
                  <div>cil-move</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-movie"></i>
                  <div>cil-movie</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mug"></i>
                  <div>cil-mug</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-mug-tea"></i>
                  <div>cil-mug-tea</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-music-note"></i>
                  <div>cil-music-note</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-newspaper"></i>
                  <div>cil-newspaper</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-note-add"></i>
                  <div>cil-note-add</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-notes"></i>
                  <div>cil-notes</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-object-group"></i>
                  <div>cil-object-group</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-object-ungroup"></i>
                  <div>cil-object-ungroup</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-opacity"></i>
                  <div>cil-opacity</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-opentype"></i>
                  <div>cil-opentype</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-options"></i>
                  <div>cil-options</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-paint"></i>
                  <div>cil-paint</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-paint-bucket"></i>
                  <div>cil-paint-bucket</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-paper-plane"></i>
                  <div>cil-paper-plane</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-paperclip"></i>
                  <div>cil-paperclip</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-paragraph"></i>
                  <div>cil-paragraph</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-paw"></i>
                  <div>cil-paw</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-pen"></i>
                  <div>cil-pen</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-pen-alt"></i>
                  <div>cil-pen-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-pen-nib"></i>
                  <div>cil-pen-nib</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-pencil"></i>
                  <div>cil-pencil</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-people"></i>
                  <div>cil-people</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-phone"></i>
                  <div>cil-phone</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-pin"></i>
                  <div>cil-pin</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-pizza"></i>
                  <div>cil-pizza</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-plant"></i>
                  <div>cil-plant</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-playlist-add"></i>
                  <div>cil-playlist-add</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-plus"></i>
                  <div>cil-plus</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-pool"></i>
                  <div>cil-pool</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-power-standby"></i>
                  <div>cil-power-standby</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-pregnant"></i>
                  <div>cil-pregnant</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-print"></i>
                  <div>cil-print</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-pushchair"></i>
                  <div>cil-pushchair</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-puzzle"></i>
                  <div>cil-puzzle</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-qr-code"></i>
                  <div>cil-qr-code</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-rain"></i>
                  <div>cil-rain</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-rectangle"></i>
                  <div>cil-rectangle</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-recycle"></i>
                  <div>cil-recycle</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-reload"></i>
                  <div>cil-reload</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-report-slash"></i>
                  <div>cil-report-slash</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-resize-both"></i>
                  <div>cil-resize-both</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-resize-height"></i>
                  <div>cil-resize-height</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-resize-width"></i>
                  <div>cil-resize-width</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-restaurant"></i>
                  <div>cil-restaurant</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-room"></i>
                  <div>cil-room</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-router"></i>
                  <div>cil-router</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-rowing"></i>
                  <div>cil-rowing</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-rss"></i>
                  <div>cil-rss</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-ruble"></i>
                  <div>cil-ruble</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-running"></i>
                  <div>cil-running</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sad"></i>
                  <div>cil-sad</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-satelite"></i>
                  <div>cil-satelite</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-save"></i>
                  <div>cil-save</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-school"></i>
                  <div>cil-school</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-screen-desktop"></i>
                  <div>cil-screen-desktop</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-screen-smartphone"></i>
                  <div>cil-screen-smartphone</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-scrubber"></i>
                  <div>cil-scrubber</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-search"></i>
                  <div>cil-search</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-send"></i>
                  <div>cil-send</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-settings"></i>
                  <div>cil-settings</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-share"></i>
                  <div>cil-share</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-share-all"></i>
                  <div>cil-share-all</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-share-alt"></i>
                  <div>cil-share-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-share-boxed"></i>
                  <div>cil-share-boxed</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-shield-alt"></i>
                  <div>cil-shield-alt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-short-text"></i>
                  <div>cil-short-text</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-shower"></i>
                  <div>cil-shower</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sign-language"></i>
                  <div>cil-sign-language</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-signal-cellular-0"></i>
                  <div>cil-signal-cellular-0</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-signal-cellular-3"></i>
                  <div>cil-signal-cellular-3</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-signal-cellular-4"></i>
                  <div>cil-signal-cellular-4</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sim"></i>
                  <div>cil-sim</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sitemap"></i>
                  <div>cil-sitemap</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-smile"></i>
                  <div>cil-smile</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-smile-plus"></i>
                  <div>cil-smile-plus</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-smoke"></i>
                  <div>cil-smoke</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-smoke-free"></i>
                  <div>cil-smoke-free</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-smoke-slash"></i>
                  <div>cil-smoke-slash</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-smoking-room"></i>
                  <div>cil-smoking-room</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-snowflake"></i>
                  <div>cil-snowflake</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-soccer"></i>
                  <div>cil-soccer</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sofa"></i>
                  <div>cil-sofa</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sort-alpha-down"></i>
                  <div>cil-sort-alpha-down</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sort-alpha-up"></i>
                  <div>cil-sort-alpha-up</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sort-ascending"></i>
                  <div>cil-sort-ascending</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sort-descending"></i>
                  <div>cil-sort-descending</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sort-numeric-down"></i>
                  <div>cil-sort-numeric-down</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sort-numeric-up"></i>
                  <div>cil-sort-numeric-up</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-spa"></i>
                  <div>cil-spa</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-space-bar"></i>
                  <div>cil-space-bar</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-speak"></i>
                  <div>cil-speak</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-speaker"></i>
                  <div>cil-speaker</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-speech"></i>
                  <div>cil-speech</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-speedometer"></i>
                  <div>cil-speedometer</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-spreadsheet"></i>
                  <div>cil-spreadsheet</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-square"></i>
                  <div>cil-square</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-star"></i>
                  <div>cil-star</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-star-half"></i>
                  <div>cil-star-half</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-storage"></i>
                  <div>cil-storage</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-stream"></i>
                  <div>cil-stream</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-strikethrough"></i>
                  <div>cil-strikethrough</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sun"></i>
                  <div>cil-sun</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-swap-horizontal"></i>
                  <div>cil-swap-horizontal</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-swap-vertical"></i>
                  <div>cil-swap-vertical</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-swimming"></i>
                  <div>cil-swimming</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-sync"></i>
                  <div>cil-sync</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-tablet"></i>
                  <div>cil-tablet</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-tag"></i>
                  <div>cil-tag</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-tags"></i>
                  <div>cil-tags</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-task"></i>
                  <div>cil-task</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-taxi"></i>
                  <div>cil-taxi</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-tennis"></i>
                  <div>cil-tennis</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-tennis-ball"></i>
                  <div>cil-tennis-ball</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-terminal"></i>
                  <div>cil-terminal</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-terrain"></i>
                  <div>cil-terrain</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-text"></i>
                  <div>cil-text</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-text-shapes"></i>
                  <div>cil-text-shapes</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-text-size"></i>
                  <div>cil-text-size</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-text-square"></i>
                  <div>cil-text-square</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-text-strike"></i>
                  <div>cil-text-strike</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-thumb-down"></i>
                  <div>cil-thumb-down</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-thumb-up"></i>
                  <div>cil-thumb-up</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-toggle-off"></i>
                  <div>cil-toggle-off</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-toggle-on"></i>
                  <div>cil-toggle-on</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-toilet"></i>
                  <div>cil-toilet</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-touch-app"></i>
                  <div>cil-touch-app</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-transfer"></i>
                  <div>cil-transfer</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-translate"></i>
                  <div>cil-translate</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-trash"></i>
                  <div>cil-trash</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-triangle"></i>
                  <div>cil-triangle</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-truck"></i>
                  <div>cil-truck</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-tv"></i>
                  <div>cil-tv</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-underline"></i>
                  <div>cil-underline</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-usb"></i>
                  <div>cil-usb</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-user"></i>
                  <div>cil-user</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-user-female"></i>
                  <div>cil-user-female</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-user-follow"></i>
                  <div>cil-user-follow</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-user-plus"></i>
                  <div>cil-user-plus</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-user-unfollow"></i>
                  <div>cil-user-unfollow</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-user-x"></i>
                  <div>cil-user-x</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-vector"></i>
                  <div>cil-vector</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-vertical-align-bottom"></i>
                  <div>cil-vertical-align-bottom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-vertical-align-center"></i>
                  <div>cil-vertical-align-center</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-vertical-align-top"></i>
                  <div>cil-vertical-align-top</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-video"></i>
                  <div>cil-video</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-videogame"></i>
                  <div>cil-videogame</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-view-column"></i>
                  <div>cil-view-column</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-view-module"></i>
                  <div>cil-view-module</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-view-quilt"></i>
                  <div>cil-view-quilt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-view-stream"></i>
                  <div>cil-view-stream</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-voice"></i>
                  <div>cil-voice</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-voice-over-record"></i>
                  <div>cil-voice-over-record</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-volume-high"></i>
                  <div>cil-volume-high</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-volume-low"></i>
                  <div>cil-volume-low</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-volume-off"></i>
                  <div>cil-volume-off</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-walk"></i>
                  <div>cil-walk</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wallet"></i>
                  <div>cil-wallet</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wallpaper"></i>
                  <div>cil-wallpaper</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-warning"></i>
                  <div>cil-warning</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-watch"></i>
                  <div>cil-watch</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wc"></i>
                  <div>cil-wc</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-weightlifitng"></i>
                  <div>cil-weightlifitng</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wheelchair"></i>
                  <div>cil-wheelchair</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wifi-signal-0"></i>
                  <div>cil-wifi-signal-0</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wifi-signal-1"></i>
                  <div>cil-wifi-signal-1</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wifi-signal-2"></i>
                  <div>cil-wifi-signal-2</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wifi-signal-3"></i>
                  <div>cil-wifi-signal-3</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wifi-signal-4"></i>
                  <div>cil-wifi-signal-4</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wifi-signal-off"></i>
                  <div>cil-wifi-signal-off</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-window"></i>
                  <div>cil-window</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-window-maximize"></i>
                  <div>cil-window-maximize</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-window-minimize"></i>
                  <div>cil-window-minimize</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-window-restore"></i>
                  <div>cil-window-restore</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-wrap-text"></i>
                  <div>cil-wrap-text</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-x"></i>
                  <div>cil-x</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-x-circle"></i>
                  <div>cil-x-circle</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-yen"></i>
                  <div>cil-yen</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-zoom"></i>
                  <div>cil-zoom</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-zoom-in"></i>
                  <div>cil-zoom-in</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cil-zoom-out"></i>
                  <div>cil-zoom-out</div>
                </div>
              </div>
              <!-- /.row-->
            </div>
          </div>
        </div>
      </div>
      <footer class="footer px-4">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io/product/free-bootstrap-admin-template/">Bootstrap Admin Template</a> &copy; 2024 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <script src="node_modules/simplebar/dist/simplebar.min.js"></script>
    <script>
      const header = document.querySelector('header.header');
      
      document.addEventListener('scroll', () => {
        if (header) {
          header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
        }
      });
      
    </script>
    <script> 
    </script>
  </body>
</html>