@extends('layouts.master')
@section('content')
<script>
	function getTerminal(){
	   var from =  $("#from").val();

		$.ajax({
			type:'GET',
			url: baseUrl + '/getterminal/'+from,
			data:'_token = <?php echo csrf_token() ?>',
			success:function(data){
				//console.log(data);
				$('#ajaxDiv').children('option:not(:first)').remove();
				$.each(data, function (i, imt) {
					$('#ajaxDiv').append($('<option>', {
						value: imt.to_model.id,
						text : imt.to_model.area +", "+ imt.to_model.state_name,
					}));
				});
			}
		});
	}

	function getTime(){
		var from =  $("#from").val();
		var to =  $("#ajaxDiv").val();

		console.log(to)
		$.ajax({
			type:'GET',
			url: baseUrl + '/gettime/from/'+from+'/to/'+to,
			data:'_token = <?php echo csrf_token() ?>',
			success:function(data){
				console.log(data);
				$('#timeDiv').children('option:not(:first)').remove();
				$.each(data, function (i, imt) {
					$('#timeDiv').append($('<option>', {
						value: imt.id,
						text : imt.time,
					}));
				});
			}
		});
	}
</script>
	<!-- home-one-info -->
	<section id="home-one-info" class="clearfix home-one">
		<!-- world -->
		<div id="banner-two" class="parallax-section">
			<div class="row text-center">
				<!-- banner -->
				<div class="col-sm-12 ">
					<div class="banner">
						<h1 class="title"><span style="color:#ca351b">Urban</span><span style="color:#3a3012 !important">Transport</span></h1>
             			<p style="color:#ca351b">Online Transport Reservation System</p>
			 			<h3>Select your Destination & book your ticket!</h3>
						<!-- banner-form -->
						<div class="banner-form">
							<form class="form-horizontal" method="post" action="{{url('/book_ticket')}}">
								{{ csrf_field() }}
								<!-- category-change -->
								<select class="form-control category-dropdown dropdown" id="from" name="from" onchange="getTerminal()" required>
									<option selected value="">From</option>  
									@foreach($terminals as $terminal)
										<option value=" {{$terminal->id}}" >{{$terminal->area}},{{$terminal->state_name}}</option>
									@endforeach
								</select>
								<select class="form-control category-dropdown dropdown" name="to" id="ajaxDiv" onchange="getTime()" required>  
									<option selected value="">To</option>  
									
									
								</select>
								<select class="form-control category-dropdown dropdown" name="time" id="timeDiv" required>
									<option value="">Date&Time</option>
								</select>
								<!-- category-change -->
								{{--  <input type="text" class="form-control" name"product_name" placeholder="What Are You Looking For ?">
								  --}}
								<button type="submit" class="form-control">Book ticket</button>
							</form>
						</div><!-- banner-form -->

						<!-- banner-socail -->
						<ul class="banner-socail">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul><!-- banner-socail -->
					</div>
				</div><!-- banner -->
			</div><!-- row -->
		</div><!-- world -->

		   <div class="container">
			


      			<!-- featureds -->
      			<div class="section featureds">
      				<div class="row">
      					<!-- featured-top -->
      					<div class="col-sm-12">
      						<div class="featured-top">
      							<h4>Our Features</h4>
      						</div>
      					</div><!-- featured-top -->
      				</div>

      				<div class="row">
					  <div id="ads"></div>
					  {{--  @foreach($products as $product)
      					<!-- featured -->
      					<div class="col-md-4 col-lg-3">
      						<!-- featured -->
      						<div class="featured">
      							<div class="featured-image">
      								<a href="{{('/ProductShow/'.$product->id)}}"><img src="{{url('public/'.$product->pictures[0]->url)}}" alt="image here" height="200" widht="100" class="img-respocive"></a>
      								<a href="#" class="verified" data-toggle="tooltip" data-placement="top" title="Verified"><i class="fa fa-check-square-o"></i></a>
      							</div>

      							<!-- ad-info -->
      							<div class="ad-info">
      								<h3 class="item-price">&#8358;{{number_format($product->price)}}</h3>
      								<h4 class="item-title"><a href="{{('/ProductShow/'.$product->id)}}">{{$product->product_name}}</a></h4>
      								<div class="item-cat">
      									<span><a href="{{('/ProductShow/'.$product->id)}}">{{$product->category->category_name}}</a></span>
      								</div>
      							</div><!-- ad-info -->

      							<!-- ad-meta -->
      							<div class="ad-meta">
      								<div class="meta-content">
										  <span class="dated"><a href="#">{{ date('d F Y', strtotime($product->created_at)) }} </a></span>
										   @if($product->user->user_type =="student")
										  <a href="#" data-toggle="tooltip" data-placement="top" title="{{$product->user->university->NAME}}"><i class="fa fa-map-marker"></i> </a>
										  @else
										  <a href="#" data-toggle="tooltip" data-placement="top" title="{{$product->user->name}}"><i class="fa fa-map-marker"></i> </a>
                                         @endif
      									<a href="#" data-toggle="tooltip" data-placement="top" title="{{$product->user->user_type}}"><i class="fa fa-suitcase"></i> </a>
      								</div>
      								<!-- item-info-right -->
      								<div class="user-option pull-right">
      									
      								</div><!-- item-info-right -->
      							</div><!-- ad-meta -->
      						</div><!-- featured -->
      					</div><!-- featured -->
					  @endforeach
      					
					  </div><!-- row -->
					  <!--pagination -->
					  {{$products->links()}}   --}}
					  <!-- pagination  -->
      			</div><!-- featureds -->


      			<!-- cta -->
      			<div class="section cta text-center">
      				<div class="row">
      					<!-- single-cta -->
      					<div class="col-sm-4">
      						<div class="single-cta">
      							<!-- cta-icon -->
      							<div class="cta-icon icon-secure">
      								<img src="{{asset('transport/images/icon/13.png')}}" alt="Icon" class="img-responsive">
      							</div><!-- cta-icon -->
                    <h4>What We DO</h4>
                     {{-- <button class="btn" onclick="reveal_secure()">Learn More</button> --}}
                    <div id="onclick-btn">
                      <br>
                     {{-- <p style="font-weight: bold">What We DO</p> --}}
                      <p style="text-align:center">we are committed to provide cost effective Logistic Solutions for every business. With a timed delivery that offers complete flexibility, we ensures that you never have to wait. As the leading logistics service provider among other delivery companies in Nigeria,</p>
                    </div>
      						</div>
      					</div><!-- single-cta -->

      					<!-- single-cta -->
      					<div class="col-sm-4">
      						<div class="single-cta">
      							<!-- cta-icon -->
      							<div class="cta-icon icon-support">
      								<img src="{{asset('transport/images/icon/14.png')}}" alt="Icon" class="img-responsive">
      							</div><!-- cta-icon -->

      							<h4>24/7 Support</h4>
                    <button class="btn" onclick="reveal_contact()">Contact Us</button>
                    <div id="onclick-btn2">
                      <br>
                      <p style="font-weight: bold">Customer Care</p>
                      <p style="text-align:center">We are at Babcock university gideon troppers incase you need our physical assistance</p>
                    </div>
      						</div>
      					</div><!-- single-cta -->

      					<!-- single-cta -->
      					<div class="col-sm-4">
      						<div class="single-cta">
      							<!-- cta-icon -->
      							<div class="cta-icon icon-trading">
      								<img src="{{asset('transport/images/icon/15.png')}}" alt="Icon" class="img-responsive">
      							</div><!-- cta-icon -->

      							<h4>DOMESTIC COURIER SOLUTIONS</h4>
                     {{-- <button class="btn" onclick="reveal_easy()">Learn More</button> --}}
                    <div id="onclick-btn3">
                      <br>
                     {{--  <p style="font-weight: bold">Connect Faster</p> --}}
                      <p style="text-align:center">With a strong logistics presence across Nigeria. We provide multiple delivery options when sending parcels. Whether you are sending parcels within your city or to a different state, we offer the most affordable domestic courier service to virtually every location in Nigeria.</p>
                    </div>
      						</div>
      					</div><!-- single-cta -->
      				</div>
      			</div><!-- cta -->

      		</div><!-- container -->
      	</section><!-- world-gmap -->

   @endsection
        </body>
      </html>
