<!DOCTYPE html>
<html>
<head>
<title>HRM PROJECT</title>
</head>
<body>
     <h1> ADD FUNCTION</h1>
     <h3>Submitted by: Ian Jan Julito Aborot</h3>

     <form action="" method="post">
            <label>First name:</label><input type="text" name="first_name"><br><br>
        <label>Last name:</label><input type="text" name="last_name"><br><br>
    <label>Program:</label><input type="text" name="program"><br><br>
<label>Block:</label><input type="text" name="block"><br><br>
    
<button type="submit" name="submit"> Submit </button>


</body> </html>

<?php
include "db_conn.php";

if(isset($_POST['submit'])) {

    $fist_name = $_POST['first_name'];
    $last_name = $_POST['first_name'];
    $program = $_POST['program'];
    $block = $_POST['block'];
    
    $sql = "insert into students (first_name, last_name, program, block)
            values('$first_name', '$last_name', '$program', '$block')";

    $result = mysqli_query($conn, $sql) or die("Connection failed: " . $conn->connect_error);

    if ($result) {
        header("Location: index.php?msg=New record has been added.");
        echo "New record has been added.";
    }
 else {
    echo "Not successful.";
 }

}
// else {
//   echo "Fill out all fields.";
// }
//}

$conn->close();

?>