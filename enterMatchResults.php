<?php
?>

<div class="card-body">
    <form action="enterMatchResultsValidation.php" method="post" class="form row" name="gameResultsForm" id="gameResultsForm" onsubmit="return validate()">
        <h4>Enter match results:</h4>
        <div class="col-md-6 mt-2">
            <label for="homeTeam" class="form-label">Home team</label>
            <select id="homeTeam" name="homeTeam" class="form-select" required>
                <option value=""></option>
                <?php
                    include "showTeamsInLeague.php";
                ?>
            </select>
        </div>
        <div class="col-md-6 mt-2">
            <label for="awayTeam" class="form-label">Away team</label>
            <select id="awayTeam" name="awayTeam" class="form-select" required>
                <option value=""></option>
                <?php
                    include "showTeamsInLeague.php";
                ?>
            </select>
        </div>
        <div class="col-md-6 mt-2">
            <label for="homeTeamGoals" class="form-label">Home team goals</label>
            <input type="number" class="form-control" id="homeTeamGoals" name="homeTeamGoals" required>
        </div>
        <div class="col-md-6 mt-2">
            <label for="awayTeamGoals" class="form-label">Away team goals</label>
            <input type="number" class="form-control" id="awayTeamGoals" name="awayTeamGoals" required>
        </div>
        <div class="col-md-12 mt-2">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="d-grid gap-2 my-3">
            <button type="submit" id="submit" name="submit" class="btn btn-success">Enter results</button>
        </div>
    </form>
</div>
