<!DOCTYPE HTML>
<html>
	<head>
		<title>Airline-X</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="myjs.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Poppins">
		<link rel="stylesheet" href="mycss.css">
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
	</head>	
	
	<body>
				<nav  style="border-radius:0px !important; margin:0;border: 0">
					<div class="container-fluid">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>                       
						  </button>
						  <a class="navbar-brand" href="index.html">Airline-X</a>
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="booking.html">Booking</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="contactus.html">Contact Us</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							</ul>

							<form class="navbar-form navbar-right">
							  <div class="input-group">
							    <input type="text" class="form-control" placeholder="Search">
							    <div class="input-group-btn">
							      <button class="btn btn-default" type="submit">
							        <i class="glyphicon glyphicon-search"></i>
							      </button>
							    </div>
							  </div>
							</form>
						</div>	
					</div>
				

				<!--carousal-->
				
					<div id="myCarousel" class="carousel slide" data-ride="carousel" >
						<!-- Indicators -->
						<ol class="carousel-indicators">
							  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							  <li data-target="#myCarousel" data-slide-to="1"></li>
							  <li data-target="#myCarousel" data-slide-to="2"></li>
							  <li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner img-responsive" style="max-height: 620px" >
							<div class="item active">
								<img src="images/airline/b.jpg">
								<div class="carousel-caption">
									<p>Welcome to</p>
									<hr style="width:40%">
									<h2>Airline-X</h2>
								</div>
							</div>

							  <div class="item">
								<img src="images/airline/3.jpg">
								<div class="carousel-caption">
									<p>Come fly with us!</p>
									<hr style="width:40%">
									<h2>Book your flight</h2>
								</div>
							  </div>
							
							  <div class="item">
								<img src="images/airline/6.jpg">
								<div class="carousel-caption">
									<p>Why choose us!</p>
									<hr style="width:40%">
									<h2>Luxurious & Safest</h2>
								</div>
							  </div>
							  
							  <div class="item">
								<img src="images/airline/New folder (2)/gg.jpg">
								<div class="carousel-caption">
									<p>Have any question?</p>
									<hr style="width:40%">
									<h2>Contact Us</h2>
								</div>
							  </div>
						</div>
					</div>	
				</nav>



				<!--3tabs-->

				<div class="row" style="padding: 5rem ;margin: 0; text-align: center;">
			    	<div class="col-sm-4">
			       		<div class="thumbnail" href="booking.html">
				          		<img src="images/airline/New folder/1.jpg" style="width:100%">
			      		</div>
			      	</div>
			    	<div class="col-md-4">
			      		<div class="thumbnail" href="contactus.html">
				          		<img src="images/airline/d.jpg" style="width:100%">
				          		
			      		</div>
			    	</div>
			    	<div class="col-md-4">
			      		<div class="thumbnail" href="aboutus.html">
				          		<img src="images/airline/a1.jpg" style="width:100%;height: 23.5rem">
				            	
			      		</div>
			    	</div>
				</div>


			<!--background slide image-->
				<div class="background-wrapper" style="background-image: url(images/airline/b.jpg);">
			  		<div style="text-align: center; padding: 10rem; color:white">
			      		<h3>come fly with us to desired places & we'll take care of your comfort and safety</h3>
			      		<hr width="30%" align="center">
			      		<h1>Welcome to Airline-X</h1>
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







			  <!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog" style="padding: 10rem">
			    <div class="modal-dialog">
			    
				      <!-- Modal content-->
				    <div class="modal-content trans-input-area">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title" style="text-align:center;">Log In</h4>
				        </div>

				        <div class="modal-body form-group trans-input-area">
				        	<label><b>Email</b></label>
				      		<input type="text" class="form-control" placeholder="example@email.com" name="uname" required>
				      		<br>
				      		<label><b>Password</b></label>
				      		<input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
				        	<br>
				      		<button class="btn btn-block form-control" type="submit" style="background-color: grey; color: white"><a href="home.html"><b>Login</b></a></button>
				        </div>

				        <div class="modal-footer">
				         	 <button type="button" class="btn btn-block" data-dismiss="modal" style="background-color: grey;"><b>Cancel</b></button>
				        </div>
				    </div>
			      
			    </div>
			</div>


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
</script>