<!DOCTYPE html>

<html lang="en">
  <head>
      <base href="./">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
      <meta name="author" content="Łukasz Holeczek">
      <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
      <title> Admin Template</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      


      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.css" />
      <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>

      <link rel="manifest" href="image/favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="{{asset('image/favicon/ms-icon-144x144.png')}}">
      <meta name="theme-color" content="#ffffff">
      <!-- Vendors styles-->
      <link rel="stylesheet" href="node_modules/simplebar/dist/simplebar.css">
      <link rel="stylesheet" href="{{asset('css/simplebar.css')}}">
      <!-- Main styles for this application-->
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
      <!-- We use those styles to show code examples, you should remove them in your application.-->
      <link href="{{asset('css/examples.css')}}" rel="stylesheet">
      <script src="{{asset('js/config.js')}}"></script>
      <script src="{{asset('js/color-modes.js')}}"></script>
      <link href="{{asset('node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css')}}" rel="stylesheet">
    
    
  </head>
  
<body>
    <div class="bg-body-tertiary min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                <h1>Login</h1>
                                <p class="text-body-secondary">Sign In to your account</p>
                                <!-- Updated form element -->
                                <form method="POST" action="{{ route('user.login') }}"> 
                                    @csrf

                                    <div class="input-group mb-3">
                                        <span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                                            </svg>
                                        </span>
                                        <input  class="form-control" type="email" name="email" required autofocus autocomplete="username" />
                                    </div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group mb-4">
                                        <span class="input-group-text">
                                            <svg class="icon">
                                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                                            </svg>
                                        </span>
                                        <input class="form-control" type="password" placeholder="Password" name="password" required>
                                        
                                    </div>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">Login</button>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a class="btn btn-link px-0" href="#">Forgot password?</a>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                        <div class="card col-md-5 text-white bg-primary py-5">
                            <div class="card-body text-center">
                                <div>
                                    <h2>Sign up</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a class="btn btn-lg btn-outline-light mt-3" href="#">Register Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</body>
</html>
