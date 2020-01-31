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
                                    <h4 class="title"> Test </h4>
                                    <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                        <li><a href="javascript:void(0)" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                        <li><a href="javascript:void(0)" class="text-uppercase font-weight-bold text-dark">Test</a></li>
                                        <li>
                                            <span class="text-uppercase text-primary font-weight-bold">Code</span>
                                        </li>
                                        <li><a href="/code/create" class="text-uppercase font-weight-bold text-dark">Create</a></li>
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

        <!-- Start -->
        <section class="section">
            <div class="container">
                    <div class="col">
                        <div class="row row-cols-1">

                            <!-- Table Start -->
                            <div class="col-lg-12">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Table </h4>
                                    </div>

                                    <div class="p-4">
                                        <div class="table-responsive bg-white shadow rounded">
                                            <table class="table mb-0 table-center">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Orginal</th>
                                                    <th scope="col">Start</th>
                                                    <th scope="col">TAG</th>
                                                    <th scope="col">End</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($codes as $code)
                                                    <tr>
                                                    <th scope="row">{{ $code->id }}</th>
                                                    <td>{{ $code->password }}</td>
                                                        <td>{{ $code->passwordstart }}</td>
                                                        <td>{{ $code->dynamic }}</td>
                                                        <td>{{ $code->passwordend }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Table End -->
                        </div><!--end row-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
@endsection
