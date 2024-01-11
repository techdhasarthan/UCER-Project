<?php include "./libs/load.php" ?>

<?php load_template("header") ?>

<?php load_template('navbar') ?>

<?php load_template("dashboard") ?>

<?php
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $conn = Database::getConnection();  
        $sql = "DELETE FROM `downloads` WHERE `dow_id`={$id}";
        $result = $conn->query($sql);

        // TODO : Handle with javascript popup before delete the element
        if(!$result){
            die("MYSQL FAILED" . $conn->error($connection));
        } else{
            echo "The item is deleted successfully";
        }
        header("Location: downloads.php");
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
                    <a href="#" class="btn btn-success add-btn" id="addnew">Add new</a>
                    <a href="#" class="btn btn-danger del-btn">Delete</a>
                </div>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Document Name</th>
                    <th scope="col">Document</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conn = Database::getConnection();
                    $sql = "SELECT * FROM `downloads`";

                    // if($conn){
                    //     echo "connected successfully";
                    // } else{
                    //     echo "There will be an some connection error occured";
                    // }
                    $result = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($result)){
                        $dow_id= $row['dow_id'];
                        $doc_name = $row['dow_doc_name'];
                        $document = $row['dow_doc'];

            ?>

                <tr>
                    <td><?php echo $dow_id ?></td>
                    <td><?php echo $doc_name ?></td>
                    <td><?php echo $document ?></td>
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                        </a>
                        <a href="downloads.php?delete=<?php echo $dow_id;?>" class="delete" data-toggle="modal">
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

    if(isset($_POST['new_dow'])){
        $dow_doc_name = $_POST['dow_doc_name'];
        $dow_doc = $_FILES['dow_doc']['name'];
        $dow_doc_temp = $_FILES['dow_doc']['tmp_name'];

        move_uploaded_file($dow_doc_temp,"../documents/downloads/$dow_doc");

        $sql = "INSERT INTO `downloads`(`dow_doc_name`, `dow_doc`) VALUES ('{$dow_doc_name}','{$dow_doc}')";

        $result = $conn->query($sql); //TODO: handle success or error events using bootstrap model
        header("Location: downloads.php");
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
                <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="dow_doc_name">
                <label for="floatingInput">Document Name</label>
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="dow_doc">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center" name="new_dow">submit</button>
        </form>
    </div>
</div>
<!----Add new items ends--------->

<?php load_template("footer") ?>