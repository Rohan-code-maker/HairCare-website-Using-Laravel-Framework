{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact US</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="http://127.0.0.1:8000/index"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>Styllete</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="http://127.0.0.1:8000/index" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="http://127.0.0.1:8000/services" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="http://127.0.0.1:8000/gallery" class="nav-link">Gallery</a></li>
	        	<li class="nav-item"><a href="http://127.0.0.1:8000/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="http://127.0.0.1:8000/contact" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav --> --}}
    <center>
    <section style="border:1px solid black;width:700px" class="ftco-section ftco-booking bg-light">
    	<div class="container ftco-relative">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Updating</span>
            <h2 class="mb-4">Update your Appointment</h2>
            <p>Do is soon .... Or its hard to take the APPOINTMENT </p>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10 ftco-animate">
    				<form action="{{$url}}" method="post" class="appointment-form">
                        @csrf
	            <div class="row">
	              <div class="col-sm-6">
	                <div class="form-group">
                        <label>Name</label>
			              <input style="width:200px;margin:10PX" type="text" name='name' class="form-control" id="appointment_name" placeholder="Name" value="{{$customer->name}}">
                          @error('name')
                            {{$message}}
                          @enderror
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
                        <label>Email</label>
			              <input style="width:200px;margin:10PX" type="email" name='email' class="form-control" id="appointment_email" placeholder="Email" value="{{$customer->email}}">
                          @error('email')
                            {{$message}}
                          @enderror
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
                        <label>Date</label>
	                  <input style="width:200px;margin:10PX" type="date" name='date' class="form-control appointment_date" placeholder="Date" value="{{$customer->date}}">
                      @error('date')
                            {{$message}}
                          @enderror
	                </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
                        <label>Time</label>
	                  <input style="width:200px;margin:10PX" type="time" name='time' class="form-control appointment_time" placeholder="Time" value="{{$customer->time}}">
                      @error('time')
                            {{$message}}
                          @enderror
	                </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
			              <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <label>Work</label>
                      <select style="width:200px;margin:10PX" name="work" id="" class="form-control">
                      	<option value="Professional Makeup">Professional Makeup</option>
                        <option value="Manicure Pedicure">Manicure Pedicure</option>
                        <option value="Body Treatment">Body Treatment</option>
                        <option value="Haircut and Coloring">Haircut &amp; Coloring</option>
                      </select>
                      @error('work')
                            {{$message}}
                          @enderror
                    </div>
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
                        <label>Phone</label>
	                  <input style="width:200px;margin:10PX" type="number" name='phone' class="form-control" id="phone" placeholder="Phone" value="{{$customer->phone}}">
                      @error('phone')
                            {{$message}}
                          @enderror
	                </div>
	              </div>
	              <div class="col-md-12">
	              	<div class="form-group">
		                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"> {{$customer->message}}</textarea>
                        @error('message')
                            {{$message}}
                          @enderror
		              </div>
	              </div>
		          </div>
		          <div class="form-group">
	              <input style="margin:10px;background-color:green;color:white" type="submit" value="Make an Appointment" class="btn btn-primary">
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section><!-- .section -->
    </center>

    {{-- <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"> Styllete </h2>
              <p>Great Hair Doesn't happen by chance , It happens by an APPOINMENT
				Sooo Guys Make it fast otherwise you goona misss it .. </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="http://127.0.0.1:8000/index" class="py-2 d-block">Home</a></li>
                <li><a href="http://127.0.0.1:8000/about" class="py-2 d-block">About</a></li>
                <li><a href="http://127.0.0.1:8000/services" class="py-2 d-block">Services</a></li>
                <li><a href="http://127.0.0.1:8000/gallery" class="py-2 d-block">Gallery</a></li>
                <li><a href="http://127.0.0.1:8000/contact" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Trikonbhag Chowk, Rajkot, Gujrat, India</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">+91 977 9856 123</span></a></li>
	                <li><span class="icon icon-envelope"></span><span class="text">styllete@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by Stylleete
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html> --}}
