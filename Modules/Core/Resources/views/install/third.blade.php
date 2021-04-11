@extends('layouts::blank')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title">{{__('Step 3: Create Administrator Account.')}}</h3>
                        <p>Enter your Administrator account to Login to Control Panel.</p>
                        <hr>
                        <div class="my-2">
                            @include('layouts::components.admin.alerts')
                            <div id="installLoading" style="display: none">
                              <div class="d-flex flex-column justify-content-center text-center">
                                  <h2><i class="fa fa-spinner fa-spin text-info" aria-hidden="true"></i></h2>
                                  <h3>Installing...</h3>
                              </div>
                            </div>                            
                            <form method="POST" action="{{route('install.third')}}" id="thirdForm">
                                @csrf
                                <div class="form-group">
                                  <label for="">{{__('Full Name:')}}</label>
                                  <input type="text" name="name" id="" class="form-control" placeholder="John Doe" required>
                                </div>                                
                                <div class="form-group">
                                  <label for="">{{__('Email:')}}</label>
                                  <input type="text" name="email" id="" class="form-control" placeholder="admin@example.com" required>
                                </div>
                                <div class="form-group">
                                  <label for="">{{__('Password:')}}</label>
                                  <input type="password" name="password" id="" class="form-control" placeholder="******" required>
                                </div>
                                <div class="form-group">
                                  <label for="">{{__('Confirm Password:')}}</label>
                                  <input type="password" name="password_confirmation" id="" class="form-control" placeholder="******" required>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">{{__('Finish')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
      $(document).on('submit', '#thirdForm', function(e) {
          $('#installLoading').show()
          $('#thirdForm').hide()
      })
    </script>
@endpush