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
	  input[type=text],input[type = number], input[type = date], select, textarea {
    width: 500px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

	.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
	margin-left: 100px;
}

.col-75 {
    float: left;
    width: 100%;
    margin-top: 6px;
	margin-left: 300px;
	

    
   
}


.row:after {
    content: "";
    display: table;
    clear: both;
}
	  
	  .my-button {
    display: inline-block;
    margin: 5px;
    
    color: #333;
    font-size: 1em;
    
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
	  
    <br><br>
	  <div class="row">
      <div class="col-25">
	      Name </div><div class="col-75"> <input type="text" name="firstname"  required></div> </div>
       <br><br>
	    <div class="row">
      <div class="col-25">
	      Birth Date</div><div class="col-75"> <input type="date" name="bday" data-date-inline-picker="true"></div> </div>
    <br><br>
	  <div class="row">
      <div class="col-25">
	  Age </div><div class="col-75"><input type="number" name="age"></div> </div>
    <br><br>
	    <div class="row">
      <div class="col-25">
	      Address</div><div class="col-75"> <input type ="text" name="address"></div></div>
    <br><br>
	 <div class="row">
      <div class="col-25"> 
	      Email</div><div class="col-75"> <input type="text" name="emailaddress"></div></div>
    <br><br>
	   <div class="row">
      <div class="col-25"> 
	      Mobile</div><div class="col-75"> <input type="number" name="usrtel"></div></div>
    <br><br>
	   <div class="row">
      <div class="col-25"> 
	  Annual Income</div><div class="col-75"> <input type="number" name="income"></div></div>
	  
     <hr style="border: 1px solid#04C5F9;" />
     <h2>Loan Information</h2><br>
     <hr style="border: 1px solid#04C5F9;" />
    <br><br>
	   <div class="row">
      <div class="col-25">  
	  Loan Application Name</div><div class="col-75"> <input type="text" name="loanname"  required></div></div>
    <br><br>
	  <div class="row">
      <div class="col-25"> 
	Loan Type </div><div class="col-75">  <select name="loantype">
	  <option value="default">Select</option>

<option value="Vehicle loan">Vehicle loan</option>
<option value="Home loan">Home loan</option>
<option value="Marriage loan">Marriage loan</option>
<option value="Education loan">Education loan</option>
<option value="Farming loan">Farming loan</option>
	  <option value="Work Capital loan">Work Capital loan</option>
</select>
		  </div></div>
    <br><br>
	   <div class="row">
      <div class="col-25">  
	      Loan Amount</div><div class="col-75">  <input type="number" name="amount"></div></div>
      
	  <br><br>
	  <div>
	  <input class="my-button" type="submit" name="submit" value="Submit" style="display: inline-block;float: center; margin-top: -1px;margin-left: 350px; text-align:center; background-color:#04C5F9; color:white;"/>

<a href="home.php"> <input type="button" class="my-button" name="back" value="Back" onclick="home.php" style="display: inline-block;float: center; margin-top-200px;margin-left: 360px; text-align:center; background-color:#04C5F9; color:white;"/></a>
	  </div>
  </form>
	  
	 
  </div>
</body>
</html>
