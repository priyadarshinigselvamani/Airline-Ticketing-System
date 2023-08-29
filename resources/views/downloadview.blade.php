<!DOCTYPE HTML>

<html>
	<head>
		<title>Booking</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="myjs.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Poppins">

		<link rel="stylesheet" href="mycss.css">
	</head>
	<style type="text/css">
				label{
			color: white;
		}
        
	body{
			font-family: 'Poppins', sans-serif;

		}



.carousel-caption {
    top: 20% !important;
    bottom: auto;
    text-size:24px;
	}
	
	.carousel-caption h2 {
    font-size: 9rem;
    margin-bottom: 0;
    color: #FFF;
    font-weight: 300;
}

	
	.carousel-caption p {
	 color: rgba(255, 255, 255, 0.65);
    text-transform: uppercase;
    font-size: 3rem;
    font-weight: 300;
    margin: 0;
    padding-bottom: 1.75rem;
    letter-spacing: .25rem;
	}

	 header{
		color: white;

	}

 	
	




	#footer {
		padding: 4rem 0 2rem 0 ;
		background: #000;
		text-align: center;
		width: 100% !important;
		bottom: 0;

	}
	ul.icons li {
				display: inline-block;
				padding: 0 2rem 0 0;
				font-size: 36px;
			}	







	.background-wrapper {
			background-color: #000;
			color: #bfbfbf;
			
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
			position: relative;
		}

	



		.panel-transparent {
        background: none;

        border-radius: 0;
        border:none;


    }

    .panel-transparent .panel-heading{
        background: rgba(122, 130, 136, 0.6)!important;
        
    }

    .panel-transparent .panel-body{
        background:rgba(46,51,56,0.4)!important;
    }




    .trans-input-area{
       background-color:rgba(0,0,0,0.4) !important;
       border:none !important;
       color: #fff;
    };


    /*list groups*/

    .list-group
	{
		margin: 0;
	}

	.list-group-item{
		margin: none;
		border: none;
		border-radius: 0;
		background-color: black;
		text-align: center;
	};

	</style>
	<body>
				<div class="background-wrapper" style="background-image: url(images/airline/aa.jpg);">
				
				<!--header-->

				<div class="container-fluid">
					<header>
						<h2>Airline-X</h2>
						<hr>
					</header>


					<!--panel-->
					<div class="col-sm-8 col-sm-offset-2">
						<div class="panel-group">
						  	<div class="panel panel-default panel-transparent">
						    	{{-- <div class="panel-heading">
						    		<legend style="text-align: center;">Flight Information</legend>
						    	</div> --}}
								<h4>Your journey details</h4>
						    	<div class="panel-body">
                                        {{-- <div class="input-group">
                                            <label for="class">Class</label>
                                            <select class="form-control trans-input-area" id="class">
                                            <option>Economy</option>
                                            </select>
                                            <a href="#"></a>
                                        </div> --}}
									<form class="form-inline" id="flightdetails" action="{{url('/confirm_booking')}}" method="POST"  autocomplete="off">
                                        {{csrf_field() }}
										<br>
										<div>
                                            <input type="hidden" name="flight_id" value="{{$id}}">
											<div class="input-group">
												<span>
													<span>From: </span> <span><b>{{$souce}}</b></span>
												</span>
											</div>
										</div>
										<br>
										<div>
											<div class="input-group">
												<span>
													<span>To: </span> <span><b>{{$destination}}</b></span>
												</span>
											</div>
										</div>
										<br>
										<div>
											<div class="input-group">
												<span>
													<span>Departure Date: </span> <span><b>{{$departure_date}}</b></span>
												</span>
											</div>
										</div>
										<br>
										<div>
											<div class="input-group">
												<span>
													<span>Adults: </span> <span><b>{{$adult_count}}</b></span>
												</span>
											</div>
										</div>
										<br>
										<div>
                                            <div class="input-group">
												<span>
													<span>Price: </span> <span><b>{{$new_flight_fare}}</b></span>
												</span>
											</div>
										</div>
										<br>
										{{-- <div class="input-group-btn" style="text-align: right !important; ">
										<button id="submit" href="booking2.html" class="btn btn-primary trans-input-area" type="submit" style="width: 30%">Confirm Booking</button>
										<br>
										</div> --}}
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Footer -->
			<footer id="footer">
				<div class="container-fluid">
					<ul class="icons">
						<li><a href="#" class="fa fa-twitter" style="color: grey"></a></li>
						<li><a href="#" class="fa fa-facebook" style="color: grey"></a></li>
						<li><a href="#" class="fa fa-instagram" style="color: grey"></a></li>
						<li><a href="#" class="fa fa-envelope" style="color: grey"></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Airline-X. All rights reserved.
				</div>
			</footer>

	</body>
</html>
<script>
    
	$(".nav li").on("click", function() {
      $(".nav li").removeClass("active");
      $(this).addClass("active");
    });



    function navbar_movment(event)
	{
        	$(event.data.param1).slideToggle("fast");
        /*	$(event.data.param2).slideUp("fast");
        	$(event.data.param3).slideUp("fast");
        	$(event.data.param4).slideUp("fast"); */
	};

    $("#source").change(function(){
    let source  = document.getElementById('source').value;
    $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "GET",
        url: '/get_destination/' +source,
        data: "{org_id: " + source + "}",
        success: function(results){
             $('#destination').html('');
            //  $('#destination').append('<option value="">Select destination</option>');
            $.each(results,function( key, value ) {
              $('#destination').append('<option value="'+value+'">'+value+'</option>');
            });
        }
    });
})
</script>