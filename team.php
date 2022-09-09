<?php include 'includes/header.php';

include 'al_advertising/aa_db.php';
$stmt = "SELECT * FROM category";
$result = $conn->query($stmt);
?>
<section id="main-head">
    <div class="main-title container text-start">
        <h1 class=" pt-5">Our Team</h1>
        <hr class="head-hr text-start">
    </div>
</section>
<section id="team-part">

    <?php
    if ($result->rowCount() > 0) {
        while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
            $id = $data['id'];
    ?>
            <div class="container my-5 text-center">
                <h1 class="text-center text-success"><?= $data['category_name'] ?></h1>
                <img class="hr_image" src="images/galery/hr.png">
                <div class="row justify-content-center">
                    <?php
                    $stmt2 = "SELECT * FROM employee WHERE category_id= $id";
                    $result2 = $conn->query($stmt2);
                    if ($result2->rowCount() > 0) {
                        while ($data = $result2->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                            <div class="col-md-3 text-center">
                                <div class="team-card">
                                    <img class="img-fluid team-img rounded-circle" src="images/team/<?= $data['employee_image'] ?>" alt="team member">
                                    <h3><?= $data['employee_name'] ?> </h3>
                                    <h5> <?= $data['employee_post'] ?> </h5>
                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
            <hr>
    <?php

        }
    }
    ?>
</section>
<?php include 'includes/footer.php' ?>