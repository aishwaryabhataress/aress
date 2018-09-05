<?php
$db = pg_connect("host=ec2-54-227-244-12.compute-1.amazonaws.com  port=5432 dbname=d544g2lkvj2uqn user=jwvfktfyuyftwy password=cd2fd6c6fe21c91ec21198788e2eb438b39d7b609127f5dde02af95849278ecc");
if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}
$query = "INSERT INTO salesforce.contact(FirstName, LastName,Phone, MobilePhone, Email, Password__c,User_Key__c) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[phonenumber]', '$_POST[mobilenumber]','$_POST[emailid]','$_POST[password]','$_POST[userkey]');";
$result= pg_query($query);
$flag = 0;
$query1 = "SELECT Email ,Password__c FROM salesforce.contact;";
$result1 = pg_query($query1);
while($row = pg_fetch_row($result1))
{
	if($row[0] == $_POST['emailid'])
	{
		$flag = 1;
		//echo "<script type='text/javascript'>alert(\"Sign Up Successful!!\")</script>";
		//include("index.php");
		header("Location:index.php");
		exit;
	}
}
if($flag == 0)
{
	echo "<script type='text/javascript'>alert(\"Sign Up Failed! Enter proper emailid and userkey\")</script>";
	include("index.php");
}
?>
