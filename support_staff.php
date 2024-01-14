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
    <div class="col-9" id = "col-mem">
      <h2>Supporting Staff</h2>
      <div class="card-mem">
        <div class="left-side">
            <img src="profile-picture.jpg" alt="Profile Picture" style="width: 100%; height: 100%;">
        </div>
        <div class="right-side">
          <div class="right-head">
            <h3>Dr.T.Sekar</h3>
            <h5>Professor & Head</h5>
          </div>
            <ul>
              <li>hello</li>
              <li>hle</li>
              <li>ehel</li>
              <li>kaj</li>
              <li>akj</li>
              <li>aijfd</li>
            </ul>
            <br>
            <button type="button" class="btn btn-warning">View Profile</button>
        </div>
    </div>
    </div>
  </div>
</div>



<?php load_template("footer"); ?>