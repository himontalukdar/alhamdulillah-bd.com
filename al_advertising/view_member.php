<?php
include 'aa_db.php';
$table = "employee";
$stmt = "SELECT employee.id, employee.employee_name, employee.employee_post, employee.employee_image, category.category_name  FROM employee  JOIN category  on employee.category_id = category.id";
$result = $conn->query($stmt);
$i = 1;

include 'header.php';
?>
<div class="bs-example">
    <h1 class="text-center">View Team Membar </h1>
    <hr class="w-50 mb-5">
    <table class="table table-striped table-hover my-5">
        <thead>
            <tr>
                <th># </th>
                <th>Employee Name</th>
                <th>Post</th>
                <th>Image</th>
                <th>Departmenet</th>
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
                        <td><?= $data['employee_name'] ?> </td>
                        <td><?= $data['employee_post'] ?> </td>
                        <td><img width="100px" height="100px" src="../images/team/<?= $data['employee_image'] ?>" alt="Employee Image"></td>
                        <td><?= $data['category_name'] ?> </td>
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