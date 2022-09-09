<?php include 'includes/header.php';
include 'al_advertising/aa_db.php';
$stmt = "SELECT * FROM service";
$result = $conn->query($stmt);
?>
<section id="main-head">
    <div class="main-title container text-start">
        <h1 class=" pt-5">Our Services</h1>
        <hr class="head-hr text-start">
    </div>
</section>

<section id="service-part">
    <div class="container text-start">
        <div class="row">

            <?php
            if ($result->rowCount() > 0) {
                while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="col-md-6 py-3">
                        <h4 class="text-success text-uppercase"><?= $data['service_title'] ?></h4>
                        <hr class="head-hr">
                        <img class="img-fluid service-img" src="images/service/<?= $data['service_image'] ?>" alt="Service Images">
                        <p class="fs-6 pt-4"> <?= $data['service_details'] ?></p>
                    </div>
            <?php

                }
            }
            ?>
        </div>


    </div>
</section>



<?php include 'includes/footer.php' ?>