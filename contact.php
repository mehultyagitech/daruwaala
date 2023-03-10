<?php
    $title = " HOME | 100Plywood";
     $meta ="HOME | 100Plywood";
   
  ?>
<?php include('header.php')?>


<script src="alert.js"></script>

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Contact</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Contact section start-->
        <div class="conact-section section pt-85 pt-lg-65 pt-md-55 pt-sm-45 pt-xs-35  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-wrap">
                            <h3 class="contact-title">Write Us</h3>
                            <form id="contact-form" action="insert.php" method="post">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="name-fild-padding mb-sm-30 mb-xs-30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form-style mb-20">
                                                        <label class="fild-name">Name</label>
                                                        <input name="name" placeholder="" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="contact-form-style mb-20">
                                                        <label class="fild-name">Email</label>
                                                        <input name="email" placeholder="" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="check-box">
                                                        <input type="checkbox" id="create_account">
                                                        <label for="create_account">I am not a robot</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="contact-form-style bl">
                                            <label class="fild-name pl-15">Message</label>
                                            <textarea class="pl-15" name="msg" placeholder="Type your message here.."></textarea>
                                            <button onclick="myFunction()" class="btn" name="btn" href="index.php" type="submit" id="btn"><span>Send message</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Contact section end-->
        <!-- Contact Map section start
        <div class="contact-map-section section">
            <div id="contact-map" class="contact-map"></div>
        </div>
        Contact Map section End-->      
<?php include('footer.php')?>
