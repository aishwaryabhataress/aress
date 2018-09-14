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
</style>
</head>
  <?php
    $loanprincipal=$tenure="";
  ?>
<body>
  <form action="loanapplication.php" method="post">
    <label for="loanprincipal">Loan Amount</label>
    <input type="number" name="loanprincipal">
    <br>
    <label for="tenure">Tenure In Months</label>
    <input type="number" name="tenure">
    <br>
    <button onClick="location.href='loanapplication.php'">Apply for loan</button>
  </form>
</body>
</html>
