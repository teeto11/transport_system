@extends('layouts.adminApp')

@section('content')

   	<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4> <span class="text-semibold">Home</span> - Trips</h4>
						</div>

					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{ url('/admin_home') }}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{url('/trip/all')}}">Trip</a></li>
						</ul>

					</div>
				</div>
				<!-- /page header -->
				@if (session('status'))
                    <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ session('status') }}</strong>
                    </div>
                @endif
    <!-- Content area -->
				<div class="content">

					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Trip</h5>
							{{-- <div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div> --}}
						</div>

						
						<table class="table datatable-pagination">
							<thead>
						        <tr>
						            <th>Id</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Estimated Time</th>
                                    <th>Number of seats</th>
                                    <th>Amount</th>
                                    <th>Details</th>
                                    <th></th>
						        </tr>
						    </thead>
						    <tbody>
                                @foreach ($trips as $trip)
                                    <tr>
                                        <td>{{$trip->id}}</td>
                                        <td>{{$trip->fromModel->state_name}}, {{$trip->fromModel->area}}</td>
                                        <td>{{$trip->toModel->state_name}}, {{$trip->toModel->area}}</td>
                                        <td>{{$trip->estimated_timeid}}</td>
                                        <td>{{$trip->number_of_seats}}</td>
                                        <td>{{$trip->amount}}</td>
                                        <td>{{$trip->details}}</td>
                                        <td><a href="{{url('/trip/'.$trip->id.'/delete')}} ">Delete</a></td>
                                    </tr>
                                @endforeach
						    </tbody>
						</table>
					</div>
					<!-- /pagination types -->
                </div>
			<!-- /content area -->

@stop