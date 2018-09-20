<?php



$db = pg_connect("host=ec2-54-227-244-12.compute-1.amazonaws.com  port=5432 dbname=d544g2lkvj2uqn user=jwvfktfyuyftwy password=cd2fd6c6fe21c91ec21198788e2eb438b39d7b609127f5dde02af95849278ecc");

if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}
$FirstName =$_POST['firstname'];
$query = "SELECT LastName, FirstName, Email__c, Mobile__c FROM salesforce.account ";
$result = pg_query($query);
echo $result;
/*if(sizeof($result)){
echo $result;
}where FirstName =$_POST['firstname'] AND LastName=$_POST['lastname'] AND Email__c = $_POST['email'] AND Mobile__c =$_POST['mobile']
else{
	echo "<script type='text/javascript'>alert(\"No Records to display!!!!\")</script>";
}*/


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["FirstName"]. " " . $row["LastName"] . "<br>";
    }
} else {
    echo "0 results";
}


?>
