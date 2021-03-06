<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Css/style.css">
    <!-- for corousel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <title>Registration | USA Health</title>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 8px 12px 2px 0;
            display: inline-block;
            color: rgb(58, 0, 136);
        }

        input[type=submit] {
            background: rgb(58, 0, 136);
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type=submit]:hover {
            background: rgb(43, 1, 97);
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f200;
            padding: 20px;
        }



        .col-50 {
            float: left;
            width: 100%;
        }

        .form_reg {
            background: #fff;
            border-radius: 35px;
            position: relative;
            left: 460px;
            top: 125px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }

            .form_reg {
                background: none;
                border-radius: 25px;
                position: relative;
                left: 120px;
                top: 125px;
            }

            .form_reg .container {
                width: 250px;
            }

            footer {
                position: relative;
                top: 420px;
            }
        }
    </style>
</head>

<body style="overflow-x: hidden; font-family: 'Yanone Kaffeesatz', sans-serif; letter-spacing: 0.1rem;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="" href="HomePage.html"><img class="ms-5" src="./Images/logo.png" alt="" width="200px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center ms-5" id="navbarNav">
                <ul class="navbar-nav ms-5">
                    <li class="nav-item ms-5">
                        <a class="nav-link active  fw-bold" aria-current="page" href="HomePage.html">HOME</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a style=" color: #000;" class="nav-link fw-bold" href="About.html">ABOUT</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a style=" color: #000;" class="nav-link fw-bold" href="Pricing.html">PRICING</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a style=" color: #000;" class="nav-link fw-bold" href="Contact.html">CONTACT</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a style=" color: rgb(58,0, 136);" class="nav-link fw-bold" href="Login.html">LOGIN
                            / SiGNUP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div>
                <div class="d-flex bd-highlight">

                    <div class="p-2 w-100 bd-highlight"><img style="height: 680px;" class="img-fluid"
                            src="./Images/home.png" alt="" height="400px"></div>
                    <div class="form_reg  position-absolute w-25">
                        <div class="container bg-light form-group">
                            <form action="/action_page.php" style=" font-weight: 500;">
                                <div class="row">
                                    <h5 style=" color: rgb(58,0, 136);" class="text-center">Employee
                                        Registration</h5>
                                    <div class="col-50">
                                        <label for="fname"><i class="fas fa-user"></i> Name</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="fname" name="firstname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="lname"><i class="fas fa-envelope"></i> Email</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="lname" name="lastname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="lname"><i class="fas fa-phone-alt"></i> Phone</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="lname" name="lastname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="lname"><i class="fas fa-location"></i> City</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="lname" name="lastname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="lname"><i class="fas fa-building"></i> Company Name</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="lname" name="lastname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="lname"><i class="fas fa-users"></i> Number of Employees</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="lname" name="lastname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="password"><i class="fas fa-lock"></i> Password</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="password" id="password" name="password">
                                    </div>
                                </div>


                                <div class="row">
                                    <input type="submit" value="Registration">
                                </div>
                                <div class="row">
                                    <div class="col-50 text-center">
                                        <label style="color: #000;" for="account">Already Have Account ? <a
                                                style="color: rgb(58,0, 136); text-decoration: none;"
                                                href="Login.html">Login</a></label>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Footer -->
    <footer style=" background: rgb(25,2, 55);" class="text-center text-lg-start">
        <section class="d-flex justify-content-center justify-content-lg-between">

        </section>
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <img src="./Images/logo.png" alt="" height="40px">
                        <h6 class="text-uppercase fw-bold mb-4 text-light">About this site
                        </h6>
                        <p class="text-light">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Amet, reprehenderit doloribus
                            laborum distinctio molestias quos tempora debitis fugit unde earum,
                            enim omnis perspiciatis
                            tenetur alias deleniti aliquid, natus in deserunt.
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-light">
                        <h6 class="text-uppercase fw-bold mb-4 text-light">
                            Employees
                        </h6>
                        <h5 class="my-3 text-light">
                            Lorem Ipsum
                        </h5>
                        <h6 class="text-light">
                            Lorem Ipsum
                        </h6>
                        <p class="mt-3" style="font-size: 10px;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Dignissimos molestiae eveniet pariatur dolores.
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-light">
                        <h6 class="text-uppercase fw-bold mb-4 text-light">
                            Contact
                        </h6>

                        <p><i class="fas fa-phone-alt me-3"></i> +91 9856842545</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            firstusahealth@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </footer>
    <!-- Footer -->
</body>

</html>