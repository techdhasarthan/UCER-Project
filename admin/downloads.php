<?php include "./libs/load.php" ?>

<?php load_template("header") ?>

<?php load_template('navbar') ?>

<?php load_template("dashboard") ?>


<div id="btn">
    <button type="button" class="btn btn-outline-success">Add New</button>
    <button type="button" class="btn btn-outline-danger">Delete</button>
</div>


<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Downloads</h3>
            <i class='bx bx-search'></i>
            <i class='bx bx-filter'></i>
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
