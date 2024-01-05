<?php require_once "./libs/load.php" ?>


<?php load_template("navbar"); ?>

<div class="container">
    <h2 class="hostel-head">Hostel</h2>
    <div class="row">
        <div class="col-md-3">
            <ul class="cse_nav">
                <li><a href="#">About</a></li>
                <li><a href="#">Adminstration</a></li>
                <li><a href="#">Fees</a></li>
                <li><a href="#">Rules and Regulations</a></li>
                <li><a href="#">Downloads</a></li>
            </ul>
        
        </div>


        <div class = "col-md-9">
        <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">SI.NO</th>
      <th scope="col">File Name</th>
      <th scope="col">Download</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Hostel Admission Form</td>
      <td><a href="">Click here</a></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Hostel Vacating Form</td>
      <td><a href="">Click here</a></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Hostel Rules & Regulations</td>
      <td><a href="">Click here</a></td>
    </tr>
  </tbody>
</table>
            
        </div>

    </div>
</div>

<?php load_template("footer"); ?>