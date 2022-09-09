<?php
include 'aa_db.php';
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $table = $_GET['table'];
    $stmt2 = "DELETE FROM $table WHERE id = $id";
    $result2 = $conn->query($stmt2);
    if ($result2) {
        $success = "Delete successfully.";
    } else {
        $error = "Delete Failed";
    }
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
