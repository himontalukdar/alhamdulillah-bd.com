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


<section id="main-head">
    <div class="main-title container text-start">
        <h1 class=" pt-5">Contact Us</h1>
        <hr class="head-hr text-start">
    </div>
</section>
<section id="contact-part">
    <div class="container text-center my-5">
        <div class="row">
            <div class="col-md-8 px-5">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group mb-2">
                        <input type="text" name="name" class="form-control rounded-0 quick-contact" id="formGroupExampleInput" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="email" class="form-control rounded-0 quick-contact" id="formGroupExampleInput2" placeholder="Enter Email Address">
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="number" class="form-control rounded-0 quick-contact" id="formGroupExampleInput3" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group mb-2">
                        <textarea class="form-control rounded-0 " name="message" id="formGroupExampleInput5" rows="5" placeholder="Enter Your Message"></textarea>
                    </div>
                    <button type="submit" name="submit" class="float-end btn btn-danger mb-3">Submit</button>
                </form>
            </div>
            <div class="col-md-4 bg-dark text-light p-5">
                <h2 class="text-center">Contact details </h2>
                <img class="hr_image" src="images/galery/hr2.png">
                <div class="address text-start">
                    <i class="fas fa-phone-alt phone_icon"></i><span>+8801719864656</span><br><br>
                    <i class="fas fa-envelope phone_icon"></i><span>mail@alhamdulillah-bd.com</span> <br><br>
                    <i class="fas fa-map-marker phone_icon"></i><span>281/2,
                        Ahmed-Nagar, Mirpur-1, Dhaka-1216</span>

                </div>
            </div>
        </div>
    </div>

</section>
<section id="devider">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-8 text-start text-light">
                <h2>We Do Communication That Works?</h2>
            </div>
            <div class="col-md-4 text-end">
                <a href="index.php" class="btn btn-danger"> Let's Go</a href="index.php">
            </div>
        </div>
    </div>
</section>
<section id="address-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7585881964424!2d90.35657821543204!3d23.79160949311672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0c1710d7a31%3A0x7efd7ae3ecc4ea58!2sSapakhana%20Mor!5e0!3m2!1sen!2sbd!4v1625926144263!5m2!1sen!2sbd" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>



<?php include 'includes/footer.php' ?>