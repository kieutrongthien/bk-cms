@extends('layouts::admin')

@section('content')
@include('layouts::components.admin.alerts')
<div class="row">
    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
        <div class="card text-left">
            <div class="card-header">
                <h5>{{__('Appearance Settings')}}</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('appearance.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">{{__('Default Home Page')}}:</label>
                        <select name="default_page" class="form-control" required>
                            @foreach(getPages() as $page)
                                <option value="{{$page->slug}}" {{$page->slug == appearance('default_page') ? 'selected=selected' : ''}}>{{$page->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Theme')}}:</label>
                        <select name="default_theme" class="form-control" required>
                            @foreach(themes() as $theme)
                                <option value="{{$theme->lower_name}}" {{$theme->lower_name == appearance('default_theme') ? 'selected=selected' : ''}}>{{$theme->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group d-flex flex-column">
                      <label for="">{{__('Primary Color')}}:</label>
                      <input type="text" name="main_color" value="{{appearance('main_color')}}" class="form-control colorpicker">
                    </div>
                    <div class="form-group d-flex flex-column">
                      <label for="">{{__('Secondary Color')}}:</label>
                      <input type="text" name="secondary_color" value="{{appearance('secondary_color')}}" class="form-control colorpicker">
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">{{__('Save Changes')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection