<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Name</th>
<th>Contact</th>
<th>Address</th>
<th>Amount</th>
<th>Location</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "afwms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Name,Contact,Address,Amount,Location FROM foodrequests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Contact"] . "</td><td>"
. $row["Address"] . "</td><td>". $row["Amount"]. "</td></td>"."</td><td>". $row["Location"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>