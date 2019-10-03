@extends('layouts.adminApp')

@section('content')

     	<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4> <span class="text-semibold">Home</span> - Trip</h4>
						</div>

					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{url('/admin_home')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{url('/trip/all')}}">Trip</a></li>
							<li class="active">Add Trip</li>
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
					<form method="POST" action="{{url('/trip/create')}}">
                        {{ csrf_field() }}
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">Add a Trip</h5>
							{{--	<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                	</ul>
			                	</div> --}}
							</div>

							<div class="panel-body">
								
										<fieldset class="text-semibold">
											<legend><i class="icon-reading position-left"></i> Trip details</legend>

											<div class="form-group">
									<label>From:</label>
												<select class="form-control" name="from" required>
													<option>--select--</option>
                                                    @foreach($terminals as $terminal)
														<option value= {{$terminal->id}} > {{$terminal->area}},{{$terminal->state_name}} </option>
                                                    @endforeach
												</select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>To:</label>
                                                <select class="form-control" name="to" required>
                                                    <option>--select--</option>
                                                    @foreach($terminals as $terminal)
                                                        <option value= {{$terminal->id}} > {{$terminal->area}},{{$terminal->state_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Trip Estimated Travel Time in minutes:</label>
                                                <input type="text" class="form-control" name="estimated_time" placeholder="" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter number of seats:</label>
                                                <input type="text" class="form-control" name="number_of_seats" placeholder="" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Amount:</label>
                                                <input type="integer" class="form-control" min="1" name="amount" placeholder="" required>
											</div>
											
											<div class="new" id="customFields">
												<label>Date & Time:</label>
												<input type="datetime-local" class="form-control" name="time[]" placeholder="" required>
												<a href="javascript:void(0);" class="addCF" onclick="addRow();">Add Date</a>
												
                                            </div>

                                            <div class="form-group">
                                                <label>Details:</label>
                                                <input type="text" class="form-control" name="details" placeholder="" >
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
			
			<script>

				function addRow(){
					
					$("#customFields").append('<input type="datetime-local" class="form-control" name="time[]" placeholder="" required><a href="javascript:void(0);" class="remCF">Remove</a>');	
					$("#customFields").on('click','.remCF',function(){
						$(this).parent().remove();
					});
				}
			
			</script>
@stop