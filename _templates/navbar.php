<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UCER - University College of Engineering, Ramanathapuram</title>
    <!-- bootstrap library link -->
    <link rel="shortcut icon" href="./images/annauniv_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script><!--TODO: change to the footer later -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- External stylesheets link -->
    <link rel="stylesheet" href="./stylesheets/index.css?<?php echo time()?>">
    <link rel="stylesheet" href="./stylesheets/adminstration.css">

</head>

<body>
    <!-- topbar section starts -->
    <div class="head">
        <div class="row">
            <div class="col-sm-5 counsiling-info">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                    <path
                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z" />
                    <path
                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z" />
                </svg>
                Counselling Code: 5017
            </div>
            <div class="col-sm-7 top-feesinfo">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-credit-card creditcard" viewBox="0 0 16 16">
                    <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                </svg>
                <a href="https://www.iobnet.co.in/iobpay/entry.do" class="payment" target="_blank">UCER Hostel Fee
                    Payment</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2"
                    viewBox="0 0 16 16">
                    <path
                        d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                </svg>
                <a href="https://www.aukdc.edu.in/onlinefee/gotoAgree.htm" class="semester-pay" target="_blank">Semester
                    Fee
                    Payment</a>
            </div>
        </div>
    </div>
    <!-- topbar section ends -->

    <!-- image banner section starts -->
    <div class="row">
        <div class="col-md-8">
            <img src="images/college_logo.svg" alt="college logo" class="college-img-banner">
        </div>
        <div class="col-md-4">
            <img src="images/independence.svg" alt="75th Independence day logo" class="college-img-banner">
        </div>
    </div>
    <!-- image banner section ends -->

    <!-- navbar section starts -->
    <nav class="navbar navbar-expand-lg navbar-light fixed topnav effect-3d">
        <div class="container-fluid">
            <a class="navbar-brand nav-hov" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active nav-hov" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Adminstration
                        </a>
                        <ul class="dropdown-menu drop-hover" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="adminstration.php?role=Vice-chancellor">Vice-Chancellor</a></li>
                            <li><a class="dropdown-item" href="adminstration.php?role=Registrar i/c">Registrar</a></li>
                            <li><a class="dropdown-item" href="adminstration.php?role=Director">Director(ccc)</a></li>
                            <li><a class="dropdown-item" href="adminstration.php?role=Dean">Dean</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active nav-hov" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Academic
                        </a>
                        <ul class="dropdown-menu drop-hover" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="admission.php">Courses Offered</a></li>
                            <li class="dropdown-submenu reg-drop">
                                <a class="nav-link dropdown-toggle active reg-style" href="#">Regulation</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="./documents/regulations/UG R 2021.pdf">R-2021(CBCS)</a></li>
                                    <li><a class="dropdown-item" href="./documents/regulations/R-2017 (CBCS) with amendments.pdf">R-2017(CBCS)
                                            with amendments</a></li>
                                    <li><a class="dropdown-item" href="./documents/regulations/R-2017.pdf">R-2017(CBCS)</a></li>
                                    <li><a class="dropdown-item" href="./documents/regulations/R-2013.pdf">R-2013</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="https://cac.annauniv.edu/" target="_blank">Curriculum &
                                    Syllabi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active nav-hov" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Departments
                        </a>
                        <ul class="dropdown-menu drop-hover" aria-labelledby="navbarDropdown">
                            <?php
                                $conn = Database::getConnection();
                            ?>
                            <li><a class="dropdown-item" href="civil.php">CIVIL</a></li>
                            <li><a class="dropdown-item" href="#">CSE</a></li>
                            <li><a class="dropdown-item" href="#">ECE</a></li>
                            <li><a class="dropdown-item" href="#">EEE</a></li>
                            <li><a class="dropdown-item" href="#">MECHANICAL</a></li>
                            <li class="dropdown-submenu reg-drop">
                                <a class="nav-link dropdown-toggle active sci-style" href="#">SCIENCE & HUMANITIES</a>
                                <ul class="dropdown-menu sci-dropmenu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">MATHS</a></li>
                                    <li><a class="dropdown-item" href="#">PHYSICS</a></li>
                                    <li><a class="dropdown-item" href="#">CHEMISTRY</a></li>
                                    <li><a class="dropdown-item" href="#">ENGLISH</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">PHYSICAL EDUCATION</a></li>
                            <li><a class="dropdown-item" href="#">LIBRARY</a></li>
                            <li><a class="dropdown-item" href="#">OFFICE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-hov" aria-current="page" href="placements.php?section=goals">Placements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-hov" aria-current="page" href="hostel.php?section=about">Hostel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active nav-hov" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admission
                        </a>
                        <ul class="dropdown-menu drop-hover" aria-labelledby="navbarDropdown">
                            <?php
                                $conn = Database::getConnection();
                                $sql = "SELECT * FROM `admission`";

                                $result = $conn->query($sql);

                                while($row = mysqli_fetch_assoc($result)){
                                    $document_name = $row['doc_name'];
                                    $document_source = $row['admis_doc'];
                                    echo "<li><a class='dropdown-item' href='./documents/admission/$document_source'> $document_name </a></li>";
                                }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active nav-hov" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Downloads
                        </a>
                        <ul class="dropdown-menu drop-hover" aria-labelledby="navbarDropdown">
                            <?php
                                $conn = Database::getConnection();
                                $sql = "SELECT * FROM `downloads`";

                                $result = $conn->query($sql);

                                while($row = mysqli_fetch_assoc($result)){
                                    $document_name = $row['dow_doc_name'];
                                    $document_source = $row['dow_doc'];
                                    echo "<li><a class='dropdown-item' href='./documents/downloads/$document_source'>$document_name</a></li>";
                                }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-hov" aria-current="page" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-hov" aria-current="page" href="alumini.php">Alumini</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active nav-hov" aria-current="page" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav Home -->

    <!-- navbar section ends -->


    <!-- Announcements section starts -->
    <div class="row announcements">
        <div class="col-sm-2">
            <h5 class="announcement-head">Announcements</h5>
        </div>
        <div class="col-sm-10">
            <marquee behavior="scroll" direction="left" scrollamount="4" class="annonce-scroll"
                onmouseover="this.stop()" onmouseout="this.start()">
                <a href="#" class="annonce-source"><span class="new-blinder" id="blink">New</span> Upcoming events
                    are...</a> <a href="#" class="annonce-source">teckfizo</a>
            </marquee>
        </div>
    </div>
    <!-- Announcements section ends -->