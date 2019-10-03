@extends('layouts.adminApp')

@section('content')

     	<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4> <span class="text-semibold">Home</span> - Terminal</h4>
						</div>

					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{url('/admin_home')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{url('/terminal/all')}}">Terminal</a></li>
							<li class="active">Add Terminal</li>
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
                <div class="row">
					<div class="col-md-6">

					<!-- 2 columns form -->
					<form method="POST" action="{{url('/terminal/create')}}">
                        {{ csrf_field() }}
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">Add a Terminal</h5>
							{{--	<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                	</ul>
			                	</div> --}}
							</div>

							<div class="panel-body">
								
								<fieldset class="text-semibold">
									<legend><i class="icon-reading position-left"></i> Terminal details</legend>

									<div class="form-group">
										<label>Enter Terminal name:</label>
										<input type="text" class="form-control" name="area" placeholder="" required>
									</div>

									<div class="form-group">
										<label>State:</label>
										<select class="form-control" name="state_name" required>
											<option>--select--</option>
											@foreach($states as $state)
												<option value= "{{$state->name}}" > {{$state->name}} </option>
											@endforeach
										</select>
									</div>
					
								</fieldset>
									

								<div class="text-left">
									<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</div>
						</div>
					</form>
					<!-- /2 columns form -->
                    </div>

								</div>


                    

            </div>
            <!-- /content area -->
@stop