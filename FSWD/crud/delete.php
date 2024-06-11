<?php include ('dcom.php'); ?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "delete from `info` where `ID` = '$id'";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            die("Query Failed" . mysqli_error($conn));
        }
        else{
            header('location:index.php?success= Data Deleted Successfully');
        }
    }

?>
