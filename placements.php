<?php require_once "./libs/load.php" ?>


<?php load_template("navbar"); ?>

<div class="container">
    <h2 class="hostel-head">Placements</h2>
    <div class="row">
        <div class="col-md-3">
            <ul class="cse_nav">
                <li><a href="placements.php?section=goals">Goals & Objective</a></li>
                <li><a href="placements.php?section=recruiters">Recruiters</a></li>
                <li><a href="placements.php?section=officer">Placement Officer</a></li>
                <li><a href="placements.php?section=records">Placement Records</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            <?php

                if(isset($_GET['section'])){
                    $section = $_GET['section'];


                    switch($section){
                        case "goals":
                            load_template("placement_goals");
                            break;

                        case "recruiters":
                            load_template("placement_recruiters");
                            break;

                        case "officer":
                            load_template("placement_officer");
                            break;

                        case "records":
                            load_template("placement_records");
                            break;

                        default:
                            load_template("placement_goals");
                            break;
                    }
                }

            ?>
        </div>
 
</div>

<?php load_template("footer"); ?>