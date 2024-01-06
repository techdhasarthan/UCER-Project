<?php require_once "./libs/load.php" ?>


<?php load_template("navbar"); ?>

<div class="container">
    <h2 class="hostel-head">Hostel</h2>
    <div class="row">
        <div class="col-md-3">
            <ul class="cse_nav">
                <li><a href="hostel.php?section=about">About</a></li>
                <li><a href="hostel.php?section=adminstration">Adminstration</a></li>
                <li><a href="hostel.php?section=fees">Fees</a></li>
                <li><a href="hostel.php?section=rules">Rules and Regulations</a></li>
                <li><a href="hostel.php?section=downloads">Downloads</a></li>
            </ul>
        </div>
        <div class="col-sm-9">

            <?php
                if(isset($_GET['section'])){
                    $section = $_GET['section'];

                    switch($section){
                        case "about":
                            load_template("hostel_about");
                            break;
                        
                        case "adminstration":
                            load_template("hostel_adminstration");
                            break;

                        case "fees":
                            load_template("hostel_fees");
                            break;

                        case "rules":
                            load_template("hostel_rules");
                            break;

                        case "downloads":
                            load_template("hostel_downloads");
                            break;

                        default:
                            load_template("hostel_about");
                            break;
                    }
                }
            ?>
        </div>
    </div>
</div>

<?php load_template("footer"); ?>