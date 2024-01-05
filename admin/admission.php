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
                    <a href="#" class="btn btn-success add-btn">Add new</a>
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
                    $sql = "SELECT * FROM `admission`";

                    // if($conn){
                    //     echo "connected successfully";
                    // } else{
                    //     echo "There will be an some connection error occured";
                    // }
                    $result = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($result)){
                        $admis_id = $row['admis_id'];
                        $doc_name = $row['doc_name'];
                        $document = $row['admis_doc'];

            ?>

                <tr>
                    <td><?php echo $admis_id ?></td>
                    <td><?php echo $doc_name ?></td>
                    <td><?php echo $document ?></td>
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

<?php load_template("footer") ?>