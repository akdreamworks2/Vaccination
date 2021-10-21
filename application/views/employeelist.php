

       

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
                                <div class="float-end">
                                    <a href="#"><button style="background: rgb(58,0, 136);"
                                            class="text-light btn fw-bold">Download
                                            PDF/xlxs</button></a>
                                    <a href="#"><button style="background: rgb(58,0, 136);"
                                            class="btn text-light btn fw-bold" data-toggle="modal"
                                            data-target="#myModal"><i class="fas fa-plus"></i> Add
                                            New</button></a>
                                </div>





                                <!--Show the app here.-->
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
                                                                <form autocomplete="off" action="<?php echo base_url();?>index.php/Employee/insert_employee" method="Post" enctype='multipart/form-data'>
                                                                    <div>
                                                                        <label for="image"></label>
                                                                        <input type="file" name="image" id="image">
                                                                    </div>

                                                                    <div>
                                                                        <label for="fullName">Employee</label>
                                                                        <input type="text" name="fullName"
                                                                            id="fullName">
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
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <table class="table table-collapse">
                                <thead>
                                    <tr>
                                        
                                            <th>Employee</th>
                                            <th>Email</th>
                                          <th>Phone</th>
                                          <th>Department</th>
                                         <th>Role</th>
                                          <th>Status</th>
                                                        
                                    </tr>
                                 </thread>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($data))
						{
							foreach($data as $data){?>
						<tr>
							<td><?php echo $data['name']?></td>
							<td><?php echo $data['email_id']?></td>
							<td><?php echo $data['phone_no']?></td>
							<td><?php echo $data['department']?></td>
							<td><?php echo $data['role']?></td>
                            <td><?php echo $data['status']?></td>
													
						</tr>
						<?php	}} 
						else {?>
						
						record not found
						<?php }?> 
                                                </tbody>
                                            </table>
                                       

                                <!-- Dynamic Table starts -->

                            


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
                                        cell4.innerHTML = data.phone;
                                        var cell5 = newRow.insertCell(4);
                                        cell5.innerHTML = data.department;
                                        var cell6 = newRow.insertCell(5);
                                        cell6.innerHTML = data.role;
                                        var cell7 = newRow.insertCell(6);
                                        cell7.innerHTML = data.status;
                                        var cell8 = newRow.insertCell(7);
                                        cell8.innerHTML = `<i class="fas fa-pen" onClick='onEdit(this)'></i>
                                                    <i class="fas fa-trash-alt" onClick='onDelete(this)'></i><a href="/EmployeeDetails.html"><i class="fas fa-eye"></i></a>`
                                        // storage
                                        // if (typeof (Storage) !== "undefined") {
                                        //     localStorage.setItem("data", result);
                                        //     document.getElementById("result").innerHTML = localStorage.getItem("data");
                                        // } else {
                                        //     document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
                                        // }
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
                                        document.getElementById('email').value = selectedRow.cells[2].innerHTML;
                                        document.getElementById('phone').value = selectedRow.cells[3].innerHTML;
                                        document.getElementById('department').value = selectedRow.cells[4].innerHTML;
                                        document.getElementById('role').value = selectedRow.cells[5].innerHTML;
                                        document.getElementById('status').value = selectedRow.cells[6].innerHTML;
                                    }
                                    function updateRecord(formData) {
                                        selectedRow.cells[0].innerHTML = formData.image;
                                        selectedRow.cells[1].innerHTML = formData.fullName;
                                        selectedRow.cells[2].innerHTML = formData.email;
                                        selectedRow.cells[3].innerHTML = formData.phone;
                                        selectedRow.cells[4].innerHTML = formData.department;
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

    <script src="<?php echo base_url(); ?>js/app.js"></script>


</body>

</html>