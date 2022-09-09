<?php
session_start();
include 'aa_db.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    if ($email != "" && $pwd != "") {
        $stmt = "SELECT * FROM `authentication` WHERE email='$email'";
        $result = $conn->query($stmt);
        if ($result->rowCount() > 0) {
            $data = $result->fetch(PDO::FETCH_ASSOC);
            if($data['pwd'] === $pwd){
                 $_SESSION['role']=$data['role_id'];
                 header("Location:dashboard.php");
            }else{
                echo 'password incorect';
            }
        } else {
            echo "no account found";
        }
    } else {
        echo "fillup required Field";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo/fav.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>
        Admin Panel
    </title>
    <style>
        body {
            background: #cddacd87;
        }

        .admin-box {
            padding: 20px;
            position: absolute;
            box-shadow: 3px 4px 4px 2px #ff0000;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-3 admin-box">
                <h1 class="text-center">
                    Admin Panel
                </h1>
                <hr class="mb-5">
                <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password</label>
                        <input type="password" name="pwd" class="form-control" id="pwd">
                    </div>
                    <!-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="submit" name="login" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>