<style>
        * {
            box-sizing: border-box;
        }

        input[type=text] {
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
    <section>
        <div class="container">
            <div>
                <div class="d-flex bd-highlight">

                    <div class="p-2 w-100 bd-highlight"><img class="img-fluid" src="<?php echo base_url(); ?>./Images/home.png" alt=""
                            height="400px"></div>
                    <div class="form_reg  position-absolute w-25">
                        <div class="container bg-light form-group">
                            <form action="<?php echo base_url()?>Home/registeration" method="post" style=" font-weight: 500;">
                                <div class="row">
                                    <h5 style=" color: rgb(58,0, 136);" class="text-center">Employee
                                        Registration</h5>
                                    <div class="col-50">
                                        <label for="fname"><i class="fas fa-user"></i> Name</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="Name" name="name" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="email"><i class="fas fa-envelope"></i> Email</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="email" id="Email" name="email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="lname"><i class="fas fa-phone-alt"></i> Phone</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="Phone_no" name="phone_no" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="city"><i class="fas fa-location"></i> City</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="City" name="city" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="lname"><i class="fas fa-building"></i> Company Name</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="Company_name" name="company_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="lname"><i class="fas fa-users"></i> Number of Employees</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="No_of_employee" name="no_of_employee">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="password"><i class="fas fa-users"></i>Password</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="password" id="Password" name="password">
                                    </div>
                                </div>


                                <div class="row">
                                    <input type="submit" value="Registration">
                                </div>
                                <div class="row">
                                    <div class="col-50 text-center">
                                        <label style="color: #000;" for="account">Already Have Account ? <a
                                                style="color: rgb(58,0, 136); text-decoration: none;"
                                                href="<?php echo base_url()?>Home/login">Login</a></label>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





