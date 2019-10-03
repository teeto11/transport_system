@extends('layouts.master')
@section('content')

 <div class="container" style="margin:30px 0;">
  <div class="row">
        <div class="col-md-6">
     <form id="formbook" class="form-row" method="POST" action="{{ url('/bookings') }}">
    {{ csrf_field() }}
    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
            <big class="display-block"><big class="display-block">Book Trip Now</big></big>
        </div>


        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} has-feedback has-feedback-left">
           <div class="form-group col-md-6">
              <label for="inputEmail4">FirstName</label>
              <input type="texg" class="form-control" id="inputEmail4" name="firstname" placeholder="FirstName" required>
            </div>
             @if ($errors->has('firstname'))
                <span class="help-block">
                    <strong>{{ $errors->first('firstname') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }} has-feedback has-feedback-left">
            <div class="form-group col-md-6">
              <label for="inputEmail4">LastName</label>
              <input type="text" class="form-control" id="inputEmail4" name="lastname" placeholder="LastName" required>
            </div>
                @if ($errors->has('lastname'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback has-feedback-left">
             <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" required>
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        
        
        <div class="form-group">
             <div class="form-group col-md-6">
              <label for="inputEmail4">Number Of Seats</label>
              <input type="text"  class="form-control" id="inputEmail4" name="number_of_seat" placeholder="Number of Seats" >
            </div>
            
        </div>

        
              
              <input type="hidden"  value="{{$time->id}}" class="form-control" id="inputEmail4" name="depature_time_id" placeholder="Depature time"  readonly>
            
            
       

      <div class="form-group">
         <div class="form-group col-md-6" align="center" style="margin-left:300px;">
        <button type="submit" class="btn bg-success style='margin-top:15px;' btn-lg">Book Now<i class="icon-circle-right2 position-right"></i></button>
         </div> 
      </div>
 </div>    
</form>
     
     </div>


      <div class="col-md-6">
                <table class="table" border="0">
            <h2 align="center">Trip Details</h2>
          <thead>
            <tr>
              <th scope="col">Trip_Id</th>
              <th scope="col">From</th>
              <th scope="col">Destination</th>
              <th scope="col">Estimated Time</th>
              <th scope="col">Number Of Seats</th>
              <th scope="col">Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{$trip->id}}</th>
              <td>{{$time->trip->fromModel->area}}</td>
              <td>{{$time->trip->toModel->area}}</td>
              <td>{{$trip->estimated_time}}</td>
              <td>{{$trip->number_of_seats}}</td>
             <td>{{$trip->details}}</td>
            </tr>

          </tbody>
        </table>
    </div>   
</div>
</div>


<hr> 



@endsection