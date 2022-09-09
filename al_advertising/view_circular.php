<?php
include 'aa_db.php';
$table = "career";
$stmt = "SELECT * FROM $table";
$result = $conn->query($stmt);
$i = 1;

include 'header.php';
?>

<div class="bs-example">
    <h1 class="text-center">View Posted Job</h1>
    <hr class="w-50 mb-5">
    <table class="table table-striped table-hover my-5">
        <thead>
            <tr>
                <th># </th>
                <th>Job Title</th>
                <th>Location</th>
                <th>Department</th>
                <th>Expire Date</th>
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
                        <td><?= $data['job_title'] ?> </td>
                        <td><?= $data['location'] ?> </td>
                        <td><?= $data['department'] ?> </td>
                        <td><?= $data['expire_date'] ?> </td>

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