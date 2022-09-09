<?php
include 'aa_db.php';
include 'header.php';
$i = 1;
$dir = 'https://alhamdulillah-bd.com/files/cv/';
$stmt = "SELECT * FROM career Where status = '0'";
$result = $conn->query($stmt);
if (isset($_POST['submit'])) {
    $title_id = $_POST['title'];
    $stmt2 = "SELECT * FROM apply WHERE job_id ='$title_id' ORDER BY apply_date DESC";
    $result2 = $conn->query($stmt2);
}
?>


<div class="bs-example w-50">
    <h1 class="text-center">View All CV</h1>
    <hr class="w-50 mb-5">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input-group">
            <select class="custom-select" name="title" id="inputGroupSelect04" required>
                <option value="" disabled selected>select title</option>
                <?php if ($result->rowCount() > 0) {
                    while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<option value= '" . $data['id'] . "' >{$data['job_title']}</option>";
                    }
                } ?>
            </select>
            <div class="input-group-append">
                <button class="btn btn-sm rounded-0 btn-success" name="submit" type="submit">Click To View</button>
            </div>
        </div>
    </form>

    <table class="table table-striped table-hover my-5">
        <thead>
            <tr>
                <th># </th>
                <th>CV Name </th>
                <th>Apply Date</th>
                <th class='text-center'>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($result2)) {
                if ($result2->rowCount() > 0) {
                    while ($data = $result2->fetch(PDO::FETCH_ASSOC)) {
            ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $data['cv_name'] ?></td>
                            <td><?= $data['apply_date'] ?></td>

                            <td class='text-center'><a class="rounded-0" target="_blank" href="<?=$dir.$data['cv_name'] ?>">click To Download</a></td>


                        </tr>
            <?php
                        $i++;
                    }
                } else {
                    echo "<tr><td class='text-center text-danger' colspan='4'><h2>No Record Found For This Post</h2></td></tr>";
                }
            } else {
                echo "<tr><td class='text-center text-warning' colspan='4'><h2>Select Job Title First!!!!</h2></td></tr>";
            }
            ?>
    </table>

</div>


<?php include 'footer.php';


?>