@extends('layouts::admin')

@section('content')
    @include('layouts::components.admin.alerts')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>{{__('List Pages')}}</h5>
                    <a href="{{route('pages.create')}}" class="btn btn-info"><i class="fa fa-plus-circle mr-0" aria-hidden="true"></i> {{__('Create')}}</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>{{__('ID')}}</th>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Created At')}}</th>
                                    <th>{{__('Updated At')}}</th>
                                    <th>{{__('Actions')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($pages['data'] as $key => $page)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$page['name']}}</td>
                                    <td>{{formatDate($page['created_at'], 'Y-m-d')}}</td>
                                    <td>{{formatDate($page['updated_at'], 'Y-m-d')}}</td>
                                    <td>
                                        <a href="{{route('pages.edit', ['page' => $page['id']])}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt mr-0" aria-hidden="true"></i></a>
                                        <button class="btn btn-danger btn-sm" data-action="destroy" data-url="{{route('pages.destroy', ['page' => $page['id']])}}"><i class="fa fa-trash mr-0"></i></button>
                                    </td>
                                </tr>
                                @php $i++ @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer p-3">
                    @php
                        $current_page = request()->get('page', 1);
                    @endphp
                    <nav class="mb-0">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="{{route('pages.index', ['page' => $current_page > 1 ? $current_page-- : 1 ])}}" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          @for($i = 1; $i <= $pages['last_page']; $i++)
                            <li class="page-item"><a class="page-link" href="{{route('pages.index', ['page' => $i])}}">{{$i}}</a></li>
                          @endfor
                          <li class="page-item">
                            <a class="page-link" href="{{route('pages.index', ['page' => $current_page > $pages['last_page'] ? '#' : $current_page++ ])}}" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
@endsection