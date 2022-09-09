<?php
include 'aa_db.php';
$table = "client";
$stmt = "SELECT * FROM $table";
$result = $conn->query($stmt);
$i = 1;

include 'header.php';
?>
<div class="bs-example">
    <h1 class="text-center">View Client </h1>
    <hr class="w-50 mb-5">
    <table class="table table-striped table-hover my-5">
        <thead>
            <tr>
                <th># </th>
                <th>Client Name</th>
                <th> Client Image</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            if ($result->rowCount() > 0) {
                while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>

                    <tr>
                        <th><?= $i ?></th>
                        <td><?= $data['company_name'] ?> </td>
                        <td><img width="100px" height="100px" src="../images/service/<?= $data['company_image'] ?>" alt="Client Image"></td>
                        <td class="text-center"><a class="btn btn-danger rounded-0" href="delete.php?table=<?= $table ?>&delete_id=<?= $data['id'] ?>">Delete</a></td>
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