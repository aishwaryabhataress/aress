<html>
	<head>
	<title>Search Results</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<body>
<div style="border:1px solid black; postion: relative; text-align:center;">
    
<?php

$db = pg_connect("host=ec2-54-227-244-12.compute-1.amazonaws.com  port=5432 dbname=d544g2lkvj2uqn user=jwvfktfyuyftwy password=cd2fd6c6fe21c91ec21198788e2eb438b39d7b609127f5dde02af95849278ecc");

if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}


$query ="SELECT FirstName,LastName,Email__c,Mobile__c FROM salesforce.account Where FirstName = '$_POST[firstname]' AND LastName = '$_POST[lastname]' AND Email__c = '$_POST[email]' AND Mobile__c = '$_POST[mobile]';";
$result = pg_query($query);

echo "<table>";
while($row = pg_fetch_row($result)){
echo "<tr>";
echo "<td align='center' width='200'>" . $row[0] . "</td>";
echo "<td align='center' width='200'>" . $row[1] . "</td>";
echo "<td align='center' width='200'>" . $row[2] . "</td>";
echo "<td align='center' width='200'>" . $row[3] . "</td>";
echo "</tr>";}
echo "</table>";

?>
 <input type="button" class="my-button" name="back" value="Back" onclick="location.href='home.php'" style="margin-left: 700px; background-color:#04C5F9; color:white; "/>
		
	</div>
</body>
</html>
