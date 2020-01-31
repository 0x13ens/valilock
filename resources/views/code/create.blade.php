@extends('layouts.main')

@section('content')
<section class="section">
    <div class="container">
<div class="col-lg-12">
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
            </div>
        </form>
    </div><!---->
</div> <!--end col-->
    </div>
</div>
@endsection
