@extends('layouts::blank')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title">{{__('Step 2: Database Information')}}</h3>
                        <p>{{__('Enter your database information.')}}</p>
                        <hr>
                        <div class="my-2">
                            @include('layouts::components.admin.alerts')
                            <div id="installLoading" style="display: none">>
                              <div class="d-flex flex-column justify-content-center text-center">
                                  <h2><i class="fa fa-spinner fa-spin text-info" aria-hidden="true"></i></h2>
                                  <h3>Installing...</h3>
                              </div>
                            </div>
                            <form method="POST" action="{{route('install.second')}}" id="secondForm">
                                @csrf
                                <div class="form-group">
                                  <label for="">{{__('Hostname:')}}</label>
                                  <input type="text" name="hostname" id="" class="form-control" value="localhost" required>
                                </div>
                                <div class="form-group">
                                  <label for="">{{__('Port:')}}</label>
                                  <input type="text" name="port" id="" class="form-control" value="3306" required>
                                </div>
                                <div class="form-group">
                                  <label for="">{{__('Database:')}}</label>
                                  <input type="text" name="database" id="" class="form-control" value="bkcms" required>
                                </div>
                                <div class="form-group">
                                  <label for="">{{__('MySQL Username:')}}</label>
                                  <input type="text" name="username" id="" class="form-control" value="root" required>
                                </div>
                                <div class="form-group">
                                  <label for="">{{__('MySQL Password:')}}</label>
                                  <input type="password" name="password" id="" class="form-control" value="">
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">{{__('Continue')}}</button>
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
      $(document).on('submit', '#secondForm', function(e) {
          $('#installLoading').show()
          $('#secondForm').hide()
      })
    </script>
@endpush