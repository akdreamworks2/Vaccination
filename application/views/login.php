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
            font-weight: bold;
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
            top: 190px;
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
                top: 300px;
            }

            .button {
                position: relative;
                width: 100px;
            }
        }
    </style>
    <section>
        <div class="container">
            <div>
                <div class="d-flex bd-highlight">

                    <div class="p-2 w-100 bd-highlight"><img class="img-fluid" src="<?php echo base_url()?>./Images/home.png" alt=""
                            height="400px"></div>
                    <div class="form_reg  position-absolute w-25">
                        <div class="container">
                            <form action="" style=" font-weight: 500;">
                                <div class="row">
                                    <h5 style=" color: rgb(58,0, 136);" class="text-center fw-bold">Login
                                    </h5>
                                    <p style="font-size: 10px;" class="text-center smtext">Login to First USA Health
                                    </p>
                                    <div class="col-50">
                                        <label for="fname"><i class="fas fa-user"></i> UserName / Mobile Number</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="fname" name="firstname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <label for="lname"><i class="fas fa-key"></i> Password</label>
                                    </div>
                                    <div class="col-50">
                                        <input type="text" id="lname" name="lastname">
                                    </div>
                                </div>
                                <div class="row butn mt-3">
                                    <a style="text-decoration: none; color: #fff;" href="<?php echo base_url();?>Home/insert_company"><button
                                            style=" background: rgb(58, 0, 136); padding:10px 5px;" type="button"
                                            class="btn text-light" value="Login">Login</a>
                                </div>
                                <p class="mt-2 text-center">Forgot Password ? <a style="text-decoration: none;"
                                        href="#">Click here</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





   