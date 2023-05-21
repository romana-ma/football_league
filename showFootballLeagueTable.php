<?php

include "connection.php";

$query = "SELECT * FROM `football_league` ORDER BY points DESC";
$result = $connection->query($query);
$rank = 1;

if($result->num_rows>0) {
    ?>
    <table class="table table-hover">
        <thead>
            <tr class="table-success">
                <th scope="col" class="row-horizontal">Rank</th>
                <th scope="col">Team </th>
                <th scope="col" class="row-horizontal">Games played</th>
                <th scope="col" class="row-horizontal">Wins </th>
                <th scope="col" class="row-horizontal">Draws</th>
                <th scope="col" class="row-horizontal">Loses</th>
                <th scope="col" class="row-horizontal">Points</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php
        while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <th scope="row" class="row-horizontal"><?= $rank ?></th>
                    <td><?= $row['team'] ?></td>
                    <td class="row-horizontal"><?= $row['games_played'] ?></td>
                    <td class="row-horizontal"><?= $row['wins'] ?></td>
                    <td class="row-horizontal"><?= $row['draws'] ?></td>
                    <td class="row-horizontal"><?= $row['loses'] ?></td>
                    <td class="row-horizontal"><?= $row['points'] ?></td>
                </tr>
            <?php
            $rank++;
        }
        ?>
        </tbody>
    </table>
    <?php
}
?>