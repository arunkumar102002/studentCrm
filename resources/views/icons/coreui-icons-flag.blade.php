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
    <link href="node_modules/@coreui/icons/css/flag.min.css" rel="stylesheet">
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
              <li class="breadcrumb-item active"><span>CoreUI Icons - Flags</span>
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
            <div class="card-header"> CoreUI Icons - Flag</div>
            <div class="card-body">
              <div class="row text-center">
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ad"></i>
                  <div>cif-ad</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ae"></i>
                  <div>cif-ae</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-af"></i>
                  <div>cif-af</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ag"></i>
                  <div>cif-ag</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-al"></i>
                  <div>cif-al</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-am"></i>
                  <div>cif-am</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ao"></i>
                  <div>cif-ao</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ar"></i>
                  <div>cif-ar</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-at"></i>
                  <div>cif-at</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-au"></i>
                  <div>cif-au</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-az"></i>
                  <div>cif-az</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ba"></i>
                  <div>cif-ba</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bb"></i>
                  <div>cif-bb</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bd"></i>
                  <div>cif-bd</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-be"></i>
                  <div>cif-be</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bf"></i>
                  <div>cif-bf</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bg"></i>
                  <div>cif-bg</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bh"></i>
                  <div>cif-bh</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bi"></i>
                  <div>cif-bi</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bj"></i>
                  <div>cif-bj</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bn"></i>
                  <div>cif-bn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bo"></i>
                  <div>cif-bo</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-br"></i>
                  <div>cif-br</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bs"></i>
                  <div>cif-bs</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bt"></i>
                  <div>cif-bt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bw"></i>
                  <div>cif-bw</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-by"></i>
                  <div>cif-by</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-bz"></i>
                  <div>cif-bz</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ca"></i>
                  <div>cif-ca</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cd"></i>
                  <div>cif-cd</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cf"></i>
                  <div>cif-cf</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cg"></i>
                  <div>cif-cg</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ch"></i>
                  <div>cif-ch</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ci"></i>
                  <div>cif-ci</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cl"></i>
                  <div>cif-cl</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cm"></i>
                  <div>cif-cm</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cn"></i>
                  <div>cif-cn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-co"></i>
                  <div>cif-co</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cr"></i>
                  <div>cif-cr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cu"></i>
                  <div>cif-cu</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cv"></i>
                  <div>cif-cv</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cy"></i>
                  <div>cif-cy</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-cz"></i>
                  <div>cif-cz</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-de"></i>
                  <div>cif-de</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-dj"></i>
                  <div>cif-dj</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-dk"></i>
                  <div>cif-dk</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-dm"></i>
                  <div>cif-dm</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-do"></i>
                  <div>cif-do</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-dz"></i>
                  <div>cif-dz</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ec"></i>
                  <div>cif-ec</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ee"></i>
                  <div>cif-ee</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-eg"></i>
                  <div>cif-eg</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-er"></i>
                  <div>cif-er</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-es"></i>
                  <div>cif-es</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-et"></i>
                  <div>cif-et</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-fi"></i>
                  <div>cif-fi</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-fj"></i>
                  <div>cif-fj</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-fm"></i>
                  <div>cif-fm</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-fr"></i>
                  <div>cif-fr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ga"></i>
                  <div>cif-ga</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-gb"></i>
                  <div>cif-gb</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-gd"></i>
                  <div>cif-gd</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ge"></i>
                  <div>cif-ge</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-gh"></i>
                  <div>cif-gh</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-gm"></i>
                  <div>cif-gm</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-gn"></i>
                  <div>cif-gn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-gq"></i>
                  <div>cif-gq</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-gr"></i>
                  <div>cif-gr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-gt"></i>
                  <div>cif-gt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-gw"></i>
                  <div>cif-gw</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-gy"></i>
                  <div>cif-gy</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-hk"></i>
                  <div>cif-hk</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-hn"></i>
                  <div>cif-hn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-hr"></i>
                  <div>cif-hr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ht"></i>
                  <div>cif-ht</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-hu"></i>
                  <div>cif-hu</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-id"></i>
                  <div>cif-id</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ie"></i>
                  <div>cif-ie</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-il"></i>
                  <div>cif-il</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-in"></i>
                  <div>cif-in</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-iq"></i>
                  <div>cif-iq</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ir"></i>
                  <div>cif-ir</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-is"></i>
                  <div>cif-is</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-it"></i>
                  <div>cif-it</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-jm"></i>
                  <div>cif-jm</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-jo"></i>
                  <div>cif-jo</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-jp"></i>
                  <div>cif-jp</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ke"></i>
                  <div>cif-ke</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-kg"></i>
                  <div>cif-kg</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-kh"></i>
                  <div>cif-kh</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ki"></i>
                  <div>cif-ki</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-km"></i>
                  <div>cif-km</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-kn"></i>
                  <div>cif-kn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-kp"></i>
                  <div>cif-kp</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-kr"></i>
                  <div>cif-kr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-kw"></i>
                  <div>cif-kw</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-kz"></i>
                  <div>cif-kz</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-la"></i>
                  <div>cif-la</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-lb"></i>
                  <div>cif-lb</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-lc"></i>
                  <div>cif-lc</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-li"></i>
                  <div>cif-li</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-lk"></i>
                  <div>cif-lk</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-lr"></i>
                  <div>cif-lr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ls"></i>
                  <div>cif-ls</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-lt"></i>
                  <div>cif-lt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-lu"></i>
                  <div>cif-lu</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-lv"></i>
                  <div>cif-lv</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ly"></i>
                  <div>cif-ly</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ma"></i>
                  <div>cif-ma</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mc"></i>
                  <div>cif-mc</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-md"></i>
                  <div>cif-md</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-me"></i>
                  <div>cif-me</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mg"></i>
                  <div>cif-mg</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mh"></i>
                  <div>cif-mh</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mk"></i>
                  <div>cif-mk</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ml"></i>
                  <div>cif-ml</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mm"></i>
                  <div>cif-mm</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mn"></i>
                  <div>cif-mn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mr"></i>
                  <div>cif-mr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mt"></i>
                  <div>cif-mt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mu"></i>
                  <div>cif-mu</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mv"></i>
                  <div>cif-mv</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mw"></i>
                  <div>cif-mw</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mx"></i>
                  <div>cif-mx</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-my"></i>
                  <div>cif-my</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-mz"></i>
                  <div>cif-mz</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-na"></i>
                  <div>cif-na</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ne"></i>
                  <div>cif-ne</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ng"></i>
                  <div>cif-ng</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ni"></i>
                  <div>cif-ni</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-nl"></i>
                  <div>cif-nl</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-no"></i>
                  <div>cif-no</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-np"></i>
                  <div>cif-np</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-nr"></i>
                  <div>cif-nr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-nu"></i>
                  <div>cif-nu</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-nz"></i>
                  <div>cif-nz</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-om"></i>
                  <div>cif-om</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-pa"></i>
                  <div>cif-pa</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-pe"></i>
                  <div>cif-pe</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-pg"></i>
                  <div>cif-pg</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ph"></i>
                  <div>cif-ph</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-pk"></i>
                  <div>cif-pk</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-pl"></i>
                  <div>cif-pl</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-pt"></i>
                  <div>cif-pt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-pw"></i>
                  <div>cif-pw</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-py"></i>
                  <div>cif-py</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-qa"></i>
                  <div>cif-qa</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ro"></i>
                  <div>cif-ro</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-rs"></i>
                  <div>cif-rs</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ru"></i>
                  <div>cif-ru</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-rw"></i>
                  <div>cif-rw</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sa"></i>
                  <div>cif-sa</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sb"></i>
                  <div>cif-sb</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sc"></i>
                  <div>cif-sc</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sd"></i>
                  <div>cif-sd</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-se"></i>
                  <div>cif-se</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sg"></i>
                  <div>cif-sg</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-si"></i>
                  <div>cif-si</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sk"></i>
                  <div>cif-sk</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sl"></i>
                  <div>cif-sl</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sm"></i>
                  <div>cif-sm</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sn"></i>
                  <div>cif-sn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-so"></i>
                  <div>cif-so</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sr"></i>
                  <div>cif-sr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ss"></i>
                  <div>cif-ss</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-st"></i>
                  <div>cif-st</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sv"></i>
                  <div>cif-sv</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sy"></i>
                  <div>cif-sy</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-sz"></i>
                  <div>cif-sz</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-td"></i>
                  <div>cif-td</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-tg"></i>
                  <div>cif-tg</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-th"></i>
                  <div>cif-th</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-tj"></i>
                  <div>cif-tj</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-tl"></i>
                  <div>cif-tl</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-tm"></i>
                  <div>cif-tm</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-tn"></i>
                  <div>cif-tn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-to"></i>
                  <div>cif-to</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-tr"></i>
                  <div>cif-tr</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-tt"></i>
                  <div>cif-tt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-tv"></i>
                  <div>cif-tv</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-tw"></i>
                  <div>cif-tw</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-tz"></i>
                  <div>cif-tz</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ua"></i>
                  <div>cif-ua</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ug"></i>
                  <div>cif-ug</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-us"></i>
                  <div>cif-us</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-uy"></i>
                  <div>cif-uy</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-uz"></i>
                  <div>cif-uz</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-va"></i>
                  <div>cif-va</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-vc"></i>
                  <div>cif-vc</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ve"></i>
                  <div>cif-ve</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-vn"></i>
                  <div>cif-vn</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ws"></i>
                  <div>cif-ws</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-xk"></i>
                  <div>cif-xk</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-ye"></i>
                  <div>cif-ye</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-za"></i>
                  <div>cif-za</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-zm"></i>
                  <div>cif-zm</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2"><i class="icon icon-xxl mt-5 mb-2 cif-zw"></i>
                  <div>cif-zw</div>
                </div>
              </div>
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