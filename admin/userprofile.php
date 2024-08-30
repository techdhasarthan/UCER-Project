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
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Profile</title>
    <link rel="stylesheet" href="/css/userprofile.css" />
    <style>
        .list-group-item.active {
    background: #06C167 !important;
}
.bg-warning {
    background: #06C167 !important;
}
.modal-content {
        background-color: #fefefe;
        margin: 4% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 70%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out;
        /*transform: translateY(-100%);*/
    }
    .close {
        float: right;
        text-align: right;
        font-size: 30px;
    }
    .modal-content h2 {
        text-align: center;
        margin-top: -35px;
    }
    .button_div {
        justify-content: center;
        text-align: center;
    }
    .button_div button {
        margin-right: 10px;
        background: #06C167;
        border: 1px solid #06C167;
        padding: 5px 15px;
        color: #FFFFFF;
        border-radius: 2px;
    }
    #addAddressForm input {
        padding: 5px;
    }
    .nice-select {
        padding: 0px !important;
        height: 38px !important;
        line-height: 38px !important;
    }
    
    .add_address_button {
        background: #06C167;
        border: 1px solid #06C167;
        padding: 5px 15px;
        color: #FFFFFF;
        border-radius: 2px;
    }
    
    @media (max-width: 768px) {
        .main_flex_div {
            display: flex;
            flex-direction: column;
        }
        .inner_flex_div {
            min-width: 100% !important;
        }
        .modal-content {
            padding: 10px 0px !important;
            min-width: 95% !important;
            height: 700px;
            overflow: scroll;
        }
        .close {
            margin-right: 10px;
        }
    }
    
    
    
    </style>
</head>

<body>
    <section class="my-5">
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtbEsykx-0fhTred6UwHDYtMFd2UgTJCG4gaklT1dx4suRO4_n5LJr4Gg28kquSX5fpNo&usqp=CAU" alt="Admin"
                                        class="rounded-circle p-1 bg-warning" width="110">
                                    <div class="mt-3">
                                        <h4>Jyoti</h4>
                                        <p class="text-secondary mb-1">+91 7493658737</p>
                                        <p class="text-muted font-size-sm">Delhi, NCR</p>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush text-center mt-4">
                                    <a href="#" class="list-group-item list-group-item-action border-0 " onclick="showProfileDetails()">
                                        Profile Informaton
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0" onclick="showOrderDetails()">Orders</a>
                                    
                                    <a href="#" class="list-group-item list-group-item-action border-0 active"
                                        onclick="showAddressBook()">
                                        Address Book
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div  id="orderDetails" class="order_card">
                        <div class="card">
                            <div class="card-body">
                                <div class="top-status">
                                    <h5>ORDER# 00000</h5>
                                    <ul>
                                        <li class="active">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                                viewBox="0 0 512 512" width="50" height="50">
                                                <title> Clock Delivery package </title>
                                                <path
                                                    d="M316.96,424.4A96,96,0,1,1,400,472.22,95.391,95.391,0,0,1,316.96,424.4Z"
                                                    style="fill:#6fe3ff" />
                                                <path
                                                    d="M400,135.55V280.22A96.008,96.008,0,0,0,316.96,424.4L208,487.3V246.38L399.98,135.54Z"
                                                    style="fill:#c16752" />
                                                <polygon
                                                    points="208 246.38 141.14 207.78 333.13 96.94 399.98 135.54 208 246.38"
                                                    style="fill:#e48e66" />
                                                <polygon
                                                    points="333.13 96.94 141.14 207.78 92.21 179.53 284.19 68.69 333.13 96.94"
                                                    style="fill:#e5d45a" />
                                                <polygon
                                                    points="208 24.7 284.19 68.69 92.21 179.53 92.2 179.53 16.02 135.54 208 24.7"
                                                    style="fill:#af593c" />
                                                <polygon
                                                    points="208 246.38 208 487.3 16 376.45 16 135.55 16.02 135.54 92.2 179.53 92.2 339.28 115.45 329.68 140.8 358.48 140.8 207.98 141.14 207.78 208 246.38"
                                                    style="fill:#e48e66" />
                                                <polygon
                                                    points="141.14 207.78 140.8 207.98 140.8 358.48 115.45 329.68 92.2 339.28 92.2 179.53 92.21 179.53 141.14 207.78"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M284.75,269.594l-17.9-18.959a7,7,0,0,0-11.256,1.49l-16.9,31.44a7,7,0,0,0,6.16,10.316,7.185,7.185,0,0,0,6.292-3.687L255,283.247V343.42a7,7,0,1,0,14,0V273.051l5.69,6.154a6.927,6.927,0,0,0,9.835.285A7,7,0,0,0,284.75,269.594Z"
                                                    style="fill:#6fe3ff" />
                                                <path
                                                    d="M40.83,378.37a7,7,0,0,1-7-7V345.45a7,7,0,0,1,14,0v25.92A7,7,0,0,1,40.83,378.37Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M69.25,395a7,7,0,0,1-7-7V364.65a7,7,0,0,1,14,0V388A7,7,0,0,1,69.25,395Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M97.68,411.41a7,7,0,0,1-7-7V383.85a7,7,0,0,1,14,0v20.56A7,7,0,0,1,97.68,411.41Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M126.1,427.82a7,7,0,0,1-7-7V403.05a7,7,0,0,1,14,0v17.77A7,7,0,0,1,126.1,427.82Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M154.52,444.61a7,7,0,0,1-7-7V422.25a7,7,0,0,1,14,0v15.36A7,7,0,0,1,154.52,444.61Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M247.777,384.941a7,7,0,0,1-3.507-13.064l31.89-18.41a7,7,0,0,1,7,12.125L251.27,384A6.964,6.964,0,0,1,247.777,384.941Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M432.039,413.22a6.975,6.975,0,0,1-4.783-1.89l-32.04-30A7,7,0,0,1,393,376.22V313.97a7,7,0,0,1,14,0v59.215l29.824,27.925a7,7,0,0,1-4.785,12.11Z"
                                                    style="fill:#2561a1" />
                                            </svg>
                                            <span>Pending</span>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                                viewBox="0 0 512 512" width="50" height="50">
                                                <title> Clock Delivery package </title>
                                                <path
                                                    d="M316.96,424.4A96,96,0,1,1,400,472.22,95.391,95.391,0,0,1,316.96,424.4Z"
                                                    style="fill:#6fe3ff" />
                                                <path
                                                    d="M400,135.55V280.22A96.008,96.008,0,0,0,316.96,424.4L208,487.3V246.38L399.98,135.54Z"
                                                    style="fill:#c16752" />
                                                <polygon
                                                    points="208 246.38 141.14 207.78 333.13 96.94 399.98 135.54 208 246.38"
                                                    style="fill:#e48e66" />
                                                <polygon
                                                    points="333.13 96.94 141.14 207.78 92.21 179.53 284.19 68.69 333.13 96.94"
                                                    style="fill:#e5d45a" />
                                                <polygon
                                                    points="208 24.7 284.19 68.69 92.21 179.53 92.2 179.53 16.02 135.54 208 24.7"
                                                    style="fill:#af593c" />
                                                <polygon
                                                    points="208 246.38 208 487.3 16 376.45 16 135.55 16.02 135.54 92.2 179.53 92.2 339.28 115.45 329.68 140.8 358.48 140.8 207.98 141.14 207.78 208 246.38"
                                                    style="fill:#e48e66" />
                                                <polygon
                                                    points="141.14 207.78 140.8 207.98 140.8 358.48 115.45 329.68 92.2 339.28 92.2 179.53 92.21 179.53 141.14 207.78"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M284.75,269.594l-17.9-18.959a7,7,0,0,0-11.256,1.49l-16.9,31.44a7,7,0,0,0,6.16,10.316,7.185,7.185,0,0,0,6.292-3.687L255,283.247V343.42a7,7,0,1,0,14,0V273.051l5.69,6.154a6.927,6.927,0,0,0,9.835.285A7,7,0,0,0,284.75,269.594Z"
                                                    style="fill:#6fe3ff" />
                                                <path
                                                    d="M40.83,378.37a7,7,0,0,1-7-7V345.45a7,7,0,0,1,14,0v25.92A7,7,0,0,1,40.83,378.37Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M69.25,395a7,7,0,0,1-7-7V364.65a7,7,0,0,1,14,0V388A7,7,0,0,1,69.25,395Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M97.68,411.41a7,7,0,0,1-7-7V383.85a7,7,0,0,1,14,0v20.56A7,7,0,0,1,97.68,411.41Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M126.1,427.82a7,7,0,0,1-7-7V403.05a7,7,0,0,1,14,0v17.77A7,7,0,0,1,126.1,427.82Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M154.52,444.61a7,7,0,0,1-7-7V422.25a7,7,0,0,1,14,0v15.36A7,7,0,0,1,154.52,444.61Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M247.777,384.941a7,7,0,0,1-3.507-13.064l31.89-18.41a7,7,0,0,1,7,12.125L251.27,384A6.964,6.964,0,0,1,247.777,384.941Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M432.039,413.22a6.975,6.975,0,0,1-4.783-1.89l-32.04-30A7,7,0,0,1,393,376.22V313.97a7,7,0,0,1,14,0v59.215l29.824,27.925a7,7,0,0,1-4.785,12.11Z"
                                                    style="fill:#2561a1" />
                                            </svg>
                                            <span>Pending</span>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                                viewBox="0 0 512 512" width="50" height="50">
                                                <title> Clock Delivery package </title>
                                                <path
                                                    d="M316.96,424.4A96,96,0,1,1,400,472.22,95.391,95.391,0,0,1,316.96,424.4Z"
                                                    style="fill:#6fe3ff" />
                                                <path
                                                    d="M400,135.55V280.22A96.008,96.008,0,0,0,316.96,424.4L208,487.3V246.38L399.98,135.54Z"
                                                    style="fill:#c16752" />
                                                <polygon
                                                    points="208 246.38 141.14 207.78 333.13 96.94 399.98 135.54 208 246.38"
                                                    style="fill:#e48e66" />
                                                <polygon
                                                    points="333.13 96.94 141.14 207.78 92.21 179.53 284.19 68.69 333.13 96.94"
                                                    style="fill:#e5d45a" />
                                                <polygon
                                                    points="208 24.7 284.19 68.69 92.21 179.53 92.2 179.53 16.02 135.54 208 24.7"
                                                    style="fill:#af593c" />
                                                <polygon
                                                    points="208 246.38 208 487.3 16 376.45 16 135.55 16.02 135.54 92.2 179.53 92.2 339.28 115.45 329.68 140.8 358.48 140.8 207.98 141.14 207.78 208 246.38"
                                                    style="fill:#e48e66" />
                                                <polygon
                                                    points="141.14 207.78 140.8 207.98 140.8 358.48 115.45 329.68 92.2 339.28 92.2 179.53 92.21 179.53 141.14 207.78"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M284.75,269.594l-17.9-18.959a7,7,0,0,0-11.256,1.49l-16.9,31.44a7,7,0,0,0,6.16,10.316,7.185,7.185,0,0,0,6.292-3.687L255,283.247V343.42a7,7,0,1,0,14,0V273.051l5.69,6.154a6.927,6.927,0,0,0,9.835.285A7,7,0,0,0,284.75,269.594Z"
                                                    style="fill:#6fe3ff" />
                                                <path
                                                    d="M40.83,378.37a7,7,0,0,1-7-7V345.45a7,7,0,0,1,14,0v25.92A7,7,0,0,1,40.83,378.37Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M69.25,395a7,7,0,0,1-7-7V364.65a7,7,0,0,1,14,0V388A7,7,0,0,1,69.25,395Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M97.68,411.41a7,7,0,0,1-7-7V383.85a7,7,0,0,1,14,0v20.56A7,7,0,0,1,97.68,411.41Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M126.1,427.82a7,7,0,0,1-7-7V403.05a7,7,0,0,1,14,0v17.77A7,7,0,0,1,126.1,427.82Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M154.52,444.61a7,7,0,0,1-7-7V422.25a7,7,0,0,1,14,0v15.36A7,7,0,0,1,154.52,444.61Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M247.777,384.941a7,7,0,0,1-3.507-13.064l31.89-18.41a7,7,0,0,1,7,12.125L251.27,384A6.964,6.964,0,0,1,247.777,384.941Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M432.039,413.22a6.975,6.975,0,0,1-4.783-1.89l-32.04-30A7,7,0,0,1,393,376.22V313.97a7,7,0,0,1,14,0v59.215l29.824,27.925a7,7,0,0,1-4.785,12.11Z"
                                                    style="fill:#2561a1" />
                                            </svg>
                                            <span>Pending</span>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                                viewBox="0 0 512 512" width="50" height="50">
                                                <title> Clock Delivery package </title>
                                                <path
                                                    d="M316.96,424.4A96,96,0,1,1,400,472.22,95.391,95.391,0,0,1,316.96,424.4Z"
                                                    style="fill:#6fe3ff" />
                                                <path
                                                    d="M400,135.55V280.22A96.008,96.008,0,0,0,316.96,424.4L208,487.3V246.38L399.98,135.54Z"
                                                    style="fill:#c16752" />
                                                <polygon
                                                    points="208 246.38 141.14 207.78 333.13 96.94 399.98 135.54 208 246.38"
                                                    style="fill:#e48e66" />
                                                <polygon
                                                    points="333.13 96.94 141.14 207.78 92.21 179.53 284.19 68.69 333.13 96.94"
                                                    style="fill:#e5d45a" />
                                                <polygon
                                                    points="208 24.7 284.19 68.69 92.21 179.53 92.2 179.53 16.02 135.54 208 24.7"
                                                    style="fill:#af593c" />
                                                <polygon
                                                    points="208 246.38 208 487.3 16 376.45 16 135.55 16.02 135.54 92.2 179.53 92.2 339.28 115.45 329.68 140.8 358.48 140.8 207.98 141.14 207.78 208 246.38"
                                                    style="fill:#e48e66" />
                                                <polygon
                                                    points="141.14 207.78 140.8 207.98 140.8 358.48 115.45 329.68 92.2 339.28 92.2 179.53 92.21 179.53 141.14 207.78"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M284.75,269.594l-17.9-18.959a7,7,0,0,0-11.256,1.49l-16.9,31.44a7,7,0,0,0,6.16,10.316,7.185,7.185,0,0,0,6.292-3.687L255,283.247V343.42a7,7,0,1,0,14,0V273.051l5.69,6.154a6.927,6.927,0,0,0,9.835.285A7,7,0,0,0,284.75,269.594Z"
                                                    style="fill:#6fe3ff" />
                                                <path
                                                    d="M40.83,378.37a7,7,0,0,1-7-7V345.45a7,7,0,0,1,14,0v25.92A7,7,0,0,1,40.83,378.37Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M69.25,395a7,7,0,0,1-7-7V364.65a7,7,0,0,1,14,0V388A7,7,0,0,1,69.25,395Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M97.68,411.41a7,7,0,0,1-7-7V383.85a7,7,0,0,1,14,0v20.56A7,7,0,0,1,97.68,411.41Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M126.1,427.82a7,7,0,0,1-7-7V403.05a7,7,0,0,1,14,0v17.77A7,7,0,0,1,126.1,427.82Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M154.52,444.61a7,7,0,0,1-7-7V422.25a7,7,0,0,1,14,0v15.36A7,7,0,0,1,154.52,444.61Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M247.777,384.941a7,7,0,0,1-3.507-13.064l31.89-18.41a7,7,0,0,1,7,12.125L251.27,384A6.964,6.964,0,0,1,247.777,384.941Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M432.039,413.22a6.975,6.975,0,0,1-4.783-1.89l-32.04-30A7,7,0,0,1,393,376.22V313.97a7,7,0,0,1,14,0v59.215l29.824,27.925a7,7,0,0,1-4.785,12.11Z"
                                                    style="fill:#2561a1" />
                                            </svg>
                                            <span>Pending</span>
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                                viewBox="0 0 512 512" width="50" height="50">
                                                <title> Clock Delivery package </title>
                                                <path
                                                    d="M316.96,424.4A96,96,0,1,1,400,472.22,95.391,95.391,0,0,1,316.96,424.4Z"
                                                    style="fill:#6fe3ff" />
                                                <path
                                                    d="M400,135.55V280.22A96.008,96.008,0,0,0,316.96,424.4L208,487.3V246.38L399.98,135.54Z"
                                                    style="fill:#c16752" />
                                                <polygon
                                                    points="208 246.38 141.14 207.78 333.13 96.94 399.98 135.54 208 246.38"
                                                    style="fill:#e48e66" />
                                                <polygon
                                                    points="333.13 96.94 141.14 207.78 92.21 179.53 284.19 68.69 333.13 96.94"
                                                    style="fill:#e5d45a" />
                                                <polygon
                                                    points="208 24.7 284.19 68.69 92.21 179.53 92.2 179.53 16.02 135.54 208 24.7"
                                                    style="fill:#af593c" />
                                                <polygon
                                                    points="208 246.38 208 487.3 16 376.45 16 135.55 16.02 135.54 92.2 179.53 92.2 339.28 115.45 329.68 140.8 358.48 140.8 207.98 141.14 207.78 208 246.38"
                                                    style="fill:#e48e66" />
                                                <polygon
                                                    points="141.14 207.78 140.8 207.98 140.8 358.48 115.45 329.68 92.2 339.28 92.2 179.53 92.21 179.53 141.14 207.78"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M284.75,269.594l-17.9-18.959a7,7,0,0,0-11.256,1.49l-16.9,31.44a7,7,0,0,0,6.16,10.316,7.185,7.185,0,0,0,6.292-3.687L255,283.247V343.42a7,7,0,1,0,14,0V273.051l5.69,6.154a6.927,6.927,0,0,0,9.835.285A7,7,0,0,0,284.75,269.594Z"
                                                    style="fill:#6fe3ff" />
                                                <path
                                                    d="M40.83,378.37a7,7,0,0,1-7-7V345.45a7,7,0,0,1,14,0v25.92A7,7,0,0,1,40.83,378.37Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M69.25,395a7,7,0,0,1-7-7V364.65a7,7,0,0,1,14,0V388A7,7,0,0,1,69.25,395Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M97.68,411.41a7,7,0,0,1-7-7V383.85a7,7,0,0,1,14,0v20.56A7,7,0,0,1,97.68,411.41Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M126.1,427.82a7,7,0,0,1-7-7V403.05a7,7,0,0,1,14,0v17.77A7,7,0,0,1,126.1,427.82Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M154.52,444.61a7,7,0,0,1-7-7V422.25a7,7,0,0,1,14,0v15.36A7,7,0,0,1,154.52,444.61Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M247.777,384.941a7,7,0,0,1-3.507-13.064l31.89-18.41a7,7,0,0,1,7,12.125L251.27,384A6.964,6.964,0,0,1,247.777,384.941Z"
                                                    style="fill:#f8ec7d" />
                                                <path
                                                    d="M432.039,413.22a6.975,6.975,0,0,1-4.783-1.89l-32.04-30A7,7,0,0,1,393,376.22V313.97a7,7,0,0,1,14,0v59.215l29.824,27.925a7,7,0,0,1-4.785,12.11Z"
                                                    style="fill:#2561a1" />
                                            </svg>
                                            <span>Pending</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body p-0 table-responsive">
                                <h4 class="p-3 mb-0">Product Description</h4>
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Description</th>
                                            <th scope="col"></th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <th>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                    alt="product" class="" width="80">
                                            </th>
                                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem,
                                                facilis.</td>
                                            <td>₹100 X 2</td>
                                            <td><strong>₹200</strong></td>
                                            <td><span class="badge badge-warning">PENDING</span></td>
                                        </tr>
                                        <tr>
                                            <th colspan="3">
                                                <span>Status:</span>
                                                <span class="badge badge-success">PAID</span>
                                            </th>
                                            <td>
                                                <span class="text-muted">Total Price</span>
                                                <strong>₹200</strong>
                                            </td>
                                            <td>
                                                <span class="text-muted">Total Paid</span>
                                                <strong>₹200</strong>
                                            </td>
                                           
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body">
                                <h4>Timeline</h4>
                                    <ul class="timeline">
                                        <li class="active">
                                            <h6>PICKED</h6>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque Lorem ipsum dolor</p>
                                            <o class="text-muted">21 March, 2014</o></p>
                                        </li>
                                        <li>
                                            <h6>PICKED</h6>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>
                                            <o class="text-muted">21 March, 2014</o></p>
                                        </li>
                                        <li>
                                            <h6>PICKED</h6>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>
                                            <o class="text-muted">21 March, 2014</o></p>
                                        </li>
                                        <li>
                                            <h6>PICKED</h6>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>
                                            <o class="text-muted">21 March, 2014</o></p>
                                        </li>
                                        <li>
                                            <h6>PICKED</h6>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque</p>
                                            <o class="text-muted">21 March, 2014</o></p>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        </div>
                        
                         <div id="profileDetails" class="card" style="display: none;">
                        <div class="card-body">
                            <div class="profile-info">
                                <h5>Profile Information</h5>
                                <p><strong>Name:</strong> <?php echo $name ?></p>
                                <p><strong>Email Address:</strong> <?php echo $email ?></p>
                                <p><strong>Contact:</strong> <?php echo $mobile_no ?></p>
                                <p><strong>Age:</strong><?php echo $age ?></p>
                                <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center" name="edit"><a href="editprofile.php"> edit</a></button>
                            </div>
                        </div>
                    </div>
                    
                    <div id="addressBook" class="card" style="display: none;">
                        <div class="card-body">
                            <h5>Address Book</h5>
                            <button class="add_address_button" onclick="showAddAddressModal()">Add Address</button>
                            
                            <div id="addressList">
                                
                            </div>
                        </div>
                    </div>
                    
                    <div id="addAddressModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAddAddressModal()">&times;</span>
        <h2>Add Address</h2>
        <form id="addAddressForm" onsubmit="saveAddress(event)">
            
            <div class="col-12 d-flex main_flex_div">
            <div class="col-4 d-flex flex-column inner_flex_div">
                <label for="name">Name:</label>
            <input type="text" id="name" required><br>
            </div>
            <div class="col-4 d-flex flex-column inner_flex_div">
                <label for="mobile">Mobile No.:</label>
            <input type="tel" id="mobile" required pattern="[0-9]{10}">
            </div>
            <div class="col-4 d-flex flex-column inner_flex_div">
                 <label for="pincode">Pin code:</label>
            <input type="text" id="pincode" required><br>

            </div>
            </div>
            
            
             <div class="col-12 d-flex main_flex_div">
            
            <div class="col-4 d-flex flex-column inner_flex_div">
                <label for="locality">Locality:</label>
            <input type="text" id="locality" required><br>
            </div>

            <div class="col-4 d-flex flex-column inner_flex_div">
               <label for="city">City/District/Town:</label>
            <input type="text" id="city" required><br>

            </div>
            
            <div class="col-4 d-flex flex-column inner_flex_div">
               <label for="state">State:</label>
            <select id="state" required>
                <option value="">Select a state</option>
                <option value="State 1">State 1</option>
                <option value="State 2">State 2</option>
                <option value="State 3">State 3</option>
            </select><br>
            </div>
            
            </div>
            
             <div class="col-12 d-flex main_flex_div">
            <div class="col-12 d-flex flex-column inner_flex_div">
                <label for="address">Address:</label>
             <textarea id="address" required></textarea><br>
            </div>
           
            </div>
            
            
             <div class="col-12 d-flex main_flex_div">
            <div class="col-6 d-flex flex-column inner_flex_div">
                  <label for="landmark">Landmark (Optional):</label>
            <input type="text" id="landmark"><br>

            </div>
            <div class="col-6 d-flex flex-column inner_flex_div">
               <label for="alternatePhone">Alternate Phone (Optional):</label>
            <input type="tel" id="alternatePhone" pattern="[0-9]{10}"><br>
            </div>

            
            </div>
            
             <div class="col-12 d-flex button_div">
             <button type="submit">Save</button>
            <button type="button" onclick="closeAddAddressModal()">Cancel</button>
            </div>
            
            
        </form>
    </div>
</div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        
          <script>
          
           function showAddAddressModal() {
        const modal = document.getElementById('addAddressModal');
        modal.style.display = 'block';
        isFormVisible = true;
    }

    function closeAddAddressModal() {
        const modal = document.getElementById('addAddressModal');
        modal.style.display = 'none';
        isFormVisible = false;
    }
          
        function showProfileDetails() {
            hideAllSections();
            document.getElementById('profileDetails').style.display = 'block';
            setActiveLink(0);
        }

        function showOrderDetails() {
            hideAllSections();
            document.getElementById('orderDetails').style.display = 'block';
            setActiveLink(1);
        }

        function showAddressBook() {
            hideAllSections();
            document.getElementById('addressBook').style.display = 'block';
            setActiveLink(2);
        }

        function hideAllSections() {
            document.getElementById('orderDetails').style.display = 'none';
            document.getElementById('profileDetails').style.display = 'none';
            document.getElementById('addressBook').style.display = 'none';
        }

        function setActiveLink(index) {
            document.querySelector('.list-group-item.active').classList.remove('active');
            document.querySelectorAll('.list-group-item')[index].classList.add('active');
        }

        showProfileDetails();
    </script>
        
</body>

</html>