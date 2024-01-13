<?php require_once "./libs/load.php" ?>


<?php load_template("navbar"); ?>

<h2 class="civil_title"> Civil Engineering</h2>
<div class="container text-center">
    <div class="row align-items-start">

        <div class="col-3">
            <div class="civil-sec">
                <h4 class="hostel-head">Faculty & Staffs</h4>
                <ul class="cse_nav">
                    <li><a href="civil_about.php">About</a></li>
                    <li><a href="civil_tf.php">Members of the Faculty</a></li>
                    <li><a href="civil_ntf.php">Supporting Staff</a></li>
                    <li><a href="civil_labs.php">Laboratories</a></li>
                    <li><a href="civil_programmes.php">Programme Offered</a></li>
                </ul>
            </div>
        </div>
    <div class="col-8" id = "col-lab" >
      <h2>Name of the Laboratories</h2>
      <div class = "col-list">
        <ul>
            <li>STRENGTH OF MATERIALS LAB</li>
            <li>HYDRAULIC ENGINEERING LAB</li>
            <li>CADD LAB</li>
            <li>SOIL MECHANICS LAB</li>
            <li>ENVIRONMENTAL ENGINEERING LAB</li>
            <li>CONCRETE AND HIGHWAY ENGINEERING LAB</li>
            <li>SURVEYING LAB</li>
        </ul>
        </div>
    </div>
  </div>
</div>



<?php load_template("footer"); ?>