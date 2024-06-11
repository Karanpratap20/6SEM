<?php include ('dcom.php'); ?>
<?php

if(isset($_POST['add_students'])){
    $ID = $_POST['ID'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $age = $_POST['Age'];


    if($ID == "" || $f_name == "" || $l_name == "" || $age == "" || empty($ID) || empty($f_name) || empty($l_name) || empty($age)){
        header('location:index.php?error= Field cant be empty');
    }
    else{

        $query = "insert into `info` (`ID`,`F_Name`,`L_Name`,`Age`) values('$ID','$f_name','$l_name','$age')";

        $result = mysqli_query($conn,$query);

        if(!$result){
            die("Query Failed" . mysqli_error($conn));
        }
        else{
            header('location:index.php?success= Query Successfull');

        }
    }
}


?>