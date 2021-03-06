<html>

<head>
	<title>Loan Application Page </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style> 
    h2{
      text-align : center;
    }
    .container{
	height:1500 px; 
	width:870px; 
	align:center;
	padding: 50px;
	border-radius: 110px;
	background-color:white; 
	border: 3px solid black; 
	margin-left:auto;
	margin-right:auto;
	margin-top:50px;
	}
input[type=text],input[type = number], input[type = date], select, textarea {
    width: 300px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    text-align: right;
}
	  
.my-button {
    display: inline-block;
    
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
		$firstname = $lastname = $bday  =$tenure = $street = $city = $state = $postalcode= $country= $emailaddress = $usrtel = $loanname = $income = $loantype = $amount =" ";
	?>
	
<body>
  <div class="container">
  <h1>Loan Application Form</h1>
  

  <form name="loanapplication" action="applyloan.php" method="post">
    <hr style="border: 1px solid#04C5F9;" />
    <h2>Personal Information</h2><br>
     <hr style="border: 1px solid#04C5F9;" />
	  
    <br><br>
	<div style="display:inline-block;width:100%;">
      		<div style="width:25%; float: left; text-align:right;">
	       		<label for="firstname">Name</label> 
		</div>
		<div style="width:20%;float:left;"> 
			<input type="text" name="firstname" placeholder="First Name"  required>
		</div>
		<div style="width:15%;float:left; padding-left:150px;"> 
			<input type="text" name="lastname" placeholder="Last Name"  required>
		</div>
	  </div>
      	<br><br>
	  <div style="display:inline-block;width:100%;">
      		<div style="width:25%;float:left;text-align:right;">
	      		<label for="bday"> Birth Date</label>
		</div>
		<div style="width:75%;float:left;">
			<input type="date" name="bday" data-date-inline-picker="true">
		</div> 
	  </div>
    	<br><br>
	 <div style="display:inline-block;width:100%;">
      		<div style="width:25%;float:left;text-align:right;">
	     		<label for="address"> Address</label>
		 </div>
		 <div style="width:15%;float:left;"> 
			 <input type ="text" name="street" placeholder ="Street"><br><br>
			  <input type ="text" name="state" placeholder ="State"><br><br>
			  <input type ="text" name="country" placeholder ="Country">
		 </div>
		 <div style="width:15%;float:left;padding-left:200px;"> 
			 <input type ="text" name="city" placeholder ="City"><br><br>
			  <input type ="number" name="postalcode" placeholder ="Postal Code">
		 </div>
	  </div>
    	<br><br>
	 <div style="display:inline-block;width:100%;">
      		<div style="width:25%;float:left;text-align:right;"> 
	      		<label for="emailaddress"> Email</label>
		 </div>
		 <div style="width:75%;float:left;"> 
			 <input type="text" name="emailaddress">
		 </div>
	  </div>
    	<br><br>
	   <div style="display:inline-block;width:100%;">
      		<div style="width:25%;float:left;text-align:right;"> 
	       		<label for="usrtel">Mobile</label>
		</div>
		<div style="width:75%;float:left;"> 
			<input type="number" name="usrtel">
		</div>
	  </div>
    	<br><br>
	  <div style="display:inline-block;width:100%;">
      		<div style="width:25%;float:left;text-align:right;"> 
	      		<label for="income">Annual Income</label>
		</div>
		<div style="width:75%;float:left;"> 
			<input type="number" name="income">
		</div>
	  </div>
	  
     <hr style="border: 1px solid#04C5F9;" />
     <h2>Loan Information</h2><br>
     <hr style="border: 1px solid#04C5F9;" />
    <br><br>
	
	 <div style="display:inline-block;width:100%;">
      		<div style="width:25%;float:left;text-align:right;"> 
	      		<label for="loantype">Loan Type</label> 
		 </div>
		 <div style="width:75%;float:left;">  
			 <select name="loantype">
	  			<option value="default">Select</option>
				<option value="Vehicle loan">Vehicle loan</option>
				<option value="Home loan">Home loan</option>
				<option value="Marriage loan">Marriage loan</option>
				<option value="Education loan">Education loan</option>
				<option value="Farming loan">Farming loan</option>
	  			<option value="Work Capital loan">Work Capital loan</option>
			</select>
		  </div>
	  </div>
    	<br><br>
	   <div style="display:inline-block;width:100%;">
	      	<div style="width:25%;float:left;text-align:right;">  
	      		<label for="amount">Loan Amount</label>
		 </div>
		 <div style="width:75%;float:left;">  
			 <input type="number" name="amount">
		 </div>
	  </div>
	  <br><br>
	  <div style="display:inline-block;width:100%;">
	      	<div style="width:25%;float:left;text-align:right;">  
	      		<label for="tenure">Tenure</label>
		 </div>
		 <div style="width:75%;float:left;">  
			 <input type="number" name="tenure">
		 </div>
	  </div>
	  
	<br><br>
	 <div style="width:100%; display: inline;">
		<div style="width:35%;  margin: 0 auto;">
	  		<input class="my-button" type="submit" name="submit" value="Submit" style=" text-align:center; background-color:#04C5F9; color:white;"/>
	  		<a href="home.php"> <input type="button" class="my-button" name="back" value="Back" onclick="home.php" style="text-align:center; background-color:#04C5F9; color:white;"/></a>
		 </div>
	</div>
  </form>
 </div>
</body>
</html>
