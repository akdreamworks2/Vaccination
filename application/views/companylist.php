

     

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
                                    <a href="#"><button style="background: rgb(58,0, 136);"
                                            class="btn text-light btn fw-bold" data-toggle="modal"
                                            data-target="#myModal"><i class="fas fa-plus"></i> Create
                                            New</button></a>
                                </div>





                                <!--Show the app here.-->
                                <div class="container">

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 style="font-weight: bold; color: rgb(58,0, 136);"
                                                        class="modal-title">
                                                        Employee Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table style="margin-left: 50px;">
                                                        <tr>
                                                            <td>
                                                                <!--HTML form for crud operation-->
                                                                <form autocomplete="off" method="post" enctype='multipart/form-data' action="<?php echo base_url();?>index.php/Employee/insert_company">
                                                                    
                                                                    <div class="mt-3">
                                                                        <label for="fullName">Company Name</label>
                                                                        <input type="text" name="name" id="name">
                                                                    </div>
                                                                    <div>
                                                                        <label for="city">City</label>
                                                                        <input type="text" name="city" id="city">
                                                                    </div>
                                                                    <div>
                                                                        <label for="phone">Phone</label>
                                                                        <input type="text" name="phone" id="phone">
                                                                    </div>
                                                                    <div>
                                                                        <label for="membership">Membership</label>
                                                                        <select class="mt-2 ms-5"
                                                                            style="width: 130px; height: 25px; cursor: pointer; font-weight: bold;"
                                                                            name="membership" id="membership">
                                                                            <option selected value="Starter">Starter
                                                                            </option>
                                                                            <option value="Basic">Basic</option>
                                                                            <option value="Pro">Pro</option>
                                                                        </select>
                                                                    </div>
                                                                   
                                                                    <div>
                                                                        <label for="status">Status</label>
                                                                        <select class="mt-2 ms-5"
                                                                            style="width: 130px; height: 25px; cursor: pointer; font-weight: bold;"
                                                                            name="status" id="status">
                                                                            <option selected value="Active">Active
                                                                            </option>
                                                                            <option value="InActive">InActive</option>
                                                                        </select>
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
                                   
                                            <table class="list" id="employeeList">
                                                <thead>
                                                    <tr>
                                                      
                                                        <th>Company Name</th>
                                                        <th>City</th>
                                                        <th>Phone</th>
                                                        <th>Membership</th>
                                                        
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data))
						{
							foreach($data as $data){?>
						<tr>
							<td><?php echo $data['name']?></td>
							<td><?php echo $data['city']?></td>
							<td><?php echo $data['phone_no']?></td>
							<td><?php echo $data['membership']?></td>
							
                            <td><?php echo $data['status']?></td>
													
						</tr>
						<?php	}} 
						else {?>
						
						record not found
						<?php }?> 
                             
                                                </tbody>      
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
                                        formData["phone"] = document.getElementById("phone").value;
                                        formData["membership"] = document.getElementById("membership").value;
                                        formData["role"] = document.getElementById("role").value;
                                        formData["status"] = document.getElementById("status").value;
                                        return formData;
                                    }

                                    


                                    // For Edit operation
                                    function onEdit(td) {
                                        selectedRow = td.parentElement.parentElement;
                                        document.getElementById('image').value = selectedRow.cells[0].innerHTML;
                                        document.getElementById('fullName').value = selectedRow.cells[1].innerHTML;
                                        document.getElementById('city').value = selectedRow.cells[2].innerHTML;
                                        document.getElementById('phone').value = selectedRow.cells[3].innerHTML;
                                        document.getElementById('membership').value = selectedRow.cells[4].innerHTML;
                                        document.getElementById('role').value = selectedRow.cells[5].innerHTML;
                                        document.getElementById('status').value = selectedRow.cells[6].innerHTML;
                                    }
                                    function updateRecord(formData) {
                                        selectedRow.cells[0].innerHTML = formData.image;
                                        selectedRow.cells[1].innerHTML = formData.fullName;
                                        selectedRow.cells[2].innerHTML = formData.city;
                                        selectedRow.cells[3].innerHTML = formData.phone;
                                        selectedRow.cells[4].innerHTML = formData.membership;
                                        selectedRow.cells[5].innerHTML = formData.role;
                                        selectedRow.cells[6].innerHTML = formData.status;
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
                    <!-- <div class="show">
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
                    </nav> -->
                </div>
            </section>


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