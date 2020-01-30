@extends('layouts.main')

@section('content')
<div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
    <div class="login-page bg-white shadow rounded p-4">
        <div class="text-center">
            <h4 class="mb-4">Testing</h4>
        </div>
        <form method="POST" action="{{ route('code.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group position-relative">
                        <label for="password">{{ __('Password') }}<span class="text-danger">*</span></label>
                        <i class="mdi mdi-key ml-3 icons"></i>
                        <input id="password" type="password" class="form-control pl-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>
                <div class="col-lg-12 mb-0">
                    <button type="submit" class="btn btn-primary w-100">
                        Submit
                    </button>
                </div>
                <div class="col-12 text-center">
                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="{{ __('register') }}" class="text-dark font-weight-bold">Sign Up</a></p>
                </div>
            </div>
        </form>
    </div><!---->
</div> <!--end col-->
@endsection
