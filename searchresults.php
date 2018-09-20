<html>
	<title>Search Results</title>
<?php



$db = pg_connect("host=ec2-54-227-244-12.compute-1.amazonaws.com  port=5432 dbname=d544g2lkvj2uqn user=jwvfktfyuyftwy password=cd2fd6c6fe21c91ec21198788e2eb438b39d7b609127f5dde02af95849278ecc");

if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}



$result = pg_query($db,"SELECT LastName, FirstName FROM salesforce.account");
echo "<table>";
while($row=pg_fetch_assoc($result)){echo "<tr>";
echo "<td align='center' width='200'>" . $row['FirstName'] . "</td>";
echo "<td align='center' width='200'>" . $row['LastName'] . "</td>";

echo "</tr>";}echo "</table>";


?>
</html>
