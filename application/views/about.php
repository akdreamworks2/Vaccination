
<style>
        @media screen and (max-width: 600px) {
            .price {
                margin-left: -40px;
            }

            .price table tr {
                font-size: 12px;
                font-weight: bolder;
            }

            .price table .price2 {
                position: relative;
                left: -15px;
            }

            .price table th {
                position: relative;
                left: -7px;
            }
        }
    </style>

    <!-- About Start -->
    <div class="container-fluid text-center">
        <div class="container_12">
            <div class="services-home">
                <div class="grid_12 grid_13">
                    <h3 style="font-size: 45px; font-weight: bold;" class="home-feature font-weight-bold mt-5">About
                        Us
                    </h3>
                    <p style="margin: 0 80px 0 80px;" class="aboutshadow font-weight-bold"><?php echo $data['about']?></p>
                </div>
            </div>

            <div class="clear"></div>

            <div class="grid_3">
                <div class="block2 maxheight">
                    <div style="font-size: 25px;  color: rgb(5, 32, 56);" class="title mt-5">Vision</div>
                    <div class="pad">
                        <p style="margin: 0 80px 0 80px;"><?php echo $data['vision']?></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="grid_3">
            <div class="block2 maxheight">
                <div style="font-size: 20px; color: rgb(5, 32, 56);" class="title mt-5">Innovation</div>
                <div class="pad">
                    <p style="margin: 0 80px 0 80px;"><?php echo $data['innovation']?></p>
                </div>
            </div>
        </div>
        <div class="grid_3">
            <div class="block2 maxheight">
                <div style="font-size: 20px; color: rgb(5, 32, 56);" class="title mt-5">Business address</div>
                <div class="pad">
                    <p style="margin: 0 80px 0 80px;"><?php echo $data['business_address']?></p>
                </div>
            </div>
        </div>
        <div class="grid_3">
            <div class="block2 maxheight">
                
                <div class="pad" style=" font-family: 'Raleway', Helvetica, Tahoma;">
                    <address>
                        <dl>
                            <dd>Phone No<?php echo $data['phone_no']?></dd>
                            <!--<dd>Telephone: 0124-6555713</dd>								-->
                            <dd>E-mail: <a href="#" class="col1"><?php echo $data['email']?></a></dd>
                        </dl>
                    </address>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>
    </div>

    <!-- About End




   