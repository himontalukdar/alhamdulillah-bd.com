<?php
include 'al_advertising/aa_db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $msg = $_POST['message'];
   $result = $conn->query("INSERT INTO contact(user_name, user_email, user_mobile, user_message) VALUES ('$name', '$email', '$number', '$msg')");
   if($result){
       echo "<script>window.alert('Thanks For Contact Us') </script>";
   }
}






include 'includes/header.php' ?>

<!-- body_section start -->
<section id="hero-section">
    <div class="container ">
        <div class="row justify-content-center text-center hero-title">
            <div class="col">
                <h1 class="text-uppercase text-center text-light">We believe in<br>innovation</h1>

            </div>
        </div>

    </div>
    <div id="particles-js"></div>
</section>
<!-- service_section start -->
<section id="service-section">
    <div class="container text-center">
        <h1 class="mt-5 service-title text-uppercase text-success">Our Services</h1>
        <img class="mx-auto hr_image" src="images/galery/hr.png">
         <div class="row text-start">
            <div class="col-md-6 col-lg-4 my-5 fs-4">
                <div class="row">
                    <div class="col-2">
                        <i class="service-icon fa fa-chart-line text-success" aria-hidden="true"></i>
                    </div>
                    <div class="col-10 ps-4">
                        <span>Market Survey & Media Buying</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 my-5 fs-4">
                <div class="row">
                    <div class="col-2">
                        <i class="service-icon fa fa-bullhorn text-success" aria-hidden="true"></i>
                    </div>
                    <div class="col-10 ps-4">
                        <span>Advertising & Event Management</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 my-5 fs-4">
                <div class="row">
                    <div class="col-2">
                        <i class="service-icon fa fa-handshake text-success" aria-hidden="true"></i>
                    </div>
                    <div class="col-10 ps-4">
                        <span>&nbsp; PR & Digital Marketing</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-5 fs-4">
                <div class="row">
                    <div class="col-2">
                        <i class="service-icon fa fa-camera text-success" aria-hidden="true"></i>
                    </div>
                    <div class="col-10 ps-4">
                        <span>TVC/RDC Making</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 my-5 fs-4">
                <div class="row">
                    <div class="col-2">
                        <i class="service-icon fa fa-paint-brush text-success" aria-hidden="true"></i>
                    </div>
                    <div class="col-10 ps-4">
                        <span>Designing </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 my-5 fs-4">
                <div class="row">
                    <div class="col-2">
                        <i class="service-icon fa fa-globe text-success" aria-hidden="true"></i>
                    </div>
                    <div class="col-10 ps-4">
                        <span>Web Development</span>
                    </div>
                </div>
            </div>

        </div>
        <a class="btn btn-danger my-3" href="service.php">More</a>
    </div>
</section>
<!--  why_section start -->
<section id="why-section">
    <div class="container text-center">
        <h1 class="mt-5 service-title text-uppercase text-success">Why &nbsp;ALHAMDULILLAH &nbsp;Advertising ?</h1>
        <img class="mx-auto hr_image" src="images/galery/hr2.png">
        <p class="fs-5 my-5">One of the core values of ALHAMDULILLAH Advertising is teamwork. It is the secret ingredient in creating every successful project. Shared goals, mutual understanding and cooperation are what keep us ahead from others. Here is ALHAMDULILLAH every team member can brainstorm and initiate various discussions to take the projects to now heights. Teamwork is what fosters friendship and a feeling of togetherness among the purple pople.  Enabling instant decision making of the speed of the zeitgeist.</p>
        <div class="row mt-5">
            <div class="col-md-6 text-start">
                <h1 class="mb-5">We Have 6+ Years of Experience</h1>
                <p>Alhamdulillah greatest strength is our global network.</p>
                <p>We observe, we learn, we communicate, we apply.</p>
                <a class="btn btn-danger my-3" href="about.php">Read More</a>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <img class="img-fluid " src="images/client/9.jpg" alt="rank image">
            </div>
        </div>
    </div>
</section>





<!-- client_section start -->
<section id="client-section">
    <div class="container text-center">
        <h1 class="mt-5 client-title text-uppercase text-success">Our Clients</h1>
        <img class="hr_image" src="images/galery/hr.png">

        <div class="row my-4">
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2 " src="images/client/renaissance.png" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size  border mb-2" src="images/client/crown_cements.png" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2" src="images/client/ASBRM.png" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2" src="images/client/ulab.png" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2" src="images/client/ksrm.png" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2" src="images/client/csrm.png" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2" src="images/client/olympic industries.png" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2" src="images/client/bomby  sweets.png" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2" src="images/client/ssg-logo.png" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2" src="images/client/Anwars-Group.jpg" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2" src="images/client/Jamuna.jpg" alt="client image">
            </div>
            <div class="col-sm-6 col-md-2 pe-1">
                <img class="img-fluid client_img_size border mb-2" src="images/client/Sharp.jpg" alt="client image">
            </div>


        </div>
        <a class="btn btn-danger my-3" href="client.php">More</a>
    </div>


</section>


<!--  team_section start -->
<section id="team-section">
    <div class="container text-center">
        <h1 class="mt-5 team-title text-uppercase text-success">Who We Are ??</h1>
        <img class="hr_image" src="images/galery/hr2.png">
        <div class="row mt-5">
            <div class="owl-carousel owl-theme">
                
                <div class="item mx-auto">
                    <img class="img-fluid rounded-circle" src="images/team/arefin vai.jpeg" alt="team member">
                    <h3>A.H.Md. Samsul Arefin</h3>
                    <h5>Managing Director</h5>
                </div>
                <div class="item mx-auto">
                    <img class="img-fluid rounded-circle" src="images/team/Mst. Taposhi Rabeya.jpg" alt="team member">
                    <h3>Mst. Taposhi Rabeya</h3>
                    <h5>Director</h5>
                </div>
                <div class="item mx-auto">
                    <img class="img-fluid rounded-circle" src="images/team/Zakia Shamim Ara.jpg" alt="team member">
                    <h3>Mrs. Zakia Shamim Ara</h3>
                    <h5>Chief Executive Officer (CEO)</h5>
                </div>

                <div class="item mx-auto">
                    <img class="img-fluid rounded-circle" src="images/team/Abu Jafar.jpg" alt="team member">
                    <h3>Abu Jafar Md. Shamsujjaman</h3>
                    <h5>General Manager (GM)</h5>
                </div>
            </div>
        </div>
        <!-- <p class="fs-5 my-5">
            ALHAMDULILLAH ADVERTISING is a 360⁰ integrated marketing communications agency with a vision to bring new dimensions in contemporary style of communications.</p> -->
    </div>
</section>
<!--  contact_section start -->
<section id="contact-section">
    <div class="container ">
        <div class="row my-5">
            <div class="col-md-6">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                 
                                <input type="text" name="name" class="form-control rounded-0 quick-contact" id="formGroupExampleInput" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group mb-2">
                                
                                <input type="text" name="email" class="form-control rounded-0 quick-contact" id="formGroupExampleInput2" placeholder="Enter Email Address">
                            </div>
                            <div class="form-group mb-2">
                                 
                                <input type="text" name="number" class="form-control rounded-0 quick-contact" id="formGroupExampleInput3" placeholder="Enter Phone Number">
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                            
                            <div class="form-group mb-2">
                               
                                <textarea class="form-control rounded-0 " name="message" id="formGroupExampleInput5" rows="5" placeholder="Enter Your Message"></textarea>
                                
                            </div>
                            <button type="submit" name="submit" class="float-end btn btn-danger">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-6 text-center">
                <H1>Let’s Talk</H1>
                <hr class="main-hr  bg-primary">
                <p class="fs-4">Please fill in your details below, and our<br> advisors  will give you a call.</p>
            </div>

        </div>

    </div>
</section>










<?php include 'includes/footer.php' ?>