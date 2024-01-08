<?php require_once "./libs/load.php" ?>


<?php load_template("navbar"); ?>

<div class = "title">
  <h2>courses offered</h2>
</div>
<div class = "courses">
<table class="table">
  <thead class = "table-primary">
    <tr>
      <th scope="col">SI.NO.</th>
      <th scope="col">Courses Offered</th>
      <th scope="col">Year of Commencement</th>
      <th scope="col">Intake</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>B.E. - Civil Engineering</td>
      <td>2008</td>
      <td>60
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>B.E. - Computer Science and Engineering</td>
      <td>2008</td>
      <td>60</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>B.E. - Electronics and Communication Engineering</td>
      <td>2008</td>
      <td>60</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>B.E. - Mechanical Engineering</td>
      <td>2008</td>
      <td>60</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>B.E. - Civil Engineering Tamil Medium</td>
      <td>2010</td>
      <td>30</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>B.E. - Mechanical Engineering Tamil Medium</td>
      <td>2010</td>
      <td>30</td>
    </tr>
  </tbody>
</table>
</div>
<?php load_template("footer"); ?>