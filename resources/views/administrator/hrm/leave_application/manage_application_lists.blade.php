<?php
use Carbon\Carbon;
?>
@extends('administrator.master')
@section('title', __('Leave Application Lists'))

@section('main_content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           {{ __('Leave Application') }} 
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a>{{ __('Leave') }}</a></li>
            <li class="active">{{ __('Leave Application lists') }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Leave Application lists') }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div  class="col-md-4">
                    <input type="text" id="myInput" class="form-control" placeholder="{{ __('Search..') }}">
                </div>
                <div  class="col-md-8">
                    
                </div>

                <!-- Notification Box -->
                <div class="col-md-12">
                    @if (!empty(Session::get('message')))
                    <div class="alert alert-success alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-check"></i> {{ Session::get('message') }}
                    </div>
                    @elseif (!empty(Session::get('exception')))
                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-warning"></i> {{ Session::get('exception') }}
                    </div>
                    @endif
                </div>
                <!-- /.Notification Box -->
                <div class="col-md-12 table-responsive">
                    <table  class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('SL#') }}</th>
                                <th>{{ __('Employee Name') }}</th>
                                <th>{{ __('Reason') }}</th>
                                <th>{{ __('Starts Date') }}</th>
                                <th>{{ __('End Date') }}</th>
                                <th>{{ __('Leave Days') }}</th>
                                <th>{{ __('Leave category') }}</th>
                                <th>{{ __('Created at') }}</th>
                                <th class="text-center">{{ __('Status') }}</th>
                                <th class="text-center">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                        @php ($sl = 1)
                        @foreach($leave_applications as $leave_application)
                          <tr>
                            <td>{{  $sl++ }}</td>
                            <td>{{ $leave_application['name'] }}</td>
                            <td>{{ str_limit($leave_application['reason'], 65) }}</td>
                            <td>{{ date('d/m/Y', strtotime($leave_application['start_date'])) }}</td>
                            <td>{{ date('d/m/Y', strtotime($leave_application['end_date'])) }}</td>
                            <td class="text-center">
                                @php($leave_days = Carbon::parse($leave_application['start_date'])->diffInDays(Carbon::parse($leave_application['end_date']))+1)
                                {{ $leave_days }}
                            </td>
                            <td>{{ $leave_application['leave_category'] }}</td>
                            <td>{{ date("D d F Y h:ia", strtotime($leave_application['created_at'])) }}</td>

                            <td class="text-center">
                            @if($leave_application['publication_status'] == 0)
                            <a href="" class="btn btn-warning btn-xs btn-flat btn-block" data-toggle="tooltip" data-original-title="Pending"><i class="icon fa fa-hourglass-2"></i> {{ __('Pending') }}</a>
                            @elseif($leave_application['publication_status'] == 1)
                              <a href="" class="btn btn-success btn-xs btn-flat btn-block" data-toggle="tooltip" data-original-title="Accepted"><i class="icon fa fa-smile-o"> {{ __('Accepted') }}</i></a>
                            @else
                              <a href="" class="btn btn-danger btn-xs btn-flat btn-block" data-toggle="tooltip" data-original-title="Not Accepted"><i class="icon fa fa-flag"></i> {{ __('Not Accepted') }}</a>
                            @endif
                          </td>

                            <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    {{ __('Action') }} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/hrm/application_lists/' .$leave_application['id']) }}"><i class="icon fa fa-file-text"></i> {{ __('Details') }}</a></li>

                                    <li><a  href="{{ url('/hrm/leave_application/approved/' .$leave_application['id']) }}"><i class="icon fa fa-file-text"></i> {{ __('Approved') }}</a></li>

                                    <li><a href="{{ url('/hrm/leave_application/not_approved/' .$leave_application['id']) }}"><i class="icon fa fa-file-text"></i> {{ __('Not Approed') }}</a></li>

                                </ul>
                            </div>
                        </td>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
</section>
<!-- /.content -->
</div>
@endsection
