<?php
$db = pg_connect("host=ec2-54-227-244-12.compute-1.amazonaws.com  port=5432 dbname=d544g2lkvj2uqn user=jwvfktfyuyftwy password=cd2fd6c6fe21c91ec21198788e2eb438b39d7b609127f5dde02af95849278ecc");if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}
$query = "INSERT INTO salesforce.Loan_Application__c(Applicant_Name__c	, Birth_Date__c, Age__c, Address__c, Email_Id__c, Mobile__c,Name, Loan_Type__c, Loan_Amount__c) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[phonenumber]', '$_POST[mobilenumber]','$_POST[emailid]','$_POST[password]','$_POST[userkey]');";
