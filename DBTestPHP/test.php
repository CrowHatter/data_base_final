<?php
$mysqli = new mysqli("localhost", "D1051594", "#eiH4eufi", "D1051594");
if ($mysqli->connect_error) {
    exit('Could not connect');
}

$sql = "SELECT * FROM periodicals_paper WHERE paper_title LIKE ?;";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($paper_title, $aurthor, $periodicals_title, $num_of_rolls, $num_of_period, $page, $level);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $cid . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $cname . "</td>";
echo "<th>ContactName</th>";
echo "<td>" . $name . "</td>";
echo "<th>Address</th>";
echo "<td>" . $adr . "</td>";
echo "<th>City</th>";
echo "<td>" . $city . "</td>";
echo "<th>PostalCode</th>";
echo "<td>" . $pcode . "</td>";
echo "<th>Country</th>";
echo "<td>" . $country . "</td>";
echo "</tr>";
echo "</table>";

?>