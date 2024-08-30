<?php include "./libs/load.php" ?>
<?php
session_start();
$conn = Database::getConnection();
$sql = "SELECT * FROM `users` WHERE (email='{$_SESSION['name']}')";

$result = $conn->query($sql);

while($row = mysqli_fetch_assoc($result)){
    $name = $row['username'];
    $email = $row['email'];
    $age = $row['age'];
    $mobile_no = $row['number'];
}



?>

<?php

if (isset($_POST["update"])) {
    // $username = $_POST["userName"];
    $updated_email = $_POST["user_email"];
    $updated_username = $_POST["user_name"];
    $updated_age = $_POST["user_age"];
    $updated_mobile_no = $_POST["user_number"];

    // echo "$username";

    $conn = Database::getConnection();  
    $sql = "UPDATE `users` SET `username`='{$updated_username}',`email`='{$updated_email}',`age`='{$updated_age}',`number`='{$updated_mobile_no}' WHERE (email='{$_SESSION['name']}')";
    $result = $conn->query($sql);

    if (mysqli_connect_errno()) { // check connection
        printf("Connect failed: %s\n", mysqli_connect_error);
        exit();
    }
    header("Location: index.php");
}




?>



<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/editprofile.css">
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <h1> Sign Up </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your Basic Info</legend>
        
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" value="<?php echo $name ?>">
        
          <label for="email">Email:</label>
          <input type="email" id="mail" name="user_email" value="<?php echo $email ?>">
       
         
        
          <label>Age:</label>
          <input type="number" id="age" name="user_age" value="<?php echo $age ?>">
          
          <label>Mobile No:</label>
          <input type="text" id="number" name="user_number" value="<?php echo $mobile_no ?>">
        </fieldset>
       <!--  <fieldset>  
        
          <legend><span class="number">2</span> Your Profile</legend>
          
         <label for="bio">Bio:</label>
          <textarea id="bio" name="user_bio"></textarea>
        
       
        
         <label for="job">Job Role:</label>
          <select id="job" name="user_job">
            <optgroup label="Web">
              <option value="frontend_developer">Front-End Developer</option>
              <option value="php_developer">PHP Developer</option>
              <option value="python_developer">Python Developer</option>
              <option value="rails_developer">Rails Developer</option>
              <option value="web_designer">Web Designer</option>
              <option value="wordpress_developer">Wordpress Developer</option>
            </optgroup>
            <optgroup label="Mobile">
              <option value="android_developer">Android Developer</option>
              <option value="ios_developer">IOS Developer</option>
              <option value="mobile_designer">Mobile Designer</option>
            </optgroup>
            <optgroup label="Business">
              <option value="business_owner">Business Owner</option>
              <option value="freelancer">Freelancer</option>
            </optgroup>
          </select>
          
          <label>Interests:</label>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Development</label><br>
          <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Design</label><br>
          <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Business</label>
          
         </fieldset> -->
       
        <button type="submit" name="update">Update Profile</button>
        
       </form>
        </div>
      </div>
      
    </body>
</html>
