<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Football league</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
<header class="p-3 text-bg-success">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <h1 class="h1 m-4">English Premier League</h1>
        </div>
    </div>
</header>
<div class="container-sm">
    <div class="container-sm mt-4 table-responsive">
        <?php
            include "showFootballLeagueTable.php";
        ?>
    </div>
    <hr/>
    <div class="container-sm my-4 card">
        <?php
            include "enterMatchResults.php";
        ?>
    </div>
</div>
</body>
</html>
