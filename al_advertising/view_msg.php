<?php
include 'aa_db.php';
$table = "contact";
$stmt = "SELECT * FROM $table";
$result = $conn->query($stmt);
$i = 1;


include 'header.php';
?>


<div class="bs-example">
    <h1 class="text-center">View Messages</h1>
    <hr class="w-50 mb-5">
    <table class="table table-striped table-hover my-5">
        <thead>
            <tr>
                <th># </th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            if ($result->rowCount() > 0) {
                while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>

                    <tr>
                        <th><?= $i ?></th>
                        <td><?= $data['user_name'] ?> </td>
                        <td><?= $data['user_email'] ?> </td>
                        <td><?= $data['user_mobile'] ?> </td>
                        <td><?= $data['user_message'] ?> </td>
                        <td><a class="btn btn-danger rounded-0" href="delete.php?table=<?= $table ?>&delete_id=<?= $data['id'] ?>">Delete</a></td>
                    </tr>


            <?php
                    $i++;
                }
            }

            ?>


    </table>
</div>



<?php include 'footer.php';


?>