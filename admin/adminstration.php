<?php include "./libs/load.php" ?>

<?php load_template("header") ?>

<?php load_template('navbar') ?>

<?php load_template("dashboard") ?>


<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Adminstration</h3>
            <i class='bx bx-search'></i>
            <i class='bx bx-filter'></i>
        </div>
        <div id="btn">
    <button type="button" class="btn btn-outline-success">Add New</button>
    <button type="button" class="btn btn-outline-danger">Delete</button>
</div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Admin Name</th>
                    <th scope="col">Admin Role</th>
                    <th scope="col">Profile</th>
                    <th scope="col">College Name</th>
                    <th scope="col">Admin Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conn = Database::getConnection();
                    $sql = "SELECT * FROM `adminstration`";

                    // if($conn){
                    //     echo "connected successfully";
                    // } else{
                    //     echo "There will be an some connection error occured";
                    // }
                    $result = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($result)){
                        $admin_id = $row['admin_id'];
                        $admin_name = $row['admin_name'];
                        $admin_role = $row['admin_role'];
                        $collegename = $row['collegename'];
                        $profile = $row['profile'];
                        $admin_image = $row['admin_image'];

            ?>

                <tr>
                    <td><?php echo $admin_id ?></td>
                    <td><?php echo $admin_name ?></td>
                    <td><?php echo $admin_role ?></td>
                    <td><?php echo $profile ?></td>
                    <td><?php echo $collegename ?></td>
                    <td><?php echo $admin_image ?></td>
                    <td>update</td>
                </tr>
 <?php

}

?>
            </tbody>
        </table>
    </div>
</div>

<?php load_template("footer") ?>