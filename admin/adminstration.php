<?php include "./libs/load.php" ?>

<?php load_template("header") ?>

<?php load_template('navbar') ?>

<?php load_template("dashboard") ?>


<?php
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $conn = Database::getConnection();  
        $sql = "DELETE FROM `adminstration` WHERE `admin_id`={$id}";
        $result = $conn->query($sql);
        

        // TODO : Handle with javascript popup before delete the element
        if(!$result){
            die("MYSQL FAILED" . $conn->error($connection));
        } else{
            echo "The item is deleted successfully";
        }
        header("Location: adminstration.php");
    }

?>


<div class="table-data">
    <div class="order">
        <div class="header">
            <div class="row">
                <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                    <h2 class="ml-lg-2">Adminstration</h2>
                </div>
                <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center action-section">
                    <button class="btn btn-success add-btn" id="addnew">Add new</button>
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
                        <a href="adminstration.php?action=edit&id=<?php echo $admin_id?>" id="edit" class="edit" data-toggle="modal">
                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                        </a>
                        <a href="adminstration.php?delete=<?php echo $admin_id?>" class="delete" data-toggle="modal">
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


<!----Add new items start--------->

<?php
    $conn = Database::getConnection();

    if(isset($_POST['new_admin'])){
        $admin_name = $_POST['admin_name'];
        $admin_role = $_POST['admin_role'];
        $collegename = $_POST['collegename'];
        $profile = $_POST['profile'];

        $admin_image = $_FILES['admin_image']['name'];
        $admin_image_temp = $_FILES['admin_image']['tmp_name'];

        move_uploaded_file($admin_image_temp,"../images/$admin_image");
        $sql = "INSERT INTO `adminstration`(`admin_name`, `admin_role`, `collegename`, `profile`, `admin_image`) VALUES ('{$admin_name}','{$admin_role}','{$collegename}','{$profile}','{$admin_image}')";

        $result = $conn->query($sql); //TODO: handle success or error events using bootstrap model
        header("Location: adminstration.php");
        // if($result){
        //     echo "<div class='modal' tabindex='-1'>
        //     <div class='modal-dialog'>
        //       <div class='modal-content'>
        //         <div class='modal-header'>
        //           <h5 class='modal-title'>Modal title</h5>
        //           <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        //         </div>
        //         <div class='modal-body'>
        //           <p>Data inserted successfully</p>
        //         </div>
        //         <div class='modal-footer'>
        //           <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        //           <button type='button' class='btn btn-primary'>Save changes</button>
        //         </div>
        //       </div>
        //     </div>
        //   </div>";
        // }
    }

?>
<div class="popup">
    <div class="popup-content">
        <h3 class="d-flex align-items-center justify-content-center">Add New</h3>
        <span id="close">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
            </svg>
        </span>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="admin_name">
                <label for="floatingInput">Admin Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Role" name="admin_role">
                <label for="floatingPassword">Admin Role</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="College Name" name="collegename">
                <label for="floatingPassword">College Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="profile" name="profile">
                <label for="floatingPassword">Profile Link</label>
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="admin_image">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center" name="new_admin">submit</button>
        </form>
    </div>
</div>
<!----Add new items ends--------->


<!----edit items start--------->

<?php
    $conn = Database::getConnection();

    if(isset($_POST['new_admin'])){
        $admin_name = $_POST['admin_name'];
        $admin_role = $_POST['admin_role'];
        $collegename = $_POST['collegename'];
        $profile = $_POST['profile'];

        $admin_image = $_FILES['admin_image']['name'];
        $admin_image_temp = $_FILES['admin_image']['tmp_name'];

        move_uploaded_file($admin_image_temp,"../images/$admin_image");
        $sql = "INSERT INTO `adminstration`(`admin_name`, `admin_role`, `collegename`, `profile`, `admin_image`) VALUES ('{$admin_name}','{$admin_role}','{$collegename}','{$profile}','{$admin_image}')";

        $result = $conn->query($sql); //TODO: handle success or error events using bootstrap model
        //header("Location: adminstration.php");
        // if($result){
        //     echo "<div class='modal' tabindex='-1'>
        //     <div class='modal-dialog'>
        //       <div class='modal-content'>
        //         <div class='modal-header'>
        //           <h5 class='modal-title'>Modal title</h5>
        //           <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        //         </div>
        //         <div class='modal-body'>
        //           <p>Data inserted successfully</p>
        //         </div>
        //         <div class='modal-footer'>
        //           <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
        //           <button type='button' class='btn btn-primary'>Save changes</button>
        //         </div>
        //       </div>
        //     </div>
        //   </div>";
        // }
    }

?>
<div class="popup-edit">
    <div class="popup-content">
        <h3 class="d-flex align-items-center justify-content-center">Add New</h3>
        <span id="close">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
            </svg>
        </span>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="admin_name">
                <label for="floatingInput">Admin Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Role" name="admin_role">
                <label for="floatingPassword">Admin Role</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="College Name" name="collegename">
                <label for="floatingPassword">College Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="profile" name="profile">
                <label for="floatingPassword">Profile Link</label>
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="admin_image">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center" name="new_admin">submit</button>
        </form>
    </div>
</div>
<!----edit items ends--------->


<?php load_template("footer") ?>