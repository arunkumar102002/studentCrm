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
    <link rel="canonical" href="https://coreui.io/docs/forms/form-control/">
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
              <li class="breadcrumb-item"><span>Forms</span>
              </li>
              <li class="breadcrumb-item active"><span>Form Control</span>
              </li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form control</strong><span class="small ms-1">Basic example</span></div>
                <div class="card-body">
                  <div class="example">
                    <ul class="nav nav-underline-border" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1000" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Email address</label>
                          <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form control</strong><span class="small ms-1">Sizing</span></div>
                <div class="card-body">
                  <p class="text-body-secondary small">Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                  <div class="example">
                    <ul class="nav nav-underline-border" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1001" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#sizing" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1001">
                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form control</strong><span class="small ms-1">Disabled</span></div>
                <div class="card-body">
                  <p class="text-body-secondary small">Add the <code>disabled</code> boolean attribute on an input to give it a grayed out appearance and remove pointer events.</p>
                  <div class="example">
                    <ul class="nav nav-underline-border" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1002" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#disabled" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002">
                        <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
                        <input class="form-control" type="text" placeholder="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form control</strong><span class="small ms-1">Readonly</span></div>
                <div class="card-body">
                  <p class="text-body-secondary small">Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input’s value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.</p>
                  <div class="example">
                    <ul class="nav nav-underline-border" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1003" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#readonly" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1003">
                        <input class="form-control" type="text" placeholder="Readonly input here..." aria-label="readonly input example" readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form control</strong><span class="small ms-1">Readonly plain text</span></div>
                <div class="card-body">
                  <p class="text-body-secondary small">If you want to have <code>&lt;input readonly&gt;</code> elements in your form styled as plain text, use the <code>.form-control-plaintext</code> class to remove the default form field styling and preserve the correct margin and padding.</p>
                  <div class="example">
                    <ul class="nav nav-underline-border" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1004" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#readonly-plain-text" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1004">
                        <div class="mb-3 row">
                          <label class="col-sm-2 col-form-label" for="staticEmail">Email</label>
                          <div class="col-sm-10">
                            <input class="form-control-plaintext" id="staticEmail" type="text" readonly value="email@example.com">
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label class="col-sm-2 col-form-label" for="inputPassword">Password</label>
                          <div class="col-sm-10">
                            <input class="form-control" id="inputPassword" type="password">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="example">
                    <ul class="nav nav-underline-border" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1005" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#readonly-plain-text" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1005">
                        <form class="row g-3">
                          <div class="col-auto">
                            <label class="visually-hidden" for="staticEmail2">Email</label>
                            <input class="form-control-plaintext" id="staticEmail2" type="text" readonly value="email@example.com">
                          </div>
                          <div class="col-auto">
                            <label class="visually-hidden" for="inputPassword2">Password</label>
                            <input class="form-control" id="inputPassword2" type="password" placeholder="Password">
                          </div>
                          <div class="col-auto"></div>
                        </form>
                        <button class="btn btn-primary mb-3" type="submit">Confirm identity</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form control</strong><span class="small ms-1">File input</span></div>
                <div class="card-body">
                  <div class="example">
                    <ul class="nav nav-underline-border" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1006" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#file-input" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1006">
                        <div class="mb-3">
                          <label class="form-label" for="formFile">Default file input example</label>
                          <input class="form-control" id="formFile" type="file">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="formFileMultiple">Multiple files input example</label>
                          <input class="form-control" id="formFileMultiple" type="file" multiple>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="formFileDisabled">Disabled file input example</label>
                          <input class="form-control" id="formFileDisabled" type="file" disabled>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="formFileSm">Small file input example</label>
                          <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <div>
                          <label class="form-label" for="formFileLg">Large file input example</label>
                          <input class="form-control form-control-lg" id="formFileLg" type="file">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form control</strong><span class="small ms-1">Color</span></div>
                <div class="card-body">
                  <div class="example">
                    <ul class="nav nav-underline-border" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1007" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#color" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1007">
                        <label class="form-label" for="exampleColorInput">Color picker</label>
                        <input class="form-control form-control-color" id="exampleColorInput" type="color" value="#563d7c" title="Choose your color">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Form control</strong><span class="small ms-1">Datalists</span></div>
                <div class="card-body">
                  <p class="text-body-secondary small">Datalists allow you to create a group of <code>&lt;option&gt;</code>s that can be accessed (and autocompleted) from within an <code>&lt;input&gt;</code>. These are similar to <code>&lt;select&gt;</code> elements, but come with more menu styling limitations and differences. While most browsers and operating systems include some support for <code>&lt;datalist&gt;</code> elements, their styling is inconsistent at best.</p>
                  <p class="text-body-secondary small">Learn more about <a href="https://caniuse.com/datalist">support for datalist elements</a>.</p>
                  <div class="example">
                    <ul class="nav nav-underline-border" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1008" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/forms/form-control/#datalists" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1008">
                        <label class="form-label" for="exampleDataList">Datalist example</label>
                        <input class="form-control" id="exampleDataList" list="datalistOptions" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                          <option value="San Francisco"></option>
                          <option value="New York"></option>
                          <option value="Seattle"></option>
                          <option value="Los Angeles"></option>
                          <option value="Chicago"></option>
                        </datalist>
                      </div>
                    </div>
                  </div>
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