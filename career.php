<?php
include 'al_advertising/aa_db.php';
$stmt = "SELECT * FROM career WHERE status = '0'";
$result = $conn->query($stmt);
$result2 = $conn->query($stmt);
if (isset($_POST['submit'])) {

    $dir = "files/cv/";
    $job_title = $_POST['job_title'];
    $date = date('d-M-Y');

    if (isset($_FILES["cv"]) && $_FILES["cv"]["error"] == 0) {
        $allowed = array("pdf" => "application/pdf");
        $filename = $_FILES["cv"]["name"];
        $cvname = rand(0,100000)." ".$filename;
        $filetype = $_FILES["cv"]["type"];
        $filesize = $_FILES["cv"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (!array_key_exists($ext, $allowed)) {
            $error = "Please select PDF file!!!";
        } else {

            // Verify file size - 5MB maximum
            $maxsize = 5 * 1024 * 1024;
            if ($filesize > $maxsize) {
                $error = "File size is larger than the allowed limit.";
            } else {
                // Verify MYME type of the file
                if (in_array($filetype, $allowed)) {
                    $upload =  move_uploaded_file($_FILES["cv"]["tmp_name"], $dir . $cvname);
                    $insert = $conn->query("INSERT INTO apply(cv_name, job_id, apply_date) VALUES ('$cvname','$job_title', '$date')");
                    if ($upload && $insert) {
                        $success = "Uploaded successfully.";
                    } else {
                        $error = "Upload failed";
                    }
                } else {
                    $error = "There was a problem uploading your file. Please try again.";
                }
            }
        }
    } else {
        $error = "Error: " . $_FILES["cv"]["error"];
    }
}


if (isset($error)) {
    echo "<script>window.alert('$error') </script>";
}

if (isset($success)) {
    echo "<script>window.alert('$success') </script>";
}


include 'includes/header.php' ?>
<section id="main-head">
    <div class="main-title container text-start">
        <h1 class=" pt-5">Career</h1>
        <hr class="head-hr text-start">
    </div>
</section>

<section id="career-part">
    <div class="container my-5">
        <h2 class="text-success">Open Positions</h2>
        <table class="table table-striped table-hover my-5">
            <thead>
                <tr>
                    <th scope="col">Job Title </th>
                    <th scope="col">Department</th>
                    <th scope="col">Location</th>
                    <th scope="col">Expire Date</th>
                </tr>
            </thead>
            <tbody>



                <?php
                if ($result->rowCount() > 0) {
                    while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>

                        <tr>
                            <th><?= $data['job_title'] ?> </th>
                            <td><?= $data['location'] ?> </td>
                            <td><?= $data['department'] ?> </td>
                            <td><?= $data['expire_date'] ?> </td>
                        </tr>


                <?php

                    }
                }
                ?>

        </table>
        <div id="modal-section">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">
                Apply Now
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Upload File</h5><span class="pdf">PDF only***</span>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="cv" id="inputGroupFile01" placeholder="hkldjfl">
                                        <label class="input-group-text" for="inputGroupFile01">Browse</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="job_title" id="inputGroupSelect02">
                                            <option selected>Choose Title</option>


                                            <?php
                                            if ($result2->rowCount() > 0) {
                                                while ($data = $result2->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                                    <option value="<?= $data['id'] ?>"> <?= $data['job_title'] ?> </option>
                                            <?php

                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-danger float-end">Upload</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'includes/footer.php' ?>