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

    <title>Employee Management | USA Health</title>

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

        section {
            overflow-x: scroll;
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

        .pagin {
            float: right;
        }

        .show small {
            font-size: 14px;
            font-weight: bold;
            color: #000;
        }

        .show {
            float: left;
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


            <section>
                <div class="container">
                    <div>
                        <div class="">
                            <div class="w-100 col" style="height: 600px;">
                                <div class="mt-2 float-start">
                                    <h5 style="color: rgb(58,0, 136); font-family: Roboto;" class="fw-bold">Employee
                                        Management
                                    </h5>
                                    <h5 class="fw-bold float-start mt-2 ml-3">show</h5>
                                    <select class="mt-2 ms-5" style="width: 130px; cursor: pointer; font-weight: bold;"
                                        name="entry" id="entry">
                                        <option value="1">5 entries</option>
                                        <option selected value="2">10 entries</option>
                                        <option value="3">15 entries</option>
                                        <option value="4">20 entries</option>
                                    </select>

                                </div>
                                <div class="float-end mt-3">
                                    <a href="#"><button style="background: rgb(58,0, 136);"
                                            class="text-light btn fw-bold">Download
                                            PDF/xlxs</button></a>
                                    <a href="./Employee_form.html" target="_blank"><button
                                            style="background: rgb(58,0, 136);"
                                            class="btn text-light btn fw-bold mr-3"><i class="fas fa-plus"></i> Create
                                            New</button></a>
                                </div>

                                <!--Show the app here.-->
                                <div class="container">

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header text-center">
                                                    <!-- <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button> -->
                                                    <h4 style="font-weight: bold; color: rgb(58,0, 136); margin-left: 200px;"
                                                        class="">
                                                        Employee Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table style="margin-left: 50px;">
                                                        <tr>
                                                            <td>
                                                                <!--HTML form for crud operation-->
                                                                <form autocomplete="off" onsubmit="onFormSubmit()">
                                                                    <div>
                                                                        <label for="image"></label>
                                                                        <input type="file" name="image" id="image"
                                                                            placeholder="Employee Name">
                                                                    </div>

                                                                    <div>
                                                                        <label for="fullName">Employee</label>
                                                                        <input class="float-right" type="text"
                                                                            name="fullName" id="fullName"
                                                                            placeholder="E-mail">
                                                                    </div>
                                                                    <div>
                                                                        <label for="email">Email</label>
                                                                        <input type="text" name="email" id="email">
                                                                    </div>
                                                                    <div>
                                                                        <label for="phone">Phone</label>
                                                                        <input type="text" name="phone" id="phone">
                                                                    </div>
                                                                    <div>
                                                                        <label for="department">Department</label>
                                                                        <input type="text" name="department"
                                                                            id="department">
                                                                    </div>
                                                                    <div>
                                                                        <label for="role">Role</label>
                                                                        <input type="text" name="role" id="role">
                                                                    </div>
                                                                    <div>
                                                                        <label for="status">Status</label>
                                                                        <input type="text" name="status" id="status">
                                                                    </div>
                                                                    <div class="form_action--button">
                                                                        <input type="submit" value="Submit">
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default mr-5"
                                                        data-dismiss="modal">Close</button>
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
                                                        <th>Employee</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Department</th>
                                                        <th>Role</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

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
                                        formData["email"] = document.getElementById("email").value;
                                        formData["password"] = document.getElementById("password").value;
                                        formData["phone"] = document.getElementById("phone").value;
                                        formData["department"] = document.getElementById("department").value;
                                        formData["role"] = document.getElementById("role").value;
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
                                        cell3.innerHTML = data.email;
                                        var cell4 = newRow.insertCell(3);
                                        cell4.innerHTML = data.password;
                                        var cell5 = newRow.insertCell(4);
                                        cell5.innerHTML = data.phone;
                                        var cell6 = newRow.insertCell(5);
                                        cell6.innerHTML = data.department;
                                        var cell7 = newRow.insertCell(6);
                                        cell7.innerHTML = data.role;
                                        var cell8 = newRow.insertCell(7);
                                        cell8.innerHTML = data.status;
                                        var cell9 = newRow.insertCell(8);
                                        cell9.innerHTML = `<i class="fas fa-pen" onClick='onEdit(this)'></i>
                                                    <i class="fas fa-trash-alt" onClick='onDelete(this)'></i><a href="/EmployeeDetails.html"><i class="fas fa-eye"></i></a>`

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
                    <div class="show">
                        <h5 style="font-weight: bold;">Showing <small>1</small> to <small>5</small> of <small>5</small>
                            enteries
                        </h5>
                    </div>
                    <nav class="pagin" aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>