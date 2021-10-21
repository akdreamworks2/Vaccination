

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
                            <img src="./Images/Ellipse.svg" class="avatar img-fluid rounded mr-1" alt="" /> <span
                                class="text-dark font-weight-bolder">First USA</span>
                            <span>admin</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="section-header text-center">
                        <p style="color: rgb(58, 0, 136);">Testimonial</p>
                        <h2 style="color: rgb(58, 0, 136);">What our clients say</h2>
                    </div>


                    <!-- Testimonial End -->

                    <div style="margin-top: -35px;" class="float-end mr-4 mb-3">
                        <a href="#"><button style="background: rgb(58,0, 136);" class="btn text-light btn fw-bold"
                                data-toggle="modal" data-target="#myModal">Add</button></a>
                    </div>

                    <!-- Form start -->
                    <div class="container">
                        <!-- Trigger the modal with a button -->
                        <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                    data-target="#myModal">Open Modal</button> -->

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 style="font-weight: bold; color: rgb(58,0, 136);" class="modal-title">
                                            Employee Form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <table style="margin-left: 50px;">
                                            <tr>
                                                <td>
                                                    <!--HTML form for crud operation-->
                                                    <form autocomplete="off" method="post" enctype='multipart/form-data' action="<?php echo base_url();?>index.php/Employee/insert_testimonial">
                                                        <div>
                                                            <label for="image"></label>
                                                            <input type="file" name="image" id="image">
                                                        </div>
                                                        <div>
                                                            <label for="fullName">Client Name</label>
                                                            <input type="text" name="fullName" id="fullName">
                                                        </div>
                                                        <div>
                                                            <label for="profession">Profession</label>
                                                            <input type="text" name="profession" id="profession">
                                                        </div>
                                                        <div>
                                                            <label for="review">Review</label>
                                                            <textarea name="review" id="review" cols="30"
                                                                rows="5"></textarea>
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
                                        <button type="button" class="btn btn-default"
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
                            formData["profession"] = document.getElementById("profession").value;
                            formData["phone"] = document.getElementById("phone").value;
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
                            cell3.innerHTML = data.profession;
                            var cell4 = newRow.insertCell(3);
                            cell4.innerHTML = data.phone;
                            var cell5 = newRow.insertCell(4);
                            cell5.innerHTML = `<i class="fas fa-trash-alt" onClick='onDelete(this)'></i>`
                        }

                        // To Reset the data of fill input
                        // function resetForm() {
                        //     document.getElementById('image').value = '';
                        //     document.getElementById('fullName').value = '';
                        //     document.getElementById('email').value = '';
                        //     document.getElementById('phone').value = '';
                        //     document.getElementById('department').value = '';
                        //     document.getElementById('role').value = '';
                        //     document.getElementById('status').value = '';
                        //     selectedRow = null;
                        // }

                        // For Edit operation
                        function onEdit(td) {
                            selectedRow = td.parentElement.parentElement;
                            document.getElementById('image').value = selectedRow.cells[0].innerHTML;
                            document.getElementById('fullName').value = selectedRow.cells[1].innerHTML;
                            document.getElementById('profession').value = selectedRow.cells[2].innerHTML;
                            document.getElementById('phone').value = selectedRow.cells[3].innerHTML;
                        }
                        function updateRecord(formData) {
                            selectedRow.cells[0].innerHTML = formData.image;
                            selectedRow.cells[1].innerHTML = formData.fullName;
                            selectedRow.cells[2].innerHTML = formData.profession;
                            selectedRow.cells[3].innerHTML = formData.phone;
                        }
                        function onDelete(td) {
                            if (confirm('Are you sure you want to delete this record?')) {
                                row = td.parentElement.parentElement;
                                document.getElementById('employeeList').deleteRow(row.rowIndex);
                                resetForm();
                            }
                        }


                    </script>
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <img src="./Images/Ellipse.svg" alt="Image">
                            <div class="testimonial-text">
                                <h3>Client Name</h3>
                                <h4>Profession</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ipsam optio natus id
                                    laborum debitis numquam praesentium nihil nemo ipsum, saepe nobis, beatae quae
                                    deserunt cumque fugit possimus ex velit?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ipsam optio natus id
                                    laborum debitis numquam praesentium nihil nemo ipsum, saepe nobis, beatae quae
                                    deserunt cumque fugit possimus ex velit?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->


        </div>
    </div>


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

    <script src="<?php echo base_url();?>js/app.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>







</body>

</html>