<?php
include 'aa_db.php';
$table = "service";
$stmt = "SELECT * FROM $table";
$result = $conn->query($stmt);
$i = 1;

include 'header.php';
?>

<div class="bs-example">
<?php include 'alert.php' ?>
    <h1 class="text-center">View Service</h1>
    <hr class="w-50 mb-5">
    <table class="table table-striped table-hover my-5">
        <thead>
            <tr>
                <th># </th>
                <th>Service Title </th>
                <th>Description</th>
                <th>Image</th>
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
                        <td><?= $data['service_title'] ?> </td>
                        <td>
                            <?= substr($data['service_details'], 0, 70) ?>.....
                        </td>
                        <td><img width="100px" height="100px" src="../images/service/<?= $data['service_image'] ?>" alt="Service Image"></td>
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