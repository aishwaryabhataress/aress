<?php
// Start the session
session_start();
?>

<html>
	<title> Home Page </title>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

	
.slideshow-container {
  max-height: 800px;
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.slideshow-container .bttn {
    display: inline-block;
    /* top: 80%; */
    /* left: 110%; */
    /* bottom: 39px; */
    /* margin-left: 190px; */
    /* z-index: 1111; */
    margin-top: 90px;
    position: relative;
    background-color: #555;
    color: white;
    font-size: 20px;
    font-family: sans-serif;
    font-style: oblique;
    cursor: pointer;
    border-radius: 7px;
    background-color: #00b4cc;
    text-align: center;
}

.slideshow-container .bttn:hover {
    background-color: black;
}


.prev {
  cursor: pointer;
	float: left;
  color: black;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

.next {
  cursor: pointer;
  width: auto;
 float: right;
  color: black;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

<!--.prev:hover, .next:hover {
  background-color: #ffffff;
    opacity: .4;
}-->

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
	
	
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
	
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #04C5F9;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #04C5F9;
}	
.button {
    background-color: #4CAF50; 
	border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 550px;
    cursor: pointer;
    border-radius: 12px;
	float: center;
}

.para{
     border-style: hidden;
     border-width: 10px;
     
     padding: 10px;
    
     font-style: oblique;
     text-align:justify;
}

	.col-sm-12{
		width:100%;
	}
	
	
	

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}



.searchTerm {
  float: left;
  width: 100%;
  border: 3px solid #00B4CC;
  padding: 5px;
  
  border-radius: 5px;
 
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  position: absolute;  
  right: -50px;
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
   width: 46%;
    position: relative;
    margin-top: 119px;
    left: 50%;
    transform: translate(-50%, -50%);

}
	.fa-search:before {
    content:"\f002";
}

</style>
	<script type="text/javascript">
				
		function OnClickButton() {
		var fired_button = $("button").val();
    		alert(fired_button);
		window.location.href = "validateloan.php?button_val=" + fired_button;
	});
	</script>
</head>
<?php
	$firstname = $lastname = $email = $mobile = "";
	?>
<body>
<div class="header">
	<div class="col-sm-12">
		<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" class="img-responsive" style="height:100px;width:200px;">
		<a href="index.php"><button class="btn btn-link" type="logout" name="action" value="logout" style="border-radius:10px;font-size: 12px;text-align:center; float:right; background-color:#04C5F9; color:white;">Log Out</button> </a>
	</div>
</div>

<nav class="navbar navbar-default" style="width:100%;">
  <div class="col-sm-12">
     <ul class="col-sm-12" >
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="home.php">Contact</a></li>
      <li><a href="home.php">About Us</a></li>
	
    </ul>
  </div>
</nav>
<br>

	 

<div class="slideshow-container">
<div class="mySlides fade">
	
	<div class="numbertext">1 / 6</div>
		<div class="col-sm-12">
		<img src="http://www.jucbwai.com/images/Vehicle-loan.jpg" style="width:100%" class="img-responsive"></div>
		<!--<div style="display: inline-block; width:30%;">
			
		<button class="bttn"   onClick="location.href='carloan.php'" value="carloan" id="carloan" name="carloan">Car loan</button> 
		</div> 
		<div style="display: inline-block; width:30%; margin-left: 10px;"> 
			<button class="bttn" onClick="location.href='carloan.php'" value="bikeloan" name="bikeloan" >Bike loan</button> 
		</div>-->
	</div>
	<div class="mySlides fade">
		
		<div class="numbertext">2 / 6</div>
			<img src="https://www.sbiloanrates.com/wp-content/uploads/2017/03/home-loan-emi-calculator-india.jpg" style="width:100%" class="img-responsive">
 			<!--<div style="display: inline-block; width:30%;">	
				<button class="bttn" onClick="location.href='carloan.php'">Personal</button>  
			</div>
			<div style="display: inline-block; width:30%; margin-left: 10px;"> 
				<button class="bttn" onClick="location.href='carloan.php'">Commercial</button> 
			</div>	-->
		</div>
		<div class="mySlides fade">
  			<div class="numbertext">3 / 6</div>
  				<img src="http://www.dealsofloan.com/wp-content/uploads/2016/08/Marriage-Loans-Market-in-India1.jpg" style="width:100%;" class="img-responsive">
				<!--<div style="display: inline-block; width:30%;">	
					<button class="bttn" onClick="location.href='carloan.php'">Marriage loan</button>  
				</div>-->
			</div>
		<div class="mySlides fade">
  			<div class="numbertext">4 / 6</div>
  				<img src="https://s3-ap-southeast-1.amazonaws.com/buddy4study/blog/uploads/2018/05/07163939/How-to-manage-your-education-loan_Buddy4Study.jpg" style="width:100%;" class="img-responsive">
				<!--<div style="display: inline-block; width:30%;">	
					<button class="bttn" onClick="location.href='carloan.php'">Education loan</button>  
				</div>-->
 			</div>
		<div class="mySlides fade">
  			<div class="numbertext">5 / 6</div>
  				<img src="http://www.waranabank.com/uploads/waranabank/banner6.png" style="width:100%;" class="img-responsive">
				<!--<div style="display: inline-block; width:30%;">	
					<button class="bttn" onClick="location.href='carloan.php'">Farming loan</button>  
				</div>-->
 			</div>
		<div class="mySlides fade">
  			<div class="numbertext">6 / 6</div>
  				<img src="https://qph.fs.quoracdn.net/main-qimg-36323580662716ccc05eb4b8355899d5" style="width:100%;" class="img-responsive">
				<!--<div style="display: inline-block; width:30%;">	
					<button class="bttn" onClick="location.href='carloan.php'">Work Capital loan</button>  
				</div>-->
			</div>
	<div style="width: 100%; position: relative; top: -105px;">
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>
	<div style="text-align:center">
  		<span class="dot" onclick="currentSlide(1)"></span> 
  		<span class="dot" onclick="currentSlide(2)"></span> 
  		<span class="dot" onclick="currentSlide(3)"></span>
		<span class="dot" onclick="currentSlide(4)"></span>
		<span class="dot" onclick="currentSlide(5)"></span>
		<span class="dot" onclick="currentSlide(6)"></span>
		
	</div>
	<!--<div class="col-sm-12 col-lg-4 col-lg-4" >
	
	<img src = "http://www.businessnews.com.lb/cms/Portals/2/Feb2010/grow%20SMEs.jpg" style="border-radius:40px;width: 100%; margin-top:90px;" class="img-responsive"/> 
	</div>
	
	<div class="para col-sm-12 col-lg-8 col-lg-8" >
		<p>
		 Microfinance, also known as microcredit, is a financial service that offers loans, savings and insurance to entrepreneurs and small business owners who don't have access to traditional sources of capital, like banks or investors. 
		The goal of microfinancing is to provide individuals with money to invest in themselves or their business.
		"Microfinance focuses on meeting the financial needs of populations that are financially underserved," said Tarsava.
		"These are individuals who usually lack the credit or resources to secure a loan and are unlikely to get approval from traditional banks. 
		Typically, these consumers are seeking small-denomination loans … to finance the purchase of a specific equipment, or the capital to start a small business."
		</p>
	</div>-->
	
	<!--<div class="wrap">
		<div style="text-align: center; font-size: 20px;font-weight:bold;font-family: 'Open Sans', sans-serif; font-style: oblique;">Already a Customer?</div>
   		<div class="search">
   		   <input type="text" class="searchTerm" placeholder="Search Here">
   			   <button type="submit" class="searchButton">
   			     <i class="fa fa-search"></i>
    			   </button>
   		</div>
	</div>-->
	
	
	<div style="text-align: center; font-size: 20px;font-weight:bold;font-family: 'Open Sans', sans-serif; font-style: oblique;">Already a Customer?</div>
	
	<form action="" method="POST">
		<div class="form-group">
      			<label for="firstname">First Name:</label>
      				<input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
    		</div>
    		<div class="form-group">
      			<label for="lastname">Last Name:</label>
      				<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
    		</div>
     		<div class="form-group">
      			<label for="email">Email:</label>
      				<input type="email" class="form-control" id="email" placeholder="Email" name="email">
   		</div>
		<div class="form-group">
      			<label for="mobile">Mobile:</label>
      				<input type="number" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
   		</div>
	  <button type="Search" class="btn btn-default">Search</button>
	
	</form>
	
	
	<div><button class="bttn" onClick="location.href='carloan.php'">Create New Customer</button>
	<button class="bttn" onClick="location.href='carloan.php'">Create New Customer</button>
	</div>
	
	
</div>
	

	

	
<!--<a href="loanapplication.php"><button class="button" type="Apply for Loan" name="action" value="Apply for Loan" style=" float:center; margin-left:700px; margin-top: 100px; text-align:center; background-color:#04C5F9; color:white;">Apply for Loan</button> </a>   -->

	
<script>
	
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
			      slides[i].style.display = "none";  
  			   }
  	  for (i = 0; i < dots.length; i++) {
  	    dots[i].className = dots[i].className.replace(" active", "");
  	  }
  		slides[slideIndex-1].style.display = "block";  
  		dots[slideIndex-1].className += " active";
	}
		
</script>	
</body>
</html>
<?php
	
?>
