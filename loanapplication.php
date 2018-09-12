<html>
<title>Loan Application Page </title>
<head>
  <style> 
    h2{
      text-align : center;
    }
    .container{
	height:1500 px; 
	width:800px; 
	align:center;
	background-color:white; 
	border: 3px solid black; 
	margin-left:auto;
	margin-right:auto;
	margin-top:50px;
	position: relative;
	display:block;	
}
	  input {
  display: inline-block;
 
}
	  
	  .my-button {
    display: inline-block;
    margin: 5px;
    
    color: #333;
    font-size: 1.5em;
    
    font-style: italic;
    border-radius: 50px;
    padding: 8px 16px;
    -moz-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
}
</style>
  </head>
	
	<?php
		$firstname = $lastname = $bday = $age = $address = $emailaddress = $usrtel = $loanname = $income = $loantype = $amount =" ";
	?>
	
<body>
  <div class="container">
  <h1>Loan Application Form</h1>
  

  <form name="loanapplication" action="applyloan.php" method="post">
    <hr style="border: 1px solid#04C5F9;" />
    <h2>Personal Information</h2><br>
     <hr style="border: 1px solid#04C5F9;" />
    <br><br> Name: <input type="text" name="firstname"  required>
       <br><br>Birth Date: <input type="date" name="bday" data-date-inline-picker="true">
    <br><br>Age: <input type="age" name="age">
    <br><br>Address: <input type ="address" name="address">
    <br><br>Email: <input type="email" name="emailaddress">
    <br><br>Mobile: <input type="tel" name="usrtel">
    <br><br>Annual Income: <input type="income" name="income">
	  
     <hr style="border: 1px solid#04C5F9;" />
     <h2>Loan Information</h2><br>
     <hr style="border: 1px solid#04C5F9;" />
    <br><br> Loan Application Name: <input type="text" name="loanname"  required>
    <br><br>Loan Type: <select name="loantype">
	  <option value="default">Select</option>

<option value="Vehicle loan">Vehicle loan</option>
<option value="Home loan">Home loan</option>
<option value="Marriage loan">Marriage loan</option>
<option value="Education loan">Education loan</option>
<option value="Farming loan">Farming loan</option>
	  <option value="Work Capital loan">Work Capital loan</option>
</select>

    <br><br>Loan Amount: <input type="amount" name="amount">
      
	  <br><br>
	  <div>
	  <input class="my-button" type="submit" name="submit" value="Submit" style="display: inline-block;float: center; margin-top: -1px;margin-left: 350px; text-align:center; background-color:#04C5F9; color:white;"/>   <a class="my-button" href="home.php"><input type="button" name="back" value="Back" style="display: inline-block;float: center; margin-top-200px;margin-left: 450px; text-align:center; background-color:#04C5F9; color:white;"/></a>
	  </div>
  </form>
	  
	 
  </div>
</body>
</html>
