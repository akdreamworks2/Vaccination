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

    <title>Testimonials Form | USA Health</title>

    <link href="./Css/app.css" rel="stylesheet">
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
            right: 150px;
        }


        td,
        th {
            position: relative;
            padding: 8px 52px;
        }

        tr:nth-child(even),
        table.list thead.tr {
            background-color: #ddd;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px 20px;
            border: 1px solid rgb(136, 136, 136);
            border-radius: 4px;
        }

        input[type="submit"] {
            background: rgb(58, 0, 136);
            padding: 4px 12px;
            font-size: 1.2rem;
            cursor: pointer;
            border-radius: 10px;
            border: none;
            margin: 15px 0 10px;
            outline: none;
            color: #fff;
        }


        .edit_button {
            position: relative;
            display: flex;
        }

        input[type="submit"]:hover {
            background: rgb(44, 2, 99);
        }


        .show small {
            font-size: 14px;
            font-weight: bold;
            color: #000;
        }

        .show {
            float: left;
        }

        #mrgn {
            margin-top: 20px;
            margin-bottom: 15px;
        }

        #mrgn select {
            width: 230px;
            padding: 10px 0;
            cursor: pointer;
        }

        table label {
            font-size: 17px;
        }

        .back_btn button {
            margin-top: 20px;
            border: none;
            background-color: rgb(58, 0, 136);
            width: 60px;
            color: #fff;
            border-radius: 10px;
            padding: 7px 0;
        }


        @media screen and (max-width: 600px) {
            thead th {
                position: relative;
                font-size: 12px;
                font-family: Roboto;
            }

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

        <div class="main">
            <!-- Testimonial Start -->
            <div class="">
                <div class="container">
                    <!-- Form start -->
                    <div class="container">
                        <div class="">
                            <div class="w-100 col" style="height: 600px;">

                                <div class="container">
                                    <div>
                                        <div>
                                            <div class="">
                                                <div class="modal-header text-center">
                                                    <h4 style="font-weight: bold; color: rgb(58,0, 136);" class="">
                                                        Testimonial Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <form autocomplete="off" onsubmit="onFormSubmit()">
                                                                    <div id="">
                                                                        <label style="margin-bottom: 10px;"
                                                                            for="fullName">Client Name</label>
                                                                        <input class="float-right" type="text"
                                                                            name="fullName" id="fullName"
                                                                            placeholder="Client Name">
                                                                    </div>
                                                                    <div id="mrgn">
                                                                        <label style="margin: 10px 0 10px 0;"
                                                                            for="profession">Profession</label>
                                                                        <input type="text" name="profession"
                                                                            id="profession"
                                                                            placeholder="Your Profession">
                                                                    </div>
                                                                    <div>
                                                                        <label style="margin-bottom: 10px;"
                                                                            for="review">Review</label><br>
                                                                        <textarea name="review" id="review" cols="40"
                                                                            rows="7"
                                                                            placeholder="Your Review"></textarea>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <label for="image"></label>
                                                                        <input type="file" name="image" id="image">
                                                                    </div>
                                                                    <div class="form_action--button">
                                                                        <input type="submit" value="Submit">
                                                                    </div>
                                                                    <div class="back_btn">
                                                                        <a
                                                                            href="Testimonial_form.html"><button>Back</button></a>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- form end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-collapse">
                <tr>
                    <td>
                        <table class="list" id="employeeList">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>

        </div>
    </div>
    <!-- Form End -->


    </div>
    </div>



    <script src="js/app.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>







</body>

</html>