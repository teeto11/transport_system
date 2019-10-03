@extends('layouts.adminApp')

@section('content')

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
                <h5 class="panel-title">Booking</h5>
             {{--   <div class="heading-elements">
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
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Number Of Seat</th>
                        <th>Depature Time</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr>
                        <td>{{$loop->index+ 1}}</td>
                        <td>{{$booking->firstname}}</td>
                        <td>{{$booking->lastname}}</td>
                        <td>{{$booking->email}}</td>
                        <td>{{$booking->number_of_seat}}</td>
                        <td>{{$booking->depature->time}}</td>
                    </tr>
                   
                    
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /pagination types -->
    </div>
<!-- /content area -->




@endsection