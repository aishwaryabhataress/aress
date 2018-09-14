<html>
<title>Car Loan</title>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    text-align: right;
}
  
  input[type = number]{
    width: 300px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
.container{
	height:1500 px; 
	width:850px; 
	align:center;
	text-align:center;
	margin-left:auto;
	margin-right:auto;
	margin-top:50px;
	
}
</style>
</head>
  <?php
    $loanprincipal=$tenure="";
  ?>
<body>
   <!-- <div class="container">
  <form action="loanapplication.php" method="post">
    <div style="display:inline-block;width:100%;">
      		<div style="width:25%;float:left;text-align:right;"> 
	      		<label for="loanprincipal">Loan Amount</label>
		 </div>
		 <div style="width:75%;float:left;"> 
			 <input type="number" name="loanprincipal">
		 </div>
	  </div>
   <br><br>
	 <div style="display:inline-block;width:100%;">
      		<div style="width:25%;float:left;text-align:right;"> 
	      		<label for="tenure"> Tenure in Months</label>
		 </div>
		 <div style="width:75%;float:left;"> 
			 <input type="number" name="tenure">
		 </div>
	  </div>
    <br><br>
	<div style="display:inline;color:#333;font-size: 1em;font-style: italic;border-radius: 50px;padding: 8px 16px;background-color:#04C5F9; color:white;">
		<button onClick="location.href='loanapplication.php'">Apply for loan</button> </div>
  </form>
    </div>-->
	<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
