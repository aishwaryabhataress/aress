<?php

// Grab User submitted information

// Connect to the database
$db = pg_connect("host=ec2-54-227-244-12.compute-1.amazonaws.com port=5432 dbname=d544g2lkvj2uqn user=jwvfktfyuyftwy password=cd2fd6c6fe21c91ec21198788e2eb438b39d7b609127f5dde02af95849278ecc");
if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}
// Select the database to use
$flag = 0;
//$query = "SELECT Email ,Password__c FROM salesforce.contact;";
$result= pg_query("SELECT Email ,Password__c FROM salesforce.contact;");
while($row = pg_fetch_row($result))
{
	if($row[0] == $_POST['email'] )
	{
		if($row[1] == $_POST['pwd'])
		{
			$flag = 1;
			header("Location:home.php");
			exit;
		}
	}
}
if($flag == 0)
{
	echo "<script type='text/javascript'>alert(\"Wrong Username or Password\")</script>";
	include("index.php");
	//echo "<script type='text/javascript'>alert("Wrong Username or Password");window.location='index.php';</script>";
	//header("Location:index.php");
}
?>

