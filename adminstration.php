<?php require_once "./libs/load.php" ?>


<?php load_template("navbar"); ?>


<?php

if(isset($_GET['role'])){
    $role = $_GET['role'];


    $conn = Database::getConnection();
    $sql = "SELECT * FROM `adminstration` WHERE `admin_role`='$role'";

    $output = $conn->query($sql);

    if($output->num_rows == 1){
        $result = $output->fetch_assoc();
        $admin_role = $result['admin_role'];
        $admin_image = $result['admin_image'];
        $admin_name = $result['admin_name'];
        $college_name = $result['collegename'];
        $profile = $result['profile'];
    } else{
        echo "There will be an error occured"; // TODO: manage with error handling
    }?>
<main>
    <div class="container">
        <h2 class="vc"><?php echo $admin_role?></h2>
    </div>
    <div class="profile-vc design-vc">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6 design-vc-image">
                <img src="./images/<?php echo $admin_image?>" alt="vice-chancellor image" class="rounded mx-auto d-block">
                <div class="vc-content">
                    <h2><?php echo $admin_name?></h2>
                    <b><?php echo $admin_role?> <br> <?php echo $college_name?></b><br>
                    <a href="<?php echo $profile ?>" target="_blank">View Profile</a>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</main>


<?php } ?>



<?php load_template("footer"); ?>