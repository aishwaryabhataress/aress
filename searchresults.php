<html>
	<head>
	<title>Search Results</title>

	</head>

<body>
<div style="border:1px solid red;">
<?php


$db = pg_connect("host=ec2-54-227-244-12.compute-1.amazonaws.com  port=5432 dbname=d544g2lkvj2uqn user=jwvfktfyuyftwy password=cd2fd6c6fe21c91ec21198788e2eb438b39d7b609127f5dde02af95849278ecc");

if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}


$query ="SELECT Id,FirstName,LastName FROM salesforce.account;";
$result = pg_query($query);
echo "<table>";
while($row = pg_fetch_row($result)){
echo "<tr>";
echo "<td align='center' width='200'>" . $row[1] . "</td>";
echo "<td align='center' width='200'>" . $row[2] . "</td>";
echo "</tr>";}
echo "</table>";


?>
	</div>
</body>
</html>
