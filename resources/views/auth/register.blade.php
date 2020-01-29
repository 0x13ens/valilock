<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Register - Valilock</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
        <meta content="Shreethemes" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Main css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->

        <div class="back-to-home rounded d-none d-sm-block">
            <a href="/" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="bg-home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-6">
                                <div class="mr-lg-5">
                                    <img src="images/user/signup.png" class="img-fluid d-block mx-auto" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Signup</h4>
                                    </div>

                                    <form class="login-form" method="POST" action="{{ route('register') }}">
                                            @csrf

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label for="name">{{ __('Name') }}<span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input id="name" type="text" class="form-control pl-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="John Dow" required autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label for="email"> {{ __('E-Mail Address') }} <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input id="email" type="email" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label for="password"> {{ __('Password') }} <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input id="password" type="password" class="form-control pl-5 @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label for="valilock"> Valilock. <span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-account ml-3 icons"></i>
                                                    <input id="valilock" type="valilock" class="form-control pl-5 @error('valilock') is-invalid @enderror" name="valilock" value="{{ old('valilock') }}" placeholder="Valilock." required autocomplete="valilock">

                                                        @error('valilock')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label for="password-confirm">{{ __('Confirm Password') }}<span class="text-danger">*</span></label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input id="password-confirm" type="password" class="form-control pl-5" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary w-100">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                            <div class="col-lg-12 mt-4 text-center">
                                                <h6>Or Signup With</h6>
                                                <ul class="list-unstyled social-icon mb-0 mt-3">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-github-circle" title="Github"></i></a></li>
                                                </ul><!--end icon-->
                                            </div>
                                            <div class="mx-auto">
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="{{ __('login') }}" class="text-dark font-weight-bold">Sign in</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

        <!-- javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>
</html>

