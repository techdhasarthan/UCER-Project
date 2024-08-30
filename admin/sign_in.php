<?php session_start() ?>
<?php include "./libs/load.php" ?>
<?php

if (isset($_POST["signin"])) {
    // $username = $_POST["userName"];
    $email = $_POST["userName"];
    $password = $_POST["password"];
    $hashedPassword = md5($password);

    // echo "$username";

    $conn = Database::getConnection();  
    $sql = "SELECT `id`,`password` FROM `users` WHERE (email='{$email}')";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $finalResult = $row['password'];
        $id = $row['id'];
        echo $finalResult;
        echo $hashedPassword;
        if($finalResult == $hashedPassword){
            session_regenerate_id();
		    $_SESSION['loggedin'] = TRUE;
		    $_SESSION['name'] = $_POST['userName'];
		    $_SESSION['id'] = $id;
		    echo 'Welcome back, ' . htmlspecialchars($_SESSION['name'], ENT_QUOTES) . '!';
            header("Location: index.php"); // Redirect to the dashboard
            exit();
        } else{
            echo "Some error occured";
        }
    }

    // echo $result;
    // echo $hashedPassword;

    

     

    
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
    // header("Location: index.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_in</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="./img/annauniv_logo.png" alt="Anna university logo">
        </div>
        <div class="text-center mt-4 name">
          SIGN IN
        </div>
        <form class="p-3 mt-3" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center" name="signin">signin</button>
        </form>
        <!-- <div class="text-center fs-6">
            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center" name="signin">signin</button>
        </div> -->
    </div>
</body>
</html>