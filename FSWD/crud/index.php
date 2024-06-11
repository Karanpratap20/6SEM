<?php include ('header.php'); ?>
<?php include ('dcom.php'); ?>
<div class="box1">
    <h2>STUDENT TABLE</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Student
    </button>
</div>
<!-- Button trigger modal -->



<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Namw</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $query = "SELECT * FROM `info`";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Failed" . mysqli_error($conn));
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['F_Name']; ?></td>
                    <td><?php echo $row['L_Name']; ?></td>
                    <td><?php echo $row['Age']; ?></td>
                    <td><a href="update.php?id=<?php echo $row['ID']; ?>" class="btn btn-success">Update</a></td>
                    <td><a href="delete.php?id=<?php echo $row['ID']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
            }
        }

        ?>

    </tbody>
</table>

<!-- Modal -->
<form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENT</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="ID">ID</label>
                        <input type="number" name="ID" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="f_name">First Name</label>
                        <input type="text" name="f_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="l_name">First Name</label>
                        <input type="text" name="l_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" name="Age" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="add_students" value="ADD">
                </div>
            </div>
        </div>
    </div>
</form>

<?php

        if(isset($_GET['error'])){
            echo "<h6>".$_GET['error']."</h6>";
        }

?>
<?php

if(isset($_GET['success'])){
    echo "<h5>".$_GET['success']."</h5>";
}

?>

<?php include ('footer.php'); ?>