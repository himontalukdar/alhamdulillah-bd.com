<?php
include 'aa_db.php';
 
include 'header.php';

if (isset($_POST['submit'])) {
   
    $dir = "../images/service/";
    $title = $_POST['title'];
    $description = $_POST['description'];

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");
        $filename = $_FILES["image"]["name"];
        $filetype = $_FILES["image"]["type"];
        $filesize = $_FILES["image"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (!array_key_exists($ext, $allowed)) {
            $error = "Please select a valid file format.";
        } else {

            // Verify file size - 5MB maximum
            $maxsize = 5 * 1024 * 1024;
            if ($filesize > $maxsize) {
                $error = "File size is larger than the allowed limit.";
            } else {
                // Verify MYME type of the file
                if (in_array($filetype, $allowed)) {               
                    $upload =  move_uploaded_file($_FILES["image"]["tmp_name"], $dir . $filename);
                    $insert = $conn->query("INSERT INTO service(service_title, service_details, service_image) VALUES ('$title','$description','$filename')");
                    if ($upload && $insert) {
                        $success = "Uploaded successfully."; 
                    } else {
                        $error = "Your file was upload failed";
                    }
                   
                } else {
                    $error = "There was a problem uploading your file. Please try again.";
                }
            }
        }
    } else {
        $error = "Error: " . $_FILES["image"]["error"];
    }
}





?>

<div class="bs-example">
    <?php include 'alert.php' ?>
    <h1 class="text-center">Add Service</h1>
    <hr class="w-50 mb-5">
    <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="title">Service Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder=" Service Title...">
        </div>
        <div class="form-group">
            <label for="image">Service Image</label>
            <input type="file" name="image" class="form-control" id="image" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="description">Service Description</label>
            <textarea name="description" class="form-control" id="description" aria-describedby="emailHelp" placeholder=" Service Description..." rows="10"> </textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php include 'footer.php';


?>