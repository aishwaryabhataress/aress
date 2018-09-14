<html>
<title>Car Loan</title>
<head>
<style>

</style>
</head>
  <?php
    $loanprincipal=$tenure="";
  ?>
<body>
  <form action="loanapplication.php" method="post">
    <label for="loanprincipal">Loan Amount</label>
    <input type="number" name="loanprincipal">
    <label for="tenure">Tenure In Months</label>
    <input type="number" name="tenure">
    <button onClick="location.href='loanapplication.php'">Apply for loan</button>
  </form>
</body>
</html>
