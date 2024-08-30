<?php include "./libs/load.php" ?>
<?php

if (isset($_POST["signup"])) {
    $username = $_POST["userName"];
    $email = $_POST["Email"];
    $password = $_POST["password"];
    $hashedPassword = md5($password);

    echo "$username";

    $conn = Database::getConnection();  
    $sql = "INSERT INTO `users`( `username`, `password`, `email`) VALUES ('{$username}', '{$hashedPassword}', '{$email}')";
    $result = $conn->query($sql);
    

    // TODO : Handle with javascript popup before delete the element
    // if(!$result){
    //     die("MYSQL FAILED" . $conn->error());
    // } else{
    //     echo "The item is deleted successfully";
    // }
    if (mysqli_connect_errno()) { // check connection
        printf("Connect failed: %s\n", mysqli_connect_error);
        exit();
    }
    header("Location: index.php");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_up</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="./img/annauniv_logo.png" alt="Anna university logo">
        </div>
        <div class="text-center mt-4 name">
          SIGN UP
        </div>
        <form class="p-3 mt-3" action="" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="confirm_password" id="pwd" placeholder="Repeat Password">
            </div>
            <div class="form-field d-flex align-items-center">
                <i class="fa-solid fa-envelope"></i>
                <input type="Email" name="Email" id="Email" placeholder="Email Address">
            </div>
            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center" name="signup">signup</button>
        </form>
    </div>

</body>
</html>