<?php
session_start();
  $db = pg_connect("host=ec2-54-235-212-58.compute-1.amazonaws.com port=5432 dbname=d11ltu6a8ne38d user=pkdtdgarpbsxgk password=8566866e71a89e3f3eadc11f4960e689801bfad888b96279954e1a09f94ba443");
if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}

 //$loanprincipal=$tenure=$annualincome="";


$value = $_GET['button_val'];
echo $_GET['button_val'];
echo $value;
echo $_SESSION['carloan'];
$carloan = $_POST['carloan'];
echo $carloan;
$principal = $_POST['loanprincipal'];
$ten = $_POST['tenure'];
$incme = $_POST['annualincome'];
echo $_POST['annualincome'];
?>
