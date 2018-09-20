<?php



$db = pg_connect("host=ec2-54-227-244-12.compute-1.amazonaws.com  port=5432 dbname=d544g2lkvj2uqn user=jwvfktfyuyftwy password=cd2fd6c6fe21c91ec21198788e2eb438b39d7b609127f5dde02af95849278ecc");

if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}

$query = "SELECT LastName, FirstName, Email__c, Mobile__c FROM salesforce.account where FirstName =$_POST['firstname'] AND LastName=$_POST['lastname'] AND Email__c = $_POST['email'] AND Mobile__c =$_POST['mobile']";
$result = pg_query($query);
echo $result;
/*if(sizeof($result)){
echo $result;
}
else{
	echo "<script type='text/javascript'>alert(\"No Records to display!!!!\")</script>";
}*/
?>
