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
    margin-left: 500px;
    cursor: pointer;
    border-radius: 12px;
	float: center;
}
</style>
</head>
<body>
<div class="header">
<div class="logo">
<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:100px;width:200px;">
<a href="index.php"><button class="button" type="logout" name="action" value="logout" style="border-radius:10px;font-size: 12px;text-align:center; float:right; background-color:#04C5F9; color:white;">Log Out</button>
	</div>
</div>
<br><br><br>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
	
	
<a href="loanapplication.php"><button class="button" type="Apply for Loan" name="action" value="Apply for Loan" style=" text-align:center; background-color:#04C5F9; color:white;">Apply for Loan</button>    




</body>
</html>
