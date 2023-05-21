<?php

include "connection.php";

$query = "SELECT id, team FROM `football_league`";
$result = $connection->query($query);

if($result->num_rows>0) {
    ?>
        <?php
        while($row = mysqli_fetch_assoc($result)) {
            ?>
                <option value="<?= $row['id'] ?>"><?= $row['team'] ?></option>
            <?php
        }
}
?>
