<?php
include "db_conn.php";

if (isset($_GET['del'])){
    $del = $_GET['del'];
    //SQL query for deletion
    $sql = "delete from hrm_project.students where idstudents=$del";
    $result = mysqli_query($conn, $sql) or die("Connection failed: " . $conn->connect_error);
    if($result){

        header("Location: index.php?msg=Record deleted.");
                echo 'Record deleted !';
                //$show = 0;
    }

    else{
        echo "Failed".mysqli_error($conn);
}
$conn->close();
}

?>