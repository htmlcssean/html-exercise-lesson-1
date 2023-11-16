<!DOCTYPE html>
<html>
<head> 
<title>	</title>
</head>
<body>
	<h1> HRM PROJECT</h1>
	<h3>Submitted by : Ian Jan Julito Aborot


<?php 
include "db_conn.php";

$sql = " SELECT idstudents, first_name, last_name, program, block FROm hrm_project.students";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table border=1 cellspacing=0 cellpading=0><tr>
	<th>id</th>
	<th>first name </th>
	<th>last name</th>
	<th>program</th>
	<th>block</th>
	<th>Actions</th>
	</tr>" ;

	//output data of each row


while($row = $result->fetch_assoc()) {
echo "<tr>";
	echo "<td>".$row["idstudents"]."</td>";
	echo "<td>".$row['first_name']." </td>";
	echo "<td>".$row['last_name']." </td>" ;
	echo "<td>".$row["program"]. "</td>";
	echo "<td>".$row["block"]."</td>" ;

	echo "<td><a href=edit_record.php?edit={$row['idstudents']}>EDIT</a>
		| <a href=delete_record.php?del={$row['idstudents']}>DELETE</a></td>";
		echo "</tr>";

}
echo "</table>";
} else {
	echo "0 results";

}
$conn->close()
?>
<br>

<a href="add_record.php">Add New Record</a>
</body> </html>


}




}









