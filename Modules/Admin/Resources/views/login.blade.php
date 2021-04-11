@extends('layouts::blank')

@section('content')
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{asset('themes/admin/assets/images/logo-dark.png')}}" alt="" width="120" class="img-fluid mb-4">
                        <h4 class="my-3 f-w-400">{{ __('Login into your account') }}</h4>
                        @include('layouts::components.admin.alerts')
                        <form method="post" action="{{route('admin.login.post')}}">
                            @csrf
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-mail"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="{{__('Email Address')}}" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="{{__('Password')}}" required>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary mb-4">{{__('Login')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->
@endsection