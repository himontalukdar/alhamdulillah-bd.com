<?php  
include 'aa_db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['department'];
   $result = $conn->query("INSERT INTO category(category_name) VALUES ('$name')");
   if($result){
    $success = "Insert successfully."; 
   }else{
    $error = "Insert failed";
   }
}





include 'header.php';
?>

<div class="bs-example">
<?php include 'alert.php' ?>
    <h1 class="text-center">Add Department</h1>
    <hr class="w-50 mb-5">
    <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="department">Department Name </label>
            <input type="text" name="department" class="form-control" id="department" aria-describedby="emailHelp" placeholder=" Department Name ...">
        </div>
        


        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php include 'footer.php';


?>