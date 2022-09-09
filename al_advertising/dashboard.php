<?php include 'header.php'; ?>
<?php

        if($_SESSION['role']==1){
            echo "<h1>WelCome Admin</h1>";
        }
        else{
            echo "<h1>WelCome Author</h1>";
        }


?>
<?php include 'footer.php'; ?>