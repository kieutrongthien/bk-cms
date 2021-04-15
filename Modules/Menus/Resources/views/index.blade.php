@extends('layouts::admin')

@section('content')
<div class="row">
    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
        <div class="card">
            <div class="card-header">
                <h5>{{__('Add / Edit Menu')}}</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label for="">{{__('Name')}}:</label>
                  <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">{{__('Type')}}:</label>
                  <select name="type" class="form-control" id="menu_type" required>
                        <option value="category">{{__('Category')}}</option>
                        <option value="page">{{__('Page')}}</option>
                        <option value="link">{{__('Custom Link')}}</option>
                  </select>
                </div>
                <div class="form-group" id="select_category">
                  <label for="">{{__('Select Category')}}:</label>
                  <select name="category_id" class="form-control">
                        <option value="category">{{__('Category')}}</option>
                  </select>
                </div>
                <div class="form-group" id="select_page" style="display: none">
                  <label for="">{{__('Select Page')}}:</label>
                  <select name="category_id" class="form-control">
                      @foreach(getPages() as $page)
                        <option value="{{$page->id}}">{{$page->name}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group" id="input_link" style="display: none">
                  <label for="">{{__('Enter your link')}}:</label>
                  <input class="form-control" name="url">
                </div>
                <button type="submit" class="btn btn-block btn-primary">{{__('Save Changes')}}</button>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8 col-md-8 col-sm-8">

    </div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).on('change', '#menu_type', function() {
            var value = $(this).val()

            if(value == 'category') {
                $('#select_category').show()
                $('#select_page').hide()
                $('#input_link').hide()
            } else if(value == 'page') {
                $('#select_category').hide()
                $('#select_page').show()
                $('#input_link').hide()                
            } else {
                $('#select_category').hide()
                $('#select_page').hide()
                $('#input_link').show()
            }
        })
    </script>
@endpush