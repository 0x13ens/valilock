
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landrick - Saas & Software Landing Page Template</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Slider -->
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
    <!-- Main css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

    <!-- Hero Start -->
    <section class="bg-half bg-light">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="title"> Documentation </h4>
                                <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                    <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                    <li><a href="#" class="text-uppercase font-weight-bold text-dark">Docs</a></li>
                                    <li>
                                        <span class="text-uppercase text-primary font-weight-bold">Documentation</span>
                                    </li>
                                </ul>
                            </div>
                        </div>  <!--end col-->
                    </div><!--end row-->
                </div> <!--end container-->
            </div>
        </div>
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Documentation Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h1>
                        @if(strpos($a, '{date}') !== false) {
                            {{ $a }}
                        }</h1>
                        @endif




                    <p class="text-muted h5 font-weight-normal">Get Start With <span class="text-primary font-weight-bold">Landrick.</span> Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>

                    <h3 class="mt-4 pt-2">Quick start</h3>
                    <p class="text-muted">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect. <a href="https://getbootstrap.com/docs/4.4/getting-started/download/" target="_blank" class="text-primary h6">Head to the downloads page.</a></p>

                    <h4 class="mt-4 pt-2">CSS</h4>
                    <p class="text-muted">Copy-paste the stylesheet <code class="text-danger font-weight-bold">&lt;link&gt;</code> into your <code class="text-danger font-weight-bold">&lt;head&gt;</code> before all other stylesheets to load Bootstrap CSS.</p>

                    <code class="text-success rounded p-2 bg-dark font-weight-bold">&lt;link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /&gt;</code>

                    <h4 class="mt-4 pt-2">JS</h4>
                    <p class="text-muted">Many of our components require the use of JavaScript to function. Specifically, they require <a href="https://jquery.com/" target="_blank" class="text-primary h6">jQuery</a> and our own JavaScript plugins. Place the following <code class="text-danger font-weight-bold">&lt;script&gt;</code> near the end of your pages, right before the closing <code class="text-danger font-weight-bold">&lt;/body&gt;</code> tag, to enable them. jQuery must come first, then bootstrap.bundle.min.js, and then our JavaScript plugins.</p>

                    <h6 class="mt-3"><code class="text-success rounded p-2 bg-dark font-weight-bold">&lt;script src="js/jquery.min.js"&gt;&lt;/script&gt;</code></h6>
                    <h6 class="mt-3"><code class="text-success rounded p-2 bg-dark font-weight-bold">&lt;script src="js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;</code></h6>


                    <h4 class="mt-4 pt-2">Starter Template</h4>
                    <p class="text-muted">Be sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. Put it all together and your pages should look like this:</p>

                    <h5 class="h6 mt-4"><i class="mdi mdi-chevron-right"></i> HTML : </h5>
                    <pre class="code mb-0 mt-4 font-weight-bold p-4 bg-light rounded shadow text-muted">
<span class="text-primary">&lt;!doctype html&gt;</span>
<span class="text-warning">&lt;html lang="en"&gt;</span>
<span class="text-danger">&lt;head&gt;</span>

    <span class="text-danger">&lt;meta charset="utf-8" /&gt;</span>
    <span class="text-danger">&lt;title&gt;</span><span class="text-primary"> Landrick - Saas & Software Landing Page Template </span><span class="text-danger">&lt;/title&gt;</span>
    <span class="text-danger">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0" /&gt;</span>
    <span class="text-danger">&lt;meta name="description" content="Site description" /&gt;</span>
    <span class="text-danger">&lt;meta name="keywords" content="Your tags" /&gt;</span>

    <span class="text-muted">&lt;!-- favicon icon --&gt;</span>
    <span class="text-info">&lt;link rel="shortcut icon" href="images/favicon.ico"&gt;</span>

    <span class="text-muted">&lt;!-- Bootstrap --&gt;</span>
    <span class="text-info">&lt;link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /&gt;</span>

    <span class="text-muted">&lt;!-- Main css --&gt;</span>
    <span class="text-info">&lt;link href="css/style.css" rel="stylesheet" type="text/css" /&gt;</span>

<span class="text-danger">&lt;/head&gt;</span>

<span class="text-danger">&lt;body&gt;</span>

    <span class="text-muted">&lt;!-- Loader Start --&gt;</span>
    <span class="text-danger">&lt;div id="#--------"&gt;</span>
        --------
        --------
    <span class="text-danger">&lt;/div&gt;</span>
    <span class="text-muted">&lt;!-- Loader End --&gt;</span>

    <span class="text-muted">&lt;!-- Navbar Start --&gt;</span>
    <span class="text-danger">&lt;header&gt;</span>
        <span class="text-danger">&lt;div class="--------"&gt;</span>
            --------
            --------
            --------
            --------
        <span class="text-danger">&lt;/div&gt;</span>
    <span class="text-danger">&lt;/header&gt;</span>
    <span class="text-muted">&lt;!-- Navbar End --&gt;</span>

    <span class="text-muted">&lt;!-- Hero Start --&gt;</span>
    <span class="text-danger">&lt;section class="--------"&gt;</span>
        <span class="text-danger">&lt;div class="--------"&gt;</span>
            --------
            --------
            --------
            --------
        <span class="text-danger">&lt;/div&gt;</span>
    <span class="text-danger">&lt;/section&gt;</span>
    <span class="text-muted">&lt;!-- Hero End --&gt;</span>

    <span class="text-muted">&lt;!-- Footer Start --&gt;</span>
    <span class="text-danger">&lt;footer&gt;</span>
        <span class="text-danger">&lt;div class="--------"&gt;</span>
            --------
            --------
            --------
            --------
        <span class="text-danger">&lt;/div&gt;</span>
    <span class="text-danger">&lt;/footer&gt;</span>
    <span class="text-muted">&lt;!-- Footer End --&gt;</span>

    <span class="text-muted">&lt;!-- Back To Home Start --&gt;</span>
    <span class="text-danger">&lt;a href="#" class="--------" id="#--------"&gt;</span>
        --------
        --------
    <span class="text-danger">&lt;/a&gt;</span>
    <span class="text-muted">&lt;!-- Back To Home End --&gt;</span>

    <span class="text-muted">&lt;!-- Javascript Start --&gt;</span>
    <span class="text-info">&lt;script src="js/jquery.min.js"&gt;&lt;/script&gt;</span>
    <span class="text-info">&lt;script src="js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;</span>
    --------
    --------
    --------
    <span class="text-info">&lt;script src="js/app.js"&gt;&lt;/script&gt;</span>
    <span class="text-muted">&lt;!-- Javascript End --&gt;</span>
<span class="text-danger">&lt;/body&gt;</span>
<span class="text-warning">&lt;/html&gt;</span>
                    </pre><!--end pre code-->

                    <h5 class="h6 mt-4"><i class="mdi mdi-chevron-right"></i> RTL Version : </h5>
                    <div class="mt-4 p-4 bg-light rounded shadow">
                        <p class="mb-0 text-muted">In order to have RTL mode enabled, replace the reference of <code class="font-weight-bold">style.css</code> to <code class="font-weight-bold">style-rtl.css</code></p>
                    </div><!--end RTL-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--en d section-->
    <!-- Documentation End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a class="logo-footer" href="#">Landrick<span class="text-primary">.</span></a>
                    <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                    </ul><!--end icon-->
                </div><!--end col-->

                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Company</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="page-aboutus.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> About us</a></li>
                        <li><a href="page-services.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Services</a></li>
                        <li><a href="page-team.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Team</a></li>
                        <li><a href="page-pricing.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                        <li><a href="page-work.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Project</a></li>
                        <li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Careers</a></li>
                        <li><a href="page-blog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                        <li><a href="page-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Login</a></li>
                    </ul>
                </div><!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Usefull Links</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="page-terms.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms of Services</a></li>
                        <li><a href="page-privacy.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                        <li><a href="documentation.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a></li>
                        <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Changelog</a></li>
                        <li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Components</a></li>
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
                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary rounded w-100" value="Subscribe">
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
                        <p class="mb-0">© 2019-20 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://www.shreethemes.in/" target="_blank" class="text-success">Shreethemes</a>.</p>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <!-- SLIDER -->
    <script src="js/owl.carousel.min.js "></script>
    <script src="js/owl.init.js "></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>
</html>
