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

    <title>Companies | USA Health</title>

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
            right: 60px;
        }

        section {
            overflow-x: scroll;
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


        .edit_button {
            position: relative;
            display: flex;
        }

        input[type="submit"]:hover {
            background: rgb(44, 2, 99);
        }

        .fa-pen {
            cursor: pointer;
            color: #000;
        }

        .fa-trash-alt {
            position: relative;
            color: rgb(255, 0, 0);
            left: 20px;
            top: -20px;
            cursor: pointer;
        }

        .fa-eye {
            position: relative;
            cursor: pointer;
            color: #000;
            left: 40px;
            top: -40px;
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

        <div class="main">

            <section>
                <div class="container">
                    <div>
                        <div class="">
                            <div class="w-100 col" style="height: 600px;">
                                <div class="mt-2 float-start">
                                    <h5 style="color: rgb(58,0, 136);" class="fw-bold fs-4">Companies
                                    </h5>
                                </div>
                                <div class="float-end">
                                    <a href="./Company_form.html"><button style="background: rgb(58,0, 136);"
                                            class="btn text-light btn fw-bold" data-toggle="modal"
                                            data-target="#myModal"><i class="fas fa-plus"></i> Create
                                            New</button></a>
                                </div>
                                <!--Show the table here.-->
                                <div class="container">
                                    <table class="table table-collapse">
                                        <tr>
                                            <td>
                                                <table class="list" id="employeeList">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Company Name</th>
                                                            <th>City</th>
                                                            <th>Phone</th>
                                                            <th>Membership</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <td></td>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <script>
                                        var selectedRow = null;
                                        function onFormSubmit(e) {
                                            event.preventDefault();
                                            var formData = readFormData();
                                            if (selectedRow === null) {
                                                insertNewRecord(formData);
                                            } else {
                                                updateRecord(formData)
                                            }
                                            resetForm();
                                        }
                                        // Read operation using this function
                                        function readFormData() {
                                            var formData = {};
                                            formData["image"] = document.getElementById("image").value;
                                            formData["fullName"] = document.getElementById("fullName").value;
                                            formData["city"] = document.getElementById("city").value;
                                            formData["email"] = document.getElementById("email").value;
                                            formData["password"] = document.getElementById("password").value;
                                            formData["phone"] = document.getElementById("phone").value;
                                            formData["membership"] = document.getElementById("membership").value;
                                            formData["status"] = document.getElementById("status").value;
                                            return formData;
                                        }

                                        // Create operation
                                        function insertNewRecord(data) {
                                            var table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
                                            var newRow = table.insertRow(table.length);
                                            var cell1 = newRow.insertCell(0);
                                            cell1.innerHTML = data.image;
                                            var cell2 = newRow.insertCell(1);
                                            cell2.innerHTML = data.fullName;
                                            var cell3 = newRow.insertCell(2);
                                            cell3.innerHTML = data.city;
                                            var cell4 = newRow.insertCell(3);
                                            cell4.innerHTML = data.email;
                                            var cell5 = newRow.insertCell(4);
                                            cell5.innerHTML = data.password;
                                            var cell6 = newRow.insertCell(5);
                                            cell6.innerHTML = data.phone;
                                            var cell7 = newRow.insertCell(6);
                                            cell7.innerHTML = data.membership;
                                            var cell8 = newRow.insertCell(7);
                                            cell8.innerHTML = data.status;
                                            var cell9 = newRow.insertCell(8);
                                            cell9.innerHTML = `<i class="fas fa-pen" onClick='onEdit(this)'></i>
                                                    <i class="fas fa-trash-alt" onClick='onDelete(this)'></i>`
                                        }


                                        function onDelete(td) {
                                            if (confirm('Are you sure you want to delete this record?')) {
                                                row = td.parentElement.parentElement;
                                                document.getElementById('employeeList').deleteRow(row.rowIndex);
                                                resetForm();
                                            }
                                        }


                                    </script>

                                </div>

                            </div>
                        </div>
                    </div>
            </section>


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