@if ($errors->any())
    <div class="alert alert-danger text-left">
        <span class="font-weight-bold"><i class="fa fa-info-circle"></i> {{$errors->first()}}</span>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success text-left">
        <span class="font-weight-bold"><i class="fa fa-check-circle"></i> {{session('success')}}</span>
    </div>
@endif