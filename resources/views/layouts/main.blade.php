<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dynamic Authentication Processing for internet businesses - Valilock  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Valilock" />
        <meta name="keywords" content="Valilock" />
        <meta content="Valilock" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Slider -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}"/>
        <!-- Main css -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

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

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="/">Valilock<span class="text-primary">.</span></a>
                </div>
                <div class="buy-button">
                    @if (Auth::check())
                    <a href="/profile" class="btn btn-primary">Profile</a>
                    @else
                    <a href="/register" class="btn btn-primary">Sign In</a>
                    @endif
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Plugins</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="/plugins/wordpress">Wordpress <span class="badge badge-danger rounded"> v1.0 </span></a></li>
                                <li><a href="/plugins/shopify">Shopify <span class="badge badge-danger rounded"> v1.0 </span></a></li>
                                <li><a href="/plugins/prestashop">Prestashop <span class="badge badge-danger rounded"> v1.0 </span></a></li>
                                <li><a href="/plugins/phpbb3">PhpBB3 <span class="badge badge-danger rounded"> v1.0 </span></a></li>
                                <li><a href="/plugins/mybb">Mybb <span class="badge badge-success rounded"> Added </span></a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">Developers</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a>Get Started </a></li>
                                        <li><a href="/docs">Documentation</a></li>
                                        <li><a href="index-agency.html">Prebuilt Plugins</a></li>
                                        <li><a href="index-apps.html">Libaries and SDK</a></li>
                                        <li><a href="index-studio.html">Code Samples</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a>Guides </a></li>
                                        <li><a href="index-personal.html">Connecting </a></li>
                                        <li><a href="index-single-product.html">Manage Users </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0)">Company</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="/about"> About Valilock</a></li>
                                <li><a href="page-services.html">Customers</a></li>
                                <li><a href="page-pricing.html">Partners</a></li>
                                <li><a href="page-team.html"> Jobs</a></li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Account <span class="badge badge-danger rounded"> v1.6 </span></a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-profile.html">Profile <span class="badge badge-primary rounded">New</span></a></li>
                                        <li><a href="page-profile-edit.html">Account Setting <span class="badge badge-primary rounded">New</span></a></li>
                                        <li><a href="page-invoice.html">Invoice <span class="badge badge-primary rounded">New</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Careers <span class="badge badge-success rounded"> Added </span></a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-jobs.html">Jobs</a></li>
                                        <li><a href="page-job-detail.html">Job Detail</a></li>
                                        <li><a href="page-job-apply.html">Job Apply</a></li>
                                        <li><a href="page-job-company.html">Company <span class="badge badge-success rounded"> New </span></a></li>
                                        <li><a href="page-job-candidate.html">Candidate <span class="badge badge-success rounded"> New </span></a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="/posts/latest">Latest Post</a></li>
                                        <li><a href="/posts">All Post</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="/pricing">Pricing</a></li>
                        <li><a href="index.html">Support</a></li>
                    </ul><!--end navigation menu-->
                    <div class="buy-menu-btn d-none">
                        <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Sign In</a>
                    </div><!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a class="logo-footer" href="#">Valilock<span class="text-primary">.</span></a>
                        <p class="mt-4">Start working with Valilock that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        <ul class="list-unstyled social-icon social mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->

                    <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h4 class="text-light footer-head">Company</h4>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="/about" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> About us</a></li>
                            <li><a href="/pricing" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                            <li><a href="/jobs" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Careers</a></li>
                            <li><a href="/blog" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                            <li><a href="/login" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Login</a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h4 class="text-light footer-head">Usefull Links</h4>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="/terms" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms of Services</a></li>
                            <li><a href="/policy" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                            <li><a href="/docs" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a></li>
                            <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Changelog</a></li>
                            <li><a href="/status" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> API Status</a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h4 class="text-light footer-head">Newsletter</h4>
                        <p class="mt-4">Sign up and receive the latest tips via email.</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="foot-subscribe form-group position-relative">
                                        <label>Write your email <span class="text-danger">*</span></label>
                                        <i class="mdi mdi-email ml-3 icons"></i>
                                        <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Your email : " required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary w-100" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <hr>
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2019-{{ now()->year }} Valilock.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled payment-cards text-sm-right mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" title="American Express" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/discover.png" title="Discover" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/master-card.png" title="Master Card" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png" title="Paypal" alt=""></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png" title="Visa" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top">
            <i class="mdi mdi-chevron-up d-block"> </i>
        </a>
        <!-- Back to top -->

        <!-- javascript -->

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset("js/jquery.easing.min.js") }}"></script>
        <script src="{{ asset("js/scrollspy.min.js") }}"></script>
        <!-- SLIDER -->
        <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
        <script src="{{ asset("js/owl.init.js") }}"></script>
        <!-- Main Js -->
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>
