<html>
<head></head>
<?php 
	$db = pg_connect("host=ec2-54-227-244-12.compute-1.amazonaws.com  port=5432 dbname=d544g2lkvj2uqn user=jwvfktfyuyftwy password=cd2fd6c6fe21c91ec21198788e2eb438b39d7b609127f5dde02af95849278ecc");
	if (!$db) 
	{
		echo "An error occurred.\n";
		exit;	
	}
	$personid = '0121J000000qq0sQAA';
	$query = "INSERT INTO salesforce.Account(FirstName,LastName,Salutation, RecordTypeId,  Email__c, Mobile__c , BillingStreet,BillingCity,BillingState,BillingPostalCode,BillingCountry) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[salutation]','$personid', '$_POST[email]','$_POST[mobile]','$_POST[street]','$_POST[city]','$_POST[state]','$_POST[postalcode]','$_POST[country]');";
	$result= pg_query($query);
	echo "<script type='text/javascript'>alert('Customer created successfully!!!')</script>";
	include("home.php");
	return $db;
	
	?>
  </html>
