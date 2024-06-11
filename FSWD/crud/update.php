<?php include ('header.php'); ?>
<?php include ('dcom.php'); ?>

<?php

    if(isset($_GET['id'])){
        $ID = $_GET['id'];

        $query = "select * from `info` where `ID` = '$ID'";

        $result = mysqli_query($conn,$query);

        if(!$result){
            die("Query Failed" . mysqli_error($conn));
        }
        else{
            $row = mysqli_fetch_assoc($result);
        }
    }
?>

<?php

        if(isset($_POST['update_students'])){
            if(isset($_GET['ID_NEW'])){
                $IDN = $_GET['ID_NEW'];
            }
            $f_name = $_POST['f_name'];
            $l_name = $_POST['l_name'];
            $age = $_POST['Age'];

            $query = "update `info` set `F_Name` = '$f_name', `L_Name` = '$l_name', `Age` = '$age' where `ID` = '$IDN'";

            $result = mysqli_query($conn,$query);

            if(!$result){
                die("Query Failed" . mysqli_error($conn));
            }
            else{
                header('location:index.php?success= Data Updated Successfully');
            }
        }

?>


<form action="update.php?ID_NEW=<?php echo $ID; ?>" method="post">
    <div class="form-group">
        <label for="ID">ID</label>
        <input type="number" name="ID" class="form-control" value="<?php echo $row['ID']?>">
    </div>
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row['F_Name']?>">
    </div>
    <div class="form-group">
        <label for="l_name">First Name</label>
        <input type="text" name="l_name" class="form-control" value="<?php echo $row['L_Name']?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" name="Age" class="form-control" value="<?php echo $row['Age']?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
</form>

<?php include ('footer.php'); ?>