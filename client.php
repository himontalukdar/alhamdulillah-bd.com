<?php include 'includes/header.php';
include 'al_advertising/aa_db.php';
$stmt = "SELECT * FROM client";
$result = $conn->query($stmt);
?>
<section id="main-head">
    <div class="main-title container text-start">
        <h1 class=" pt-5">Our Client</h1>
        <hr class="head-hr text-start">
    </div>
</section>
<section id="client-part">
    <div class="container text-center">
        <h1 class="mt-5 client-title text-uppercase text-success">Our Clients</h1>
        <img class="hr_image" src="images/galery/hr.png">
        <div class="row my-4">
            <?php
            if ($result->rowCount() > 0) {
                while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="col-sm-6 col-md-3 pe-1">
                        <img class="img-fluid w-100 border mb-2" src="images/client/<?= $data['company_image'] ?>" alt="client image">
                    </div>
            <?php

                }
            }
            ?>
        </div>
    </div>
</section>




<?php include 'includes/footer.php' ?>