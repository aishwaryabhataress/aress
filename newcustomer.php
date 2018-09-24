<html>
  <head>
    <title>Create Customer</title>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
       .container{
	        height:1500 px; 
		width:822px; 
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
	
  <body>
    <form method="POST" action="createcustomer.php">
      <div class = "container">
	  <div style="display:inline-block;width:100%;">
      		<div style="width:25%;float:left;text-align:right;"> 
	      		<label for="salutation">Salutation</label> 
		 </div>
		 <div style="width:75%;float:left;">  
			 <select name="salutation">
	  			<option value="default">Select</option>
				<option value="Mr.">Mr.</option>
				<option value="Ms.">Ms.</option>
				<option value="Mrs.">Mrs.</option>
			</select>
		  </div>
	  </div>
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
	      		<label for="email"> Email</label>
		</div>
		<div style="width:75%;float:left;">
			<input type="text" name="email">
		</div> 
	 </div>
	  <br><br>
	<div style="display:inline-block;width:100%;">
      		<div style="width:25%;float:left;text-align:right;">
	      		<label for="mobile"> Mobile</label>
		</div>
		<div style="width:75%;float:left;">
			<input type="number" name="mobile">
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
		<br><br>
	<div style="width:100%; display: inline;">
		<div style="width: 35%; margin: 0 auto; margin-left: 336px; margin-top: 150px;">
	  		<input class="my-button" type="submit" name="submit" value="Submit" style=" text-align:center; background-color:#04C5F9; color:white;"/>
	  		<a href="home.php"> <input type="button" class="my-button" name="back" value="Back" onclick="home.php" style="text-align:center; background-color:#04C5F9; color:white;"/></a>
		 </div>
	</div>
	
       </div>
    </form>
  </body>
</html>
