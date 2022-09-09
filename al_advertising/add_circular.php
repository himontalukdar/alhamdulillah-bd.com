<?php
include 'aa_db.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $location = $_POST['location'];
    $department = $_POST['department'];
    $date = $_POST['date'];

    $result = $conn->query("INSERT INTO career (job_title, location, department, expire_date) VALUES ('$title', '$location', '$department', '$date')");
    if ($result) {
        $success = "Insert successfully.";
    } else {
        $error = "Insert failed";
    }
}





include 'header.php';
?>

<div class="bs-example">

    <?php include 'alert.php' ?>
    <h1 class="text-center">Post Job</h1>
    <hr class="w-50 mb-5">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="title">Job Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder=" Job Title...">
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" id="location" aria-describedby="emailHelp" placeholder=" Location...">
        </div>

        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" class="form-control" id="department" aria-describedby="emailHelp" placeholder=" Department...">
        </div>

        <div class="form-group">
            <label for="date">Expire Date</label>
            <input type="text" name="date" class="form-control" id="date" aria-describedby="emailHelp" placeholder=" Expire Date...">
        </div>




        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php include 'footer.php';


?>