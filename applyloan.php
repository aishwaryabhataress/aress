<?php
$db = pg_connect("host=ec2-54-227-244-12.compute-1.amazonaws.com  port=5432 dbname=d544g2lkvj2uqn user=jwvfktfyuyftwy password=cd2fd6c6fe21c91ec21198788e2eb438b39d7b609127f5dde02af95849278ecc");
if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}
$date = date("Y-m-d");
$status = "New";
//$Name = $_POST['firstname']." ".$_POST['lastname'];
$address=$_POST['street']." ".$_POST['city']." ".$_POST['postalcode']." ".$_POST['state']." ".$POST['country'];
//echo $Name;
//echo $address;
$query = "INSERT INTO salesforce.Loan_Application__c(First_Name__c,Last_Name__c,Tenure_In_Months__c, Birth_Date__c,  Address__c, Email_Id__c, Mobile__c,Name, Loan_Amount__c,Application_Submission_Date__c,Annual_Income__c,Application_Status__c) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[tenure]','$_POST[bday]', '$address','$_POST[emailaddress]','$_POST[usrtel]','$_POST[loantype]','$_POST[amount]','$date','$_POST[income]','$status');";
//$query = "INSERT INTO salesforce.Loan_Application__c(Applicant_Name__c, Birth_Date__c, Age__c, Address__c, Email_Id__c, Mobile__c,Name, Loan_Type__c, Loan_Amount__c) VALUES('Shamal Dorge','1996-06-25', '22', 'Pune','sdd@gmail.com','1234567890','home loan','Home loan','123333');";

$result= pg_query($query);
//echo "Done!!!";
echo "<script type='text/javascript'>alert('Application submitted successfully!')</script>";
include("home.php");
return $db;
?>
