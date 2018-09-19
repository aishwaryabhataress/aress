<html>
<title>Car Loan</title>
<head>
	
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
/*label {
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
}*/
.container{
	  /*  height: 1500px;
     width: 850px; 
    align: center;*/
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
	
}
</style>
</head>
  <?php
	session_start();
	echo $_GET['carloan'];
	$button_value = $_GET['carloan'];
	echo $button_value;
	echo 'hhh';
    $_SESSION["favcolor"] = $button_value;
    $loanprincipal=$tenure=$annualincome="";
	
  ?>
<body>
  
<div class="container">
 
  <form action="validateloan.php" method="post">
    <div class="form-group">
      <label for="loanapplication">Loan Amount:</label>
      <input type="number" class="form-control" id="loanprincipal" placeholder="Enter loan amount" name="loanprincipal">
    </div>
    <div class="form-group">
      <label for="tenure">Tenure In Months:</label>
      <input type="number" class="form-control" id="tenure" placeholder="Enter tenure in months" name="tenure">
    </div>
     <div class="form-group">
      <label for="tenure">Annual Income:</label>
      <input type="number" class="form-control" id="annualincome" placeholder="Enter Annual Income" name="annualincome">
    </div>
	  <button type="submit" class="btn btn-default" onClick="location.href='loanapplication.php'">Check Eligibility</button>
   </form>
	
	<button type="back" class="btn btn-default" onClick="location.href='home.php'">Back</button>
	
</div>
<input type="hidden" name="carloan" value="<?php $_POST['carloan'] ?>" />
</body>
</html>
