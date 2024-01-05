<?php include "./libs/load.php" ?>

<?php load_template("header") ?>

<?php load_template('navbar') ?>

<?php load_template("dashboard") ?>


<div class="table-data">
    <div class="order">
        <div class="header">
            <div class="row">
                <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">Adminstration</h2>
                </div>
                <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center action-section">
                    <button class="btn btn-success add-btn" onclick="openForm()">Add new</button>
                    <button class="btn btn-danger del-btn">Delete</button>
                </div>
            </div>
            <!-- <h3>Adminstration</h3>
            <i class='bx bx-search'></i>
            <i class='bx bx-filter'></i> -->
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
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                        </a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
                            <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                        </a>
                    </td>
                </tr>
                <?php

}

?>
            </tbody>
        </table>
    </div>
</div>


<!----edit-modal start--------->
<<!-- The form -->
<div class="form-popup" id="myForm">
  <form action="" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<!----edit-modal end--------->

<?php load_template("footer") ?>