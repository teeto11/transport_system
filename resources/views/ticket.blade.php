<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transport System</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/minified/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/minified/core.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/minified/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{url('assets/css/minified/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="{{url('assets/js/core/app.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><b>Your Ticket</b></div>

                                    <div class="panel-body">
                                        <form class="form-horizontal" >
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="email" class="col-md-4 control-label"><b>BOOKED BY</b> - {{$booking->lastname}} {{$booking->firstname}}</label>
                                                <label for="email" class="col-md-4 control-label"><b>BOOKING NUMBER</b> - LAVC{{$booking->id}}</label>
                                                
                                            </div>
                                            <hr>

                                            <div class="form-group">
                                                <label for="email" class="col-md-8 control-label"><b>FROM</b> - {{$trip->fromModel->state_name}}, {{$trip->fromModel->area}} <b>TO</b> - {{$trip->toModel->state_name}}, {{$trip->toModel->area}} </label>
                                                
                                            </div>
                                            <hr>

                                            <div class="form-group">
                                                <label for="password" class="col-md-4 control-label"><b>Number of seats</b> - {{$number_of_seat}}</label>
                                                <label for="password" class="col-md-4 control-label"><b>Departure time</b> - {{$booking->depature->time}}</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-8 col-md-offset-4" style="color:green">
                                                    <a href="javascript:window.print()" class="btn btn-primary">
                                                        Print Ticket
                                                    </a>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- Footer -->
					
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
