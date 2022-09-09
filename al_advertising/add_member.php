<?php
include 'aa_db.php';
$stmt = "SELECT * FROM category";
$result = $conn->query($stmt);
include 'header.php';

if (isset($_POST['submit'])) {

    $dir = "../images/team/";
    $name = $_POST['name'];
    $post = $_POST['post'];
    $department = $_POST['department'];
 

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
                    $insert = $conn->query("INSERT INTO employee(employee_name, employee_post, employee_image, category_id) VALUES ('$name','$post','$filename','$department')");
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
        $error = "Error: " . $_FILES["image"]["error"];
    }
}

?>
<div class="bs-example">
    <?php include 'alert.php' ?>
    <h1 class="text-center">Add Employee</h1>
    <hr class="w-50 mb-5">
    <form  method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="name">Employee Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder=" Employee Name...">
        </div>
        <div class="form-group">
            <label for="post">Employee Post</label>
            <input type="text" name="post" class="form-control" id="post" aria-describedby="emailHelp" placeholder=" Employee Post...">
        </div>

        <div class="form-group">
            <label for="image">Employee Image</label>
            <input type="file" name="image" class="form-control" id="image" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="catagory">Employee Department</label>
            <select id="catagory" name="department" class="form-control" id="name" aria-describedby="emailHelp">
                <?php if($result->rowCount()>0){
                    while($data= $result->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value= '" . $data['id'] . "' >{$data['category_name']}</option>";
                    }

                } ?>
            </select>
        </div>


        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php include 'footer.php';


?>