<?php 
    include "db_conn.php";
    $id = $_GET[ 'edit'];

    if(isset($_POST['edit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $program= $_POST['program'];
        $block = $_POST['block'];

        $sql = "update hrm_project.students set
                first_name='$first_name', last_name='$last_name',
                program='$program', block='$block' where idstudents = '$id'";
   
        $result = mysqli_query($conn, $sql) or die("Connection failed: " . $conn->connect_error);

        if($result) {
            header("Location: index.php?msg=Record successfully updated. ");
            echo "Record successfully updated. ";
        }
        else{
            echo "Not successful. ";
        }
    }
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <style>
        input {
            width: 50%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }



</style>

    <title></title>
</head>
    <body>
        <h1> EDIT FUNCTION </h1>
        <h3>Submitted by : Ian Jan Julito Aborot</h3>

        <?php
        $edit = $_GET['edit'];
        $sql = "SELECT * FROM hrm_project.students where idstudents = $edit ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <form action="" method="post">
        <label>First name:</label> <input type="text" name="first_name"
            value="<?php echo $row['first_name']?>"><b  r><br>
        <label>Last name:</label> <input type="text" name="last_name"
            value="<?php echo $row['last_name']?>"><br><br>
        <label>Program:</label> <input type="text" name="program"
            value="<?php echo $row['Program']?>"><br><br>
        <label>Block No.:</label> <input type="text" name="block"
             value="<?php echo $row['Block']?>"><br><br>


             <button type="edit" name="edit"> Edit </button>

</body> </html>