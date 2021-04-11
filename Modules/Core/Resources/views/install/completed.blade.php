@extends('layouts::blank')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title">{{__('Step 4: Completed')}}</h3>
                        <p>{{__('Your installation has been completed. Now you can login to Admin Dashboard.')}}</p>
                        <hr>
                        <div class="my-2">
                            @include('layouts::components.admin.alerts')
                            <a href="{{route('admin.login')}}" class="btn btn-block btn-success">{{__('Login to Dashboard')}}</a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@endsection