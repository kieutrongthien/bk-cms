@extends('layouts::admin')

@section('content')
    <div class="row">
        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
            <div class="card prod-p-card bg-c-red">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Total Post</h6>
                            <h3 class="m-b-0 text-white">0</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-file text-c-red f-18"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
            <div class="card prod-p-card bg-c-blue">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Total Categories</h6>
                            <h3 class="m-b-0 text-white">0</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-copy text-c-blue f-18"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
            <div class="card prod-p-card bg-c-green">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Total Users</h6>
                            <h3 class="m-b-0 text-white">0</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user text-c-green f-18"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-3 col-sm-3">
            <div class="card prod-p-card bg-c-yellow">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Visitors Today</h6>
                            <h3 class="m-b-0 text-white">0</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users text-c-yellow f-18"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8 col-md-8 col-sm-6">
            <div class="card text-left">
              <div class="card-body">
                <h4 class="card-title">News</h4>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Heading</h5>
                            <small>small</small>
                        </div>
                        <p class="mb-1">Paragraph</p>
                        <small>paragraph footer</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Heading</h5>
                            <small>small</small>
                        </div>
                        <p class="mb-1">Paragraph</p>
                        <small>paragraph footer</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Heading</h5>
                            <small>small</small>
                        </div>
                        <p class="mb-1">Paragraph</p>
                        <small>paragraph footer</small>
                    </a>
                </div>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update</h4>
                    <p class="card-text">Your already updated latest version.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
