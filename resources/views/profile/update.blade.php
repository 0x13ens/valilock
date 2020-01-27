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
                                    <h4 class="title"> Account Setting </h4>
                                    <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                        <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                        <li><a href="#" class="text-uppercase font-weight-bold text-dark">Pages</a></li>
                                        <li><a href="#" class="text-uppercase font-weight-bold text-dark">Account</a></li>
                                        <li>
                                            <span class="text-uppercase text-primary font-weight-bold">Edit Account</span>
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

        <!-- Profile Setting Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="p-4 rounded shadow">
                            <h5 class="text-md-left text-center">Personal Detail :</h5>

                            <div class="mt-3 text-md-left text-center d-sm-flex">
                                <img src="images/client/05.jpg" class="avatar float-md-left avatar-medium rounded-pill shadow mr-md-4" alt="">

                                <div class="mt-md-4 mt-3 mt-sm-0">
                                    <a href="javascript:void(0)" class="btn btn-primary mt-2">Change Picture</a>
                                    <a href="javascript:void(0)" class="btn btn-outline-primary mt-2 ml-2">Delete</a>
                                </div>
                            </div>

                            <form>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>First Name</label>
                                            <i class="mdi mdi-account ml-3 icons"></i>
                                            <input name="name" id="first" type="text" class="form-control pl-5" placeholder="First Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Last Name</label>
                                            <i class="mdi mdi-account-plus ml-3 icons"></i>
                                            <input name="name" id="last" type="text" class="form-control pl-5" placeholder="Last Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Your Email</label>
                                            <i class="mdi mdi-email ml-3 icons"></i>
                                            <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Occupation</label>
                                            <i class="mdi mdi-fountain-pen-tip ml-3 icons"></i>
                                            <input name="name" id="occupation" type="text" class="form-control pl-5" placeholder="Occupation :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Description</label>
                                            <i class="mdi mdi-comment-text-outline ml-3 icons"></i>
                                            <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Description :"></textarea>
                                        </div>
                                    </div>
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="btn btn-primary" value="Save Changes">
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->


                            <div class="row">
                                <div class="col-md-6 mt-4 pt-2">
                                    <h5>Contact Info :</h5>

                                    <form>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Phone No. :</label>
                                                    <i class="mdi mdi-phone ml-3 icons"></i>
                                                    <input name="number" id="number" type="number" class="form-control pl-5" placeholder="Phone :">
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Website :</label>
                                                    <i class="mdi mdi-earth ml-3 icons"></i>
                                                    <input name="url" id="url" type="url" class="form-control pl-5" placeholder="Url :">
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12 mt-2 mb-0">
                                                <button class="btn btn-primary">Add</button>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div><!--end col-->

                                <div class="col-md-6 mt-4 pt-2">
                                    <h5>Change password :</h5>
                                    <form>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Old password :</label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Old password" required="">
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>New password :</label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="New password" required="">
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>Re-type New password :</label>
                                                    <i class="mdi mdi-key ml-3 icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Re-type New password" required="">
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-12 mt-2 mb-0">
                                                <button class="btn btn-primary">Save password</button>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Profile Setting End -->
@endsection
