<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Hotel Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">-->
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
.jumbotronimg {
    background-color: #f4511e;
    color: #fff;
    padding: 0px 0px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }

.open .dropdown-toggle {
    border-color: transparent;
    color: #fff;
    background-color: transparent !important;
  }
  .dropdown-menu li a {
    color: #000 !important;/*font color dropdown menu*/
  }
  .dropdown-menu li a:hover {
    background-color: #f2f2f2 !important;
  }


  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }

.container1 {
  position: relative;
  max-width: 100%;
  margin: 0 ;
}

.container1 img {vertical-align: middle;}

.container1 .content1{
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  height:100%;
  padding: 10%;

}

.input-group{
  width:50%;
}

.carousel-inner img {
    /*-webkit-filter: grayscale(90%);
    filter: grayscale(90%);  make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  padding: 0px;

}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}



.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

/**********************************************************model*/

.bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
.bg-2 {
    background: #f4511e;
    color: white;/*#f4511e*/
    width:100%;
  }
  .bg-1 h31 {color: #fff;}
  .bg-1 p1 {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn1 {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn1:hover, .btn1:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, .h41, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
.leftLst .rightLst{

}
/******************************************* try ***********************/
.MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
/***************************************************************************************************************************/
#more {display: none;}

hr.new1 {
  border-top: 1px solid white;
}
  /* Tooltip */
  .test + .tooltip > .tooltip-inner {
    background-color: #f2f2f2; 
    color: black; 
    border: 1px solid black; 
    padding: 15px;
    font-size: 10px;
  }
  /* Tooltip on top */
  .test + .tooltip.top > .tooltip-arrow {
    border-top: 5px solid green;
  }
  /* Tooltip on bottom */
  .test + .tooltip.bottom > .tooltip-arrow {
    border-bottom: 5px solid blue;
  }
  /* Tooltip on left */
  .test + .tooltip.left > .tooltip-arrow {
    border-left: 5px solid red;
  }
  /* Tooltip on right */
  .test + .tooltip.right > .tooltip-arrow {
    border-right: 5px solid black;
  }



  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">OVERVIEW</a></li>
        <li><a href="#food">RESTAURANTS & BAR</a></li>
        <li><a href="#rooms">ROOMS</a></li>
        <li><a href="#meetings">MEETINGS & EVENTS</a></li>
        <!--<li><a href="#pricing">PRICING</a></li>-->
        <li><a href="#reviews">REVIEWS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Portflio</a></li>
            <li><a href="#attractions">Nearby Attractions</a></li>
            <li><a href="#">Help</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<!--
<div class="jumbotron text-center">
  <h1>Minakshi Palace</h1> 
  <p>We specialize in blablabla</p> 
  <center>
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
  <center>
</div>
-->

<!-- new created -- Container home-->
<div class="">
<div class="container1">
  <img src="imgs/pexels-alexy-almond-3756523.jpg" alt="Notebook" style="width:100%; height:100%; allign:center">
  <div class="content1">
	  <center>
		  <h1>Minakshi Palace</h1>
		  <p>We specialize in blablabla</p> 
		  
		  <form>
		    <div class="input-group">
		      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
		      <div class="input-group-btn">
			<button type="button" class="btn btn-danger">Subscribe</button>
		      </div>
		    </div>
		  </form></br>
                  <button class="" data-toggle="modal" data-target="#login" style="margin:10px">
                  <a href="#">Login</a>
                  </button> 
                  <button class="" data-toggle="modal" data-target="#signup" style="margin:10px">
                  <a href="#">Sign Up</a>
                  </button>  

	  </center>
	  <!-- Modal login-->
	  <div class="modal fade" id="login" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">×</button>
		  <h4 class="h41"><span class="glyphicon glyphicon-user"></span> Login</h4>
		</div>
		<div class="modal-body">
		  <form role="form">
		    <div class="form-group">
		      <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email Id</label>
		      <input type="email" class="form-control" id="psw" placeholder="Enter Email Id">
		    </div>
		    <div class="form-group">
		      <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
		      <input type="password" class="form-control" id="usrname" placeholder="Enter Password">
		    </div>
		      <button type="submit" class="btn btn-success">Login 
		        <span class="glyphicon glyphicon-ok"></span>
		      </button>
		  </form>
		</div>
		<div class="modal-footer">
		  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
		    <span class="glyphicon glyphicon-remove"></span> Cancel
		  </button>
		  <p><a href="#">Forgot password?</a></p>
		</div>
	      </div>
	      <!-- Modal content end-->
	    </div>
	  </div>
	 <!-- Modal end-->

         <!-- Modal signup-->
	  <div class="modal fade" id="signup" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
		<div class="modal-header"></br>
		  <button type="button" class="close" data-dismiss="modal">×</button>
		  <h4 class="h41"><span class="glyphicon glyphicon-user"></span> Sign Up</h4>
		</div>
		<div class="modal-body">
		  <form role="form">
		    <div class="form-group">
		      <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email Id</label>
		      <input type="email" class="form-control" id="usrname" placeholder="Enter Email Id">
		    </div>
		    <div class="form-group">
		      <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
		      <input type="password" class="form-control" id="psw" placeholder="Enter Password">
		    </div>
		    <div class="form-group">
		      <label for="conpsw"><span class="glyphicon glyphicon-lock"></span> Confirm Password</label>
		      <input type="password" class="form-control" id="conpsw" placeholder="Enter Confirm Password">
		    </div>
		      <button type="submit" class="btn btn-success">Sign Up
		        <span class="glyphicon glyphicon-ok"></span>
		      </button>
		  </form>
		</div>
		<div class="modal-footer">
		  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
		    <span class="glyphicon glyphicon-remove"></span> Cancel
		  </button>
		  <p style="color:black">Already have account <a href="#">Sign In?</a></p>
		</div>
	      </div>
	      <!-- Modal content end-->
	    </div>
	  </div>
	  <!-- Modal end-->
<center>
	  <h1>Heading</h1>
	  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>

<center>
  <div class="container bg-2">
     <div class="row">
        <h3>Check Availability</h3>
     </div>
     <form>
     <div class="row">
     <div class="col-sm-3"> 
		<div class="form-group">
		    <label for="checkin">Check-in:</label>
		    <input type="date" class="form-control" id="checkin">
		</div>
     </div>
     <div class="col-sm-3"> 
		<div class="form-group">
		    <label for="checkout">Check-out:</label>
		    <input type="date" class="form-control" id="checkout">
		</div>
     </div>
     <div class="col-sm-2"> 
		<div class="form-group">
		    <label for="checkin">Occupacy</label>
		    <input type="number" class="form-control" id="checkin">
		</div>
     </div>
     <div class="col-sm-2"> 
		<div class="form-group">
		    <label for="checkin">Special Rates:</label>
		    <select class="form-control" name="rates" id="rates">
			  <option value="Low Rate">Low Rate</option>
			  <option value="Medium Rate">Medium Rate</option>
			  <option value="High Rate">High Rate</option>

		   </select>
		</div>
     </div>
     <div class="col-sm-2"> 
		<div class="form-group">
		    <label for="checkin">  </label></br>
		    <input type="button" value="Check Availability" class="btn btn-danger" id="checkin">
		</div>
      </div>
      </div>
      </form>
  </div>
  <center>



  </div><!--end of content on img -->
</div>
</div>
<!-- home end-->

 





<!--

<div class="container1">
  <img src="pexels-alexy-almond-3756523.jpg" alt="Notebook" style="width:100%; height:10%; allign:center">
  <div class="content1">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
<p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p><p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div>
</div>
-->

<!-- ##################################################   About   ###################################------------>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8 slideanim">
      <h2>Overview </h2><br>
      <h4> Relax at our serene resort hotel near Cavelossim Beach</h4><br>
      <p>Located 45 minutes from Goa International Airport (GOI) and featuring brightly colored architecture and lush gardens, the Radisson Blu Resort Goa Cavelossim Beach creates an atmosphere that invites relaxation. Just a 10-minute walk from the Arabian Sea, our hotel makes your Cavelossim Beach getaway a breeze.</p>
</p>Our resort offers plenty of on-site water fun with two sparkling pools, including one just for kids. For more personalized attention while you unwind, take advantage of wellness treatments at Sohum Spa. After a day in the water, refuel at our three on-site restaurants or bar before heading to one of our 132 rooms and suites for the night. With nearly 4,000 square meters of meeting space, our hotel is also ideal for hosting an exotic destination wedding or an international conference.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <!--<span class="glyphicon glyphicon-signal logo"></span>-->
        <img src="imgs/hotel.jpeg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
      </div>
<!--
      <div class="row">
        <img src="pexels-alexy-almond-3756523.jpg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
      </div>-->
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8 slideanim">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>



<!-- ########### added ###################   Restourant   ###################################------------>
<!-- Carousal added -->
<div id="food" class="container-fluid">
  <h2 style="text-align:center">RESTAURANTS AND BAR</h2>
  <p>Treat yourself to delicious international and Indian cuisine at any of our three on-site restaurants, Upper Deck, Lucio, and Sagres. Enjoy an abundance of buffets and à la carte specialties that feature traditional Portuguese-inspired dishes. In the evening, enjoy live music and handcrafted cocktails at our resort’s casual bar.</p>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
        <center><img src="imgs/rest4.jpeg" alt="Los Angeles" style="width:50%; height:50%"></center>
        <div class="carousel-caption">
          <h3>Restourant</h3>
          <p>Delicious international and Indian cuisine!</p>
        </div>
      </div>

      <div class="item">
        <center><img src="imgs/bar1.jpeg" alt="Chicago" style="width:50%; height:50%"></center>
        <div class="carousel-caption">
          <h3>Bar</h3>
          <p>Enjoy live music and handcrafted cocktails!</p>
        </div>
      </div>
    
      <div class="item">
        <center><img src="imgs/bar2.jpeg" alt="New York" style="width:50%; height:50%"></center>
        <div class="carousel-caption">
          <h3>Aesthetic ambience</h3>
          <p>Enjoy Yourself!</p>
        </div>
      </div>
 
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>






<!-- ##################################################   menue   ###################################------------>
<!-- Container -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Menue Card</h3>
    <p1 class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p1>
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
      <li class="list-group-item">November <span class="badge">3</span></li> 
    </ul>
    
    <div class="row text-center">

      <div class="col-sm-4">
        <div class="thumbnail slideanim">
          <img src="imgs/eggdish.jpeg" alt="Paris" width="400" height="300">
          <p><strong>Starters</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn1" data-toggle="modal" data-target="#myModal">View</button>
        </div>
      </div>

      <div class="col-sm-4 ">
        <div class="thumbnail slideanim">
          <img src="imgs/main2.jpeg" alt="New York" width="400" height="300">
          <p><strong>Main Course</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn1" data-toggle="modal" data-target="#myModal">View</button>
        </div>
      </div>

      <div class="col-sm-4 ">
        <div class="thumbnail slideanim">
          <img src="imgs/cake2.jpeg" alt="San Francisco" width="400" height="300">
          <p><strong>Desserts</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn1" data-toggle="modal" data-target="#myModal">View</button>
        </div>
      </div>

    </div>
        <!--Book table-->
	<center><button class="btn btn-danger btn-alert"data-toggle="modal" data-target="#myModal"><h1>Book Table</h1></button></center>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="h41"><span class="glyphicon glyphicon-lock"></span> Table Booking</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>




	




<!-- Container (Portfolio Section) -->
<!-- ##################################################   room cards   ###################################------------>

<div id="rooms" class="container-fluid text-center">
<hr class="">
	<div class="row">
    <h2 class="text-center">Rooms</h2>
	<h3> Our Cavelossim Beach hotel rooms overlook the gardens and pool</h3>
	<p>Each of the 132 colorful hotel rooms and suites at the Minakshi Palace Resort Goa Cavelossim Beach features serene views of our manicured gardens and sparkling pool. After a day at the beach, you can wash away the sand and salt under the rain shower in your modern bathroom, and then relax on a plush mattress while enjoying a meal from room service. Watch your favorite shows on the flat-screen TV or upload photos using free Wi-Fi. Upgrade to a suite and enjoy the extra space in your separate living room, ideal for entertaining friends.
</p>
</div>
	<div id="" class="container-fluid bg-1">
		<div class="MultiCarousel" data-items="1,3,3,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
			    <div class="row text-center slideanim">

			     <div class="col-sm-4 item">
				<div class="thumbnail">
				  <img src="imgs/bed1.webp" alt="Paris" width="400" height="300">
				  <p><strong>Superior Room</strong></p>
				  <p><span class="glyphicon glyphicon-move" aria-hidden="true"></span>size: 344 ft² max. | 
				     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>guests: 3 adults</p>

				     <div class="row">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
					</br></br>
				      </div>
				  <button class="btn1" data-toggle="modal" data-target="#myModal">View Details</button>
				</div>
			      </div>

			     <div class="col-sm-4 item">
				<div class="thumbnail">
				  <img src="imgs/bed2.jpeg" alt="Paris" width="400" height="300">
				  <p><strong>Deluxe Room</strong></p>
				  <p><span class="glyphicon glyphicon-move" aria-hidden="true"></span>size: 367 ft² max. | 
				     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>guests: 3 adults</p>

				     <div class="row">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
					</br></br>
				      </div>

				  <button class="btn1" data-toggle="modal" data-target="#myModal">View Details</button>
				</div>
			      </div>

			     <div class="col-sm-4 item">
				<div class="thumbnail">
				  <img src="imgs/bed3.webp" alt="Paris" width="400" height="300">
				  <p><strong>Business Class Room</strong></p>
				  <p><span class="glyphicon glyphicon-move" aria-hidden="true"></span>size: 367 ft² max. | 
				     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>guests: 3 adults</p>

				     <div class="row">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
					</br></br>
				      </div>
				  <button class="btn1" data-toggle="modal" data-target="#myModal">View Details</button>
				</div>
			      </div>

			     <div class="col-sm-4 item">
				<div class="thumbnail">
				  <img src="imgs/bed6.webp" alt="Paris" width="400" height="300">
				  <p><strong>Suite</strong></p>
				  <p><span class="glyphicon glyphicon-move" aria-hidden="true"></span>size: 656 ft² max. | 
				     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>guests: 3 adults</p>

				     <div class="row">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
					</br></br>
				      </div>
				  <button class="btn1" data-toggle="modal" data-target="#myModal">View Details</button>
				</div>
			      </div>

			     <div class="col-sm-4 item">
				<div class="thumbnail">
				  <img src="imgs/bed5.webp" alt="Paris" width="400" height="300">
				  <p><strong>One-bedroom Suite</strong></p>
				  <p><span class="glyphicon glyphicon-move" aria-hidden="true"></span>size: 742 ft² max. | 
				     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>guests: 3 adults</p>

				     <div class="row">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
					</br></br>
				      </div>
				  <button class="btn1" data-toggle="modal" data-target="#myModal">View Details</button>
				</div>
			      </div>

			     

				<!--
				<div class="item">
				    <div class="pad15">
				        <p class="lead">Multi Item Carousel</p>
				        <p>₹ 1</p>
				        <p>₹ 6000</p>
				        <p>50% off</p>
				    </div>
				</div>
				
				  -->
				</div>
				
            </div>

            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
	               
        </div>
	<!--Book now-->
	<center><button class="btn btn-danger btn-alert"data-toggle="modal" data-target="#myModal"><h1>Book Now</h1></button></center>
	</div>
</div>




<!-- ##################################################   Services   ###################################------------>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-off logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="Welcome to Bar!">
      <img src="imgs/icons8-bar-100.png" style="height:15%; width:15%;">
      </a>
      <h4>BAR</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-heart logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="BREAKFAST BUFFET">
      <img src="imgs/icons8-service-bell-100.png" style="height:15%; width:15%;">
      </a>
      <h4>BREAKFAST BUFFET</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-lock logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="COST AVAILABLE">
      <img src="imgs/icons8-cost-100.png" style="height:15%; width:15%;">
      </a>
      <h4>COST AVAILABLE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-leaf logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="DRY CLEANING">
      <img src="imgs/icons8-dry-100.png" style="height:15%; width:15%;">
      </a>
      <h4>DRY CLEANING</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-certificate logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="FITNESS CENTER">
      <img src="imgs/icons8-ez-curl-bar-100.png" style="height:15%; width:15%;">
      </a>
      <h4>FITNESS CENTER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-wrench logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="EXPRESS CHECK-OUT">
      <img src="imgs/icons8-hotel-check-out-100.png" style="height:15%; width:15%;">
      </a>
      <h4 style="color:#303030;">EXPRESS CHECK-OUT</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>




<!-- ##################################################  MEETINGS AND EVENTS    ###################################------------>
<!-- Container (About Section) --><!--
<div id="meetings" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>MEETINGS AND EVENTS </h2><br>
      <h4> Host a destination wedding at our Cavelossim Beach event venues</h4><br>
      <p>Located only 45 minutes from the GOI airport and a short walk from splendid local beaches, the Radisson Blu Resort Goa Cavelossim Beach offers a unique setting against the backdrop of Goan-Portuguese architecture. <span id="dots">...</span><span id="more">Ideal for elegant weddings and special occasions, our 850-square-meter covered banquet halls can be decorated to match your theme and color scheme, and our extensive lawns are able to accommodate up to 750 attendees. For a memorable event, coordinate with our skilled catering staff to create a personalized menu featuring cuisine from across the globe. If you're planning a multimedia presentation, our venue offers a range of audiovisual solutions.</p>
<a id ="myBtn" onclick="viewmoreFunction()"  >Read more</a>

      <br><button class="btn btn-default btn-lg">Request a Proposal</button>
      <h4>Meetings</h4><br>
      <p>Combining custom catering with elegant banquet halls and expansive outdoor space, our hotel is the perfect spot for hosting meetings and events in Goa.Our professional staff can assist you in planning the details—from guest arrivals and room bookings to a departure brunch—you can be confident that your gathering will be just as you envisioned.</p>

	<h4>Venue Options</h4>
	<ul>
		<li>850 square meters of covered banquet halls</li>
		<li>3,000 square meters of open lawn space, able to accommodate up to 750 guests</li>
		<li>Executive boardroom with 10 seats</li>
		<li>Mini-conference area</li>
		<li>Pre-function area</li>
	</ul>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <div class="row">
        <img src="pexels-alexy-almond-3756523.jpg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
      </div>
      <div class="row">
        <img src="pexels-alexy-almond-3756523.jpg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
      </div>
      <div class="row">
        <img src="pexels-alexy-almond-3756523.jpg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
      </div>
    </div>
  </div>
</div>-->

<div id="meetings" class="container-fluid">
    <center><h2>MEETINGS AND EVENTS </h2></center><br>
  <div class="row slideanim">
    <div class="col-sm-8">

      <h4> Host a destination wedding at our Cavelossim Beach event venues</h4><br>
      <p>Located only 45 minutes from the GOI airport and a short walk from splendid local beaches, the Minakshi Palace Resort Goa Cavelossim Beach offers a unique setting against the backdrop of Goan-Portuguese architecture. <span id="dots">...</span><span id="more">Ideal for elegant weddings and special occasions, our 850-square-meter covered banquet halls can be decorated to match your theme and color scheme, and our extensive lawns are able to accommodate up to 750 attendees. For a memorable event, coordinate with our skilled catering staff to create a personalized menu featuring cuisine from across the globe. If you're planning a multimedia presentation, our venue offers a range of audiovisual solutions.</p>
<a id ="myBtn" onclick="viewmoreFunction()"  >Read more</a>

      <br><button class="btn btn-default btn-lg">Request a Proposal</button>
      </div>
    <div class="col-sm-4">
        <img src="imgs/meeting4.jpeg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
    </div>
  </div>

<div class="row slideanim">
    <div class="col-sm-4">
              <img src="imgs/meeting2.jpeg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
    </div>
    <div class="col-sm-8">

      <h4>Meetings</h4><br>
      <p>Combining custom catering with elegant banquet halls and expansive outdoor space, our hotel is the perfect spot for hosting meetings and events in Goa.Our professional staff can assist you in planning the details—from guest arrivals and room bookings to a departure brunch—you can be confident that your gathering will be just as you envisioned.</p>
      </div>   
  </div>

<div class="row slideanim">
    <div class="col-sm-7">

<h4>Venue Options</h4>
	<ul>
		<li>850 square meters of covered banquet halls</li>
		<li>3,000 square meters of open lawn space, able to accommodate up to 750 guests</li>
		<li>Executive boardroom with 10 seats</li>
		<li>Mini-conference area</li>
		<li>Pre-function area</li>
	</ul>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
      </div>   
    <div class="col-sm-5">
              <img src="imgs/meeting1.jpeg" alt="Chicago" style="width:100%; height:50%; margine:10px; padding:10px">
    </div>
  </div>

<!-- ##################################################   Key Features   ###################################------------>
<!-- Container (Services Section) -->
<div id="features" class="container-fluid text-center">
  <h2>KEY FEATURES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-off logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="3 meeting room">
      <img src="imgs/icons8-meeting-room-100.png" style="height:15%; width:15%;">
      </a>
      <h4>3 meeting room</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-heart logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="750 person max. capacity">
      <img src="imgs/icons8-safety-collection-place-100.png" style="height:15%; width:15%;">
      </a>
      <h4>750 person max. capacity</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-lock logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="Catering service">
      <img src="imgs/icons8-service-bell-100.png" style="height:15%; width:15%;">
      </a>
      <h4>Catering service</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-leaf logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="Free Wi-Fi">
      <img src="imgs/icons8-wi-fi-100.png" style="height:15%; width:15%;">
      </a>
      <h4>Free Wi-Fi</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-certificate logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="Boardroom">
      <img src="imgs/icons8-financial-dynamic-presentation-100.png" style="height:15%; width:15%;">
      </a>
      <h4>Boardroom</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-wrench logo-small"></span>-->
      <a class="test" data-toggle="tooltip" data-placement="right" title="Reception">
      <img src="imgs/icons8-reception-100.png" style="height:15%; width:15%;">
      </a>
      <h4 style="color:#303030;">Reception</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>
<!-- ##################################################   Attractions   ###################################------------>
<!-- Container (Pricing Section) -->
<div id="attractions" class="container-fluid">
  <div class="text-center">
    <h2>Nearby Attractions</h2>
    <h4> From beaches to temples, discover things to do near Cavelossim Beach, Goa</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Colva Beach & Palolem Beach      </h1>
        </div>
        <div class="panel-body">
          <p>Enjoy the white sand and the sea in this idyllic, palm-fringed beach, popular with swimmers and sunbathers. The beach town is also known for street food and pubs.</p>

        </div>
        <div class="panel-footer">
          <h3>Distance</h3>
          <h4>7.6 mi / 12.23 km from the hotel</h4>
          <button class="btn btn-lg">Know More</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basilica of Bom Jesus</h1>
        </div>
        <div class="panel-body">
          <p>Designated a UNESCO World Heritage Site, this Baroque Roman Catholic basilica holds the relics of St. Francis Xavier.It is located in Old Goa, former capital of Portuguese India.</p>
        </div>
        <div class="panel-footer">
          <h3>Distance</h3>
          <h4>22.58 mi / 36.34 km from the hotel</h4>
          <button class="btn btn-lg">Know More</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Shri Mangeshi Temple</h1>
        </div>
        <div class="panel-body">
          <p>Explore this elaborate temple complex and learn about its Portuguese history. The main temple is dedicated to Bhagavan Manguesh, an incarnation of Shiva.</p>
        </div>
        <div class="panel-footer">
          <h3>Distance</h3>
          <h4> 18.67 mi / 30.05 km from the hotel </h4>
          <button class="btn btn-lg">Know More</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- ##################################################   Reviews   ###################################------------>
<div id="reviews" class="container-fluid slideanim">
  <center><h2>What our customers say</h2></center>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>



<!-- ##################################################   Contact   ###################################------------>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><img src="imgs/icons8-marker-100.png" style="height:4%; width:4%;"> Goa, India</p>
      <p><img src="imgs/icons8-phone-100.png" style="height:4%; width:4%;"> +00 1515151515</p>
      <p><img src="imgs/icons8-email-open-100.png" style="height:4%; width:4%;"> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="imgs/map.jpg" class="w3-image w3-greyscale-min slideanim" style="width:100%">

<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-4 slideanim">
      <h3>Contact Hotels</h3>
      <p><img src="imgs/icons8-phone-100.png" style="height:4%; width:4%;"> +00 1515151515</p>
      <button class="btn btn-danger">Need Help?</button>
    </div>
    <div class="col-sm-4 slideanim">
      <h3>Follow us on social media </h3>
      <div class="row">
          <img src="imgs/twitter.webp"width="20px"height="20px">
        <img src="imgs/linkedin.webp"width="20px"height="20px">
        <img src="imgs/insta.webp"width="20px"height="20px">
        <img src="imgs/facebook.webp"width="20px"height="20px">
        <img src="imgs/whatsapp.webp"width="20px"height="20px"></br></br>
      </div>
    </div>
    <div class="col-sm-4 slideanim">
      <h3>Never miss out on our most popular deals</h3><br>
      <center>
      <form>
            <div class="row">
	    <div class="input-group">
	      <input type="email" class="form-control" size="100%" placeholder="Email Address" style="" required>
	      <div class="input-group-btn">
		<button type="button" class="btn btn-danger">Subscribe</button>
	      </div>
	    </div>
            </div>
     </form>
     <center>
    </div>
  <div>
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>The Minakshi Palace <a href="" title="Visit us">Welcome</a></p>
</footer>

<script>
$(document).ready(function(){
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  

  // added align model center

      function alignModal(){

        var modalDialog = $(this).find(".modal-dialog");

        // Applying the top margin on modal dialog to align it vertically center 

        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));

    }

    // Align modal when it is displayed

    $(".modal").on("shown.bs.modal", alignModal);

    // Align modal when user resize the window

    $(window).on("resize", function(){

        $(".modal:visible").each(alignModal);

    }); 



  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });

	/***************************** try ************************/


    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

   $('[data-toggle="tooltip"]').tooltip();   


})
function viewmoreFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

</script>

</body>
</html>
