<html>
<title>Car Loan</title>
<head>
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
    <div class="container">
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
	<div style="display:inline;">
		<button onClick="location.href='loanapplication.php'">Apply for loan</button> </div>
  </form>
    </div>
</body>
</html>