@extends('layouts.main')

@section('content')

        <!-- Description Start -->
        <section class="section">
            <div class="container">

                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Status</h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-camera-outline text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">CDN</h4>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-12 p-3">
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-wifi text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Conversions</h4>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-12">
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-cryengine text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">Site delivery</h4>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-12 p-3">
                        <div class="key-feature d-flex p-3 bg-white rounded shadow">
                            <div class="icon text-center rounded-pill mr-3">
                                <i class="mdi mdi-cryengine text-primary"></i>
                            </div>
                            <div class="content mt-2">
                                <h4 class="title mb-0">API</h4>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

        </section><!--end section-->
        <!-- Description End -->

        <div class="container mt-10">
            <h4 class="title mb-20 faq-question"> Latest Incidents </h4>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="faq-content mr-lg-5">
                        <div class="accordion" id="accordionExample">
                            <div class="card border rounded shadow mb-2">
                                <a data-toggle="collapse" href="#collapseOne" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header bg-light p-3" id="headingOne">
                                        <h4 class="title mb-0 faq-question"> How our Landrick work ? </h4>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div><!--end card-->

                            <div class="card border rounded shadow mb-2">
                                <a data-toggle="collapse" href="#collapseTwo" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header bg-light p-3" id="headingTwo">
                                        <h4 class="title mb-0 faq-question"> How to make unlimited data entry ? </h4>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div><!--end card-->

                            <div class="card border rounded shadow mb-2">
                                <a data-toggle="collapse" href="#collapsethree" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsethree">
                                    <div class="card-header bg-light p-3" id="headingthree">
                                        <h4 class="title mb-0 faq-question"> What is the main process open account ? </h4>
                                    </div>
                                </a>
                                <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which believable.</p>
                                    </div>
                                </div>
                            </div><!--end card-->

                            <div class="card rounded shadow mb-0">
                                <a data-toggle="collapse" href="#collapsefive" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsefive">
                                    <div class="card-header bg-light p-3" id="headingfive">
                                        <h4 class="title mb-0 faq-question"> Is Landrick safer to use with my account ? </h4>
                                    </div>
                                </a>
                                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text-muted mb-0 faq-ans">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    </div>
                                </div>
                            </div><!--end card-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
@endsection
