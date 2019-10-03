@extends('layouts.adminApp')

@section('content')

   	<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4> <span class="text-semibold">Home</span> - Terminals</h4>
						</div>

					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{ url('/admin_home') }}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{url('/terminal/all')}}">Terminal</a></li>
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
							<h5 class="panel-title">Terminals</h5>
						{{--	<div class="heading-elements">
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
						            <th>Name</th>
                                    <th>State</th>
						        </tr>
						    </thead>
						    <tbody>
                                @foreach ($terminals as $terminal)
						        <tr>
						            <td>{{$terminal->id}}</td>
						            <td>{{$terminal->area}}</td>
                                    <td>{{$terminal->state_name}}</td>
						        </tr>
                                @endforeach
						    </tbody>
						</table>
					</div>
					<!-- /pagination types -->
                </div>
			<!-- /content area -->

@stop