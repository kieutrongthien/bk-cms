@extends('layouts::admin')

@section('content')
@include('layouts::components.admin.alerts')
<form method="post" action="{{route('pages.update', ['page' => $page->id])}}">
    @csrf
    <input type="hidden" name="_method" value="put" />
    <div class="row">
        <div class="col-12 col-lg-9 col-md-9 col-sm-9">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('Edit Page')}}: {{$page->name}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                      <label for="">{{__('Name')}}:</label>
                      <input type="text" name="name" class="form-control" value="{{$page->name}}">
                    </div>
                    <div class="form-group">
                      <label for="">{{__('Slug')}}:</label>
                      <input type="text" name="slug" class="form-control" value="{{$page->slug}}">
                    </div>
                    <div class="form-group">
                      <label for="">{{__('Content')}}:</label>
                      <textarea name="content" id="page_editor" class="form-control" style="min-height: 500px">{{$page->content}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">{{__('Meta Title')}}</label>
                        <textarea class="form-control" name="meta_title"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">{{__('Meta Description')}}</label>
                        <textarea class="form-control" name="meta_description"></textarea>
                    </div>     
                    <hr>
                    <button type="submit" class="btn btn-primary float-right">{{__('Save Changes')}}</button>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    tinymce.init({
      selector: '#page_editor',
      plugins: 'code codesample fullscreen importcss',
      codesample_languages: [
        { text: 'HTML/XML', value: 'markup' },
        { text: 'JavaScript', value: 'javascript' },
        { text: 'CSS', value: 'css' },
        { text: 'PHP', value: 'php' },
        { text: 'Ruby', value: 'ruby' },
        { text: 'Python', value: 'python' },
        { text: 'Java', value: 'java' },
        { text: 'C', value: 'c' },
        { text: 'C#', value: 'csharp' },
        { text: 'C++', value: 'cpp' }
    ],      
    });
</script>
@endpush    