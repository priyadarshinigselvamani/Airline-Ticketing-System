<!DOCTYPE HTML>

<html>
	@include('sweetalert::alert')

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
				<nav class="navbar navbar-inverse" style="border-radius:0px !important; margin:0;border: 0">
					<div class="container-fluid">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>                       
						  </button>
						  <a class="navbar-brand" href="index.html">Airline-X</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								{{-- <li><a href="/index">Home</a></li> --}}
								<li class="active"><a href="booking.html">Booking</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></a></li>
							</ul>
							
							{{-- <form class="navbar-form navbar-right">
							  <div class="input-group">
							    <input type="text" class="form-control" placeholder="Search">
							    <div class="input-group-btn">
							      <button class="btn btn-default" type="submit">
							        <i class="glyphicon glyphicon-search"></i>
							      </button>
							    </div>
							  </div>
							</form> --}}
						</div>	
					</div>
				</nav>
				
				

				<div class="background-wrapper" style="background-image: url(images/airline/aa.jpg);">
				
				<!--header-->

				<div class="container-fluid">
					<header>
						<h2>Book Your Flight</h2>
						<hr>
					</header>


					<!--panel-->
					<div class="col-sm-8 col-sm-offset-2">
						<div class="panel-group">
						  	<div class="panel panel-default panel-transparent">
						    	<div class="panel-heading">
						    		<legend style="text-align: center;">Flight Information</legend>
						    	</div>
						    	<div class="panel-body">
                                        <div class="input-group">
                                            <label for="class">Class</label>
                                            <select class="form-control trans-input-area" id="class">
                                            <option>Economy</option>
                                            </select>
                                            <a href="#"></a>
                                        </div>
									<form class="form-inline" id="flightdetails" action="{{url('/get_flight_details')}}" method="GET"  autocomplete="off">
                                        {{csrf_field() }}
										<br>
										<div>
											<div class="input-group">
												<label for="from">From</label>
                                                <select class="form-control trans-input-area" style="width: 100%;" id="source" name="source">
                                                    @if(isset($source) && $source != "")
                                                        <option selected>{{$source}}</option>
                                                    @endif
                                                    <option value="0">---Select Source---</option>
                                                    <option>Mumbai</option>
                                                    <option>Chennai</option>
                                                    <option>Delhi</option>
                                                    <option>Kolkata</option>
                                                </select>
												{{-- <input type="text" class="form-control trans-input-area" placeholder="Origin" name=""  id="from" required> --}}
											</div>
											<div class="input-group">
												<label for="to">To</label>
                                                <select class="form-control trans-input-area" style="width: 100%;" id="destination" name="destination">
                                                    @if(isset($destination) && $destination != "")
                                                        <option selected>{{$destination}}</option>
                                                    @endif
                                                    <option value="0">---Select Destination---</option>
                                                    {{-- <option>Mumbai</option>
                                                    <option>Chennai</option>
                                                    <option>Delhi</option>
                                                    <option>Kolkata</option> --}}
                                                </select>
												{{-- <input type="text" class="form-control trans-input-area" placeholder="Destination" name="" id="to" required> --}}
											</div>
										</div>
										<br>
										<div>
											<div class="input-group">
												<label for="Departure">Departure Date</label>
												<input type="date" class="form-control trans-input-area" name="date1" min="2015-01-01"  required>
											</div>
										</div>
										<br>
										<div>
											<div class="input-group">
												<label for="Adults">Adults</label>
												<input type="number" class="form-control trans-input-area" id="Adults" value="1" name="" min="1" required>
											</div>
										</div>
										<br>
										<div class="input-group-btn" style="text-align: right !important; ">
										<button id="submit" href="booking2.html" class="btn btn-primary trans-input-area" type="submit" style="width: 30%">Continue</button>
										<br>
										</div>
									</form>
                                    @if(isset($source) && $source != "")
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered">
                                            <thead align="center" style="text-align: center">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Source</th>
                                                    <th>Destination</th>
                                                    <th>Timing</th>
                                                    <th>Hold</th>
                                                    <th>Book</th>
                                                </tr>
                                            </thead>
                                            <tbody align="center" style="text-align: center">
                                                @foreach($flight_details as $index => $flight_detail)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$flight_detail->source}}</td>
                                                    <td>{{$flight_detail->destination}}</td>
                                                    <td>{{$flight_detail->time}}</td>
                                                    <td><a href ="{{url('/hold_flight_ticket/'.$flight_detail->id)}}" class="btn btn-warning p-0 btn-sm mr-5" data-toggle="tooltip" title="Hold"></a></td>
                                                    <td><a href ="{{url('/book_flight_ticket/'.$flight_detail->id)}}" class="btn btn-danger p-0 btn-sm mr-1 restore" data-toggle="tooltip" title="Restore"><i class="fas fa-trash-restore-alt" style='font-size:20px'></i></a></td>
                                                </tr> 
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
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
        data: "{source: " + source + "}",
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