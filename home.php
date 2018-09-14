<html>
	<title> Home Page </title>
<head>
<style>
.header{
}
.logo{
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
            margin-left:500px;
            margin-top :-300px;
           padding-left: 80px;
            font-size: 25px;
             font-color:#F5330C;
            font-style: oblique;}
	text-align:justify;
	
</style>
</head>
<body>
<div class="header">
<div class="logo">
<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:100px;width:200px;">
<a href="index.php"><button class="button" type="logout" name="action" value="logout" style="border-radius:10px;font-size: 12px;text-align:center; float:right; background-color:#04C5F9; color:white;">Log Out</button> </a>
	</div>
</div>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<br>

	

	<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

	
	
	
	/*<div>
<img src = "http://www.businessnews.com.lb/cms/Portals/2/Feb2010/grow%20SMEs.jpg" style="width:400px; height:280px;border-radius:40px; margin-top:90px;"/> 
<div class="para">
<p>
 Microfinance, also known as microcredit, is a financial service that offers loans, savings and insurance to entrepreneurs and small business owners who don't have access to traditional sources of capital, like banks or investors. 
		The goal of microfinancing is to provide individuals with money to invest in themselves or their business.
		"Microfinance focuses on meeting the financial needs of populations that are financially underserved," said Tarsava.
		"These are individuals who usually lack the credit or resources to secure a loan and are unlikely to get approval from traditional banks. 
		Typically, these consumers are seeking small-denomination loans … to finance the purchase of a specific equipment, or the capital to start a small business."

</p>
</div>
</div>*/
	
<br><br><br>	
	
<a href="loanapplication.php"><button class="button" type="Apply for Loan" name="action" value="Apply for Loan" style=" float:center; margin-left:700px; margin-top: 100px; text-align:center; background-color:#04C5F9; color:white;">Apply for Loan</button> </a>   

	
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
