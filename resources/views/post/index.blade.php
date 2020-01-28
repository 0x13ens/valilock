@extends('layouts.main')

@section('content')

        <!-- Hero Start -->
        <section class="bg-half bg-light">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="page-next-level">
                                    <h4 class="title"> Blog </h4>
                                    <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                        <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                        <li><a href="#" class="text-uppercase font-weight-bold text-dark">Pages</a></li>
                                        <li><a href="#" class="text-uppercase font-weight-bold text-dark">Blog</a></li>
                                        <li>
                                            <span class="text-uppercase text-primary font-weight-bold">Blog Grid</span>
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

        <!-- Blog STart -->
        <section class="section">
            <div class="container">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="position-relative">
                                <img src="images/blog/01.jpg" class="img-fluid rounded-top" alt="">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="content p-4">
                            <h4><a href="javascript:void(0)" class="title text-dark">{{ $post->title }}</a></h4>
                                <div class="post-meta mt-3">
                                    <a href="javascript:void(0)" class="text-muted float-right readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div><!--end col-->
                    @endforeach
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="position-relative">
                                <img src="images/blog/02.jpg" class="img-fluid rounded-top" alt="">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="content p-4">
                                <h4><a href="javascript:void(0)" class="title text-dark">How apps is changing the IT world</a></h4>
                                <div class="post-meta mt-3">
                                    <a href="javascript:void(0)" class="text-muted float-right readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="position-relative">
                                <img src="images/blog/03.jpg" class="img-fluid rounded-top" alt="">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="content p-4">
                                <h4><a href="javascript:void(0)" class="title text-dark">Smartest Applications for Business</a></h4>
                                <div class="post-meta mt-3">
                                    <a href="javascript:void(0)" class="text-muted float-right readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="position-relative">
                                <img src="images/blog/04.jpg" class="img-fluid rounded-top" alt="">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="content p-4">
                                <h4><a href="javascript:void(0)" class="title text-dark">Design your apps in your own way</a></h4>
                                <div class="post-meta mt-3">
                                    <a href="javascript:void(0)" class="text-muted float-right readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="position-relative">
                                <img src="images/blog/05.jpg" class="img-fluid rounded-top" alt="">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="content p-4">
                                <h4><a href="javascript:void(0)" class="title text-dark">How apps is changing the IT world</a></h4>
                                <div class="post-meta mt-3">
                                    <a href="javascript:void(0)" class="text-muted float-right readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="position-relative">
                                <img src="images/blog/06.jpg" class="img-fluid rounded-top" alt="">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="content p-4">
                                <h4><a href="javascript:void(0)" class="title text-dark">Smartest Applications for Business</a></h4>
                                <div class="post-meta mt-3">
                                    <a href="javascript:void(0)" class="text-muted float-right readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="position-relative">
                                <img src="images/blog/07.jpg" class="img-fluid rounded-top" alt="">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="content p-4">
                                <h4><a href="javascript:void(0)" class="title text-dark">Design your apps in your own way</a></h4>
                                <div class="post-meta mt-3">
                                    <a href="javascript:void(0)" class="text-muted float-right readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog position-relative overflow-hidden shadow rounded">
                            <div class="position-relative">
                                <img src="images/blog/08.jpg" class="img-fluid rounded-top" alt="">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="content p-4">
                                <h4><a href="javascript:void(0)" class="title text-dark">How apps is changing the IT world</a></h4>
                                <div class="post-meta mt-3">
                                    <a href="javascript:void(0)" class="text-muted float-right readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <!-- PAGINATION START -->
                    <div class="col-12">
                        <ul class="pagination justify-content-center mb-0 list-unstyled">
                            <li><a href="#" class="pr-3 pl-3 pt-2 pb-2">Prev</a></li>
                            <li class="active"><a href="#" class="pr-3 pl-3 pt-2 pb-2">1</a></li>
                            <li><a href="#" class="pr-3 pl-3 pt-2 pb-2">2</a></li>
                            <li><a href="#" class="pr-3 pl-3 pt-2 pb-2">3</a></li>
                            <li><a href="#" class="pr-3 pl-3 pt-2 pb-2">Next</a></li>
                        </ul><!--end pagination-->
                    </div><!--end col-->
                    <!-- PAGINATION END -->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->

@endsection
