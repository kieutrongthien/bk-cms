@extends('layouts::blank')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title">{{__('Step 1: Check System Requirements')}}</h3>
                        <p>{{__('Please ensure that you already installed correct requirements and all extensions below.')}}
                        <hr>
                        <div class="table-responsive system-requirements">
                            <table class="table table-striped">
                                <tr>
                                    <th>PHP Version:</th>
                                    <td>^ {{$system['php_version']}}</td>
                                    <td>
                                        @if($system['php_version'] >= 7.3)
                                            <i class="fa fa-check-circle text-success"></i>
                                        @else
                                            <i class="fa fa-times text-danger"></i>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>MySQL Version:</th>
                                    <td>^ {{$system['mysql_version']}}</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Require MySQL 5.7 above.">
                                            <i class="fa fa-info-circle text-info"></i>
                                        </a>                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP BC Math Extension:</th>
                                    <td>{!! $system['bcmath'] ? '<i class="fa fa-check-circle text-success"></i>' : '<i class="fa fa-times text-danger' !!}</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="PHP Extension">
                                            <i class="fa fa-info-circle text-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP CType Extension:</th>
                                    <td>{!! $system['ctype'] ? '<i class="fa fa-check-circle text-success"></i>' : '<i class="fa fa-times text-danger' !!}</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="PHP Extension">
                                            <i class="fa fa-info-circle text-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP Fileinfo Extension:</th>
                                    <td>{!! $system['fileinfo'] ? '<i class="fa fa-check-circle text-success"></i>' : '<i class="fa fa-times text-danger' !!}</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="PHP Extension">
                                            <i class="fa fa-info-circle text-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP JSON Extension:</th>
                                    <td>{!! $system['json'] ? '<i class="fa fa-check-circle text-success"></i>' : '<i class="fa fa-times text-danger' !!}</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="PHP Extension">
                                            <i class="fa fa-info-circle text-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP MB String Extension:</th>
                                    <td>{!! $system['mbstring'] ? '<i class="fa fa-check-circle text-success"></i>' : '<i class="fa fa-times text-danger' !!}</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="PHP Extension">
                                            <i class="fa fa-info-circle text-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP OpenSSL Extension:</th>
                                    <td>{!! $system['openssl'] ? '<i class="fa fa-check-circle text-success"></i>' : '<i class="fa fa-times text-danger' !!}</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="PHP Extension">
                                            <i class="fa fa-info-circle text-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP Tokenizer Extension:</th>
                                    <td>{!! $system['tokenizer'] ? '<i class="fa fa-check-circle text-success"></i>' : '<i class="fa fa-times text-danger' !!}</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="PHP Extension">
                                            <i class="fa fa-info-circle text-info"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>PHP XML Extension:</th>
                                    <td>{!! $system['xml'] ? '<i class="fa fa-check-circle text-success"></i>' : '<i class="fa fa-times text-danger' !!}</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="PHP Extension">
                                            <i class="fa fa-info-circle text-info"></i>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <a href="{{route('install', ['step' => 2])}}" class="btn btn-block btn-primary">{{__('Continue')}}</a>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@endsection