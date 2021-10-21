<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Css/style.css">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <title>Testimonials | USA Health</title>

    <link href="<?Php echo base_url();?>./Css/app.css" rel="stylesheet">
    <style>
        .search_bar {
            position: relative;
            left: 300px;
        }


        table {
            border-collapse: collapse;
        }

        table.list {
            width: 100%;
        }

        #employeeList {
            position: relative;
            right: 50px;
            font-size: 20px;
            font-weight: bold;
            color: #000;
        }

        td,
        th {
            position: relative;
            padding: 8px 60px;
        }

        tr:nth-child(even),
        table.list thead.tr {
            background-color: #ddd;
        }

        .fa-trash-alt {
            position: relative;
            color: rgb(255, 0, 0);
            left: 20px;
            top: -20px;
            cursor: pointer;
            font-size: 15px;
        }

        @media screen and (max-width: 600px) {
            .container .reg_box {
                width: 400px;
                display: grid;
                margin: 30px 0;
                display: grid;
                place-items: center;

            }

            .container .container_1 {
                position: relative;
                width: 600px;
            }

            .container .container_2 {
                position: relative;
                top: 30px;
                left: 25px;
                width: 100%;

            }

            .container .container_2 h4 {
                position: relative;
                top: 15px;
            }
        }
    </style>
</head>

<body style=" font-family: 'Yanone Kaffeesatz', sans-serif; letter-spacing: 0.1rem;">
    <div class="wrapper">
        <nav id="sidebar" class="sidebar ">
            <div class="sidebar-content js-simplebar bg-light">
                <a class="sidebar-brand" href="<?php echo base_url();?>/Admin/dashboard">
                    <span class="align-middle"><img class="img-fluid" src="<?php echo base_url();?>./Images/logo.png" alt=""></span>
                </a>

                <ul class="sidebar-nav">


                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="<?php echo base_url();?>/Admin/dashboard">
                            <i class="fas fa-home align-middle text-dark"></i> <span
                                class="align-middle text-dark font-weight-bolder">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item ">
                        <a class="sidebar-link bg-light" href="<?php echo base_url();?>Admin/pricing_plan">
                            <i class="fas fa-tags align-middle text-dark"></i> <span
                                class="align-middle text-dark  font-weight-bolder">PRICING
                                PLAN</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link bg-light" href="<?php echo base_url();?>Admin/testimonials">
                            <i class="align-middle text-dark" data-feather="settings"></i> <span
                                class="align-middle text-dark font-weight-bolder">TESTIMONIALS</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link bg-light" href="<?php echo base_url();?>Admin/employeelist">
                            <i class="fas fa-user align-middle text-dark"></i> <span
                                class="align-middle text-dark font-weight-bolder">EMPLOYEES</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link bg-light" href="<?php echo base_url();?>Admin/companylist">
                            <i class="fas fa-building align-middle text-dark"></i> <span
                                class="align-middle text-dark font-weight-bolder">COMPANIES</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link bg-light" href="<?php echo base_url();?>Admin/companylist">
                            <i class="fas fa-building align-middle text-dark"></i> <span
                                class="align-middle text-dark font-weight-bolder">Home</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link bg-light" href="<?php echo base_url();?>Admin/aboutuscontent">
                            <i class="fas fa-building align-middle text-dark"></i> <span
                                class="align-middle text-dark font-weight-bolder">About Us</span>
                        </a>
                    </li>   

                    <li class="sidebar-item">
                        <a class="sidebar-link bg-light" href="#">
                            <i class="align-middle fas fa-power-off text-dark"></i> <span
                                class="align-middle text-dark font-weight-bolder">Logout</span>
                        </a>

                    </li>




                </ul>
            </div>
        </nav>
         <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg col-xl-11">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center">
                        <h3 class="ml-5" style="font-weight: bold; color: rgb(58, 0, 136);">Dashboard</h3>
                    </i>
                </a>

                <form class="d-none d-sm-inline-block search_bar">
                    <div class="input-group input-group-navbar ml-5 ">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                        <button class="btn" type="button">
                            <i class="align-middle" data-feather="search"></i>
                        </button>
                    </div>
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0"
                                aria-labelledby="alertsDropdown">
                            </div>
                        </li>
                        <li class="nav-item">
                            <img src="<?php echo base_url(); ?>/Images/Ellipse.svg" class="avatar img-fluid rounded mr-1" alt="" /> <span
                                class="text-dark font-weight-bolder">First USA</span>
                            <span>admin</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>