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
	
	
	.slider {
        position:relative;
    }
    #moveleft, #moveright {
        position:absolute;
        width:16px;
        height:16px;
        top:50%;
        margin-top:-8px;
    }
    #moveleft {
        left:5px;
    }
     #moveright {
        right:5px;
    }
	
	
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

	
	<div class="slider">
    <input id="moveleft" type="image" src="image/left.png">
    <input id="moveright" type="image" src="image/right.png">

    <div class="img" id="textbox">

        <img src="image/welcome.png" alt="welcome" width="87" height="137" style="margin:3px 0 0 -2px">

        <img src="image/happynewyear.jpg" alt="happynewyear" width="92" height="131" style="margin:-5px 0 5px -5px">

        <img src="image/happyeaster.jpg" alt="easter" width="92" height="131" style="margin:-1px 0 5px">

        <img src="image/imarahton.jpg" alt="easter" width="92" height="131" style="margin:-1px 0 4px -3px">

        <img src="image/happybirthday.jpg" alt="easter" width="93" height="131" style="margin:-4px 0 4px -3px">

        <img src="image/summer.jpg" alt="easter" width="93" height="131" style="margin:-4px 0 4px -2px">

        <img src="image/valentine.jpg" alt="easter" width="91" height="131" style="margin:-1px 0 4px -2px">

    </div> 
	
	
	
<a href="loanapplication.php"><button class="button" type="Apply for Loan" name="action" value="Apply for Loan" style=" text-align:center; background-color:#04C5F9; color:white;">Apply for Loan</button> </a>   




</body>
</html>
