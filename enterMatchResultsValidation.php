<?php

include "connection.php";

if(isset($_REQUEST['homeTeam']) && isset($_REQUEST['awayTeam']) && isset($_REQUEST['homeTeamGoals']) && isset($_REQUEST['awayTeamGoals']) && isset($_REQUEST['date'])) {
    $homeTeam = $_REQUEST['homeTeam'];
    $awayTeam = $_REQUEST['awayTeam'];
    $homeTeamGoals = $_REQUEST['homeTeamGoals'];
    $awayTeamGoals = $_REQUEST['awayTeamGoals'];
    $date = $_REQUEST['date'];

    $englishPremierLeaguePointsWin = 3; //points for winning
    $englishPremierLeaguePointsDraw = 1; //points when draw

    if($homeTeamGoals > $awayTeamGoals) { //team1 is winner
        $update1 = "UPDATE `football_league` SET `wins` = (wins + 1), `points` = (points + ".$englishPremierLeaguePointsWin.") WHERE `football_league`.`id` = ".$homeTeam."; ";
        $update2 = "UPDATE `football_league` SET `loses` = (loses + 1) WHERE `football_league`.`id` = ".$awayTeam."; ";
    }
    if($homeTeamGoals < $awayTeamGoals) { //team2 is winner
        $update1 = "UPDATE `football_league` SET `wins` = (wins + 1), `points` = (points + ".$englishPremierLeaguePointsWin.") WHERE `football_league`.`id` = ".$awayTeam."; ";
        $update2 = "UPDATE `football_league` SET `loses` = (loses + 1) WHERE `football_league`.`id` = ".$homeTeam."; ";
    }
    if($homeTeamGoals == $awayTeamGoals) { //draw
        $update1 = "UPDATE `football_league` SET `draws` = (draws + 1), `points` = (points + ".$englishPremierLeaguePointsDraw.") WHERE `football_league`.`id` = ".$homeTeam."; ";
        $update2 = "UPDATE `football_league` SET `draws` = (draws + 1), `points` = (points + ".$englishPremierLeaguePointsDraw.") WHERE `football_league`.`id` = ".$awayTeam."; ";
    }

    $update3 = "UPDATE `football_league` SET `games_played` = (games_played + 1) WHERE `football_league`.`id` = ".$homeTeam."; ";
    $update4 = "UPDATE `football_league` SET `games_played` = (games_played + 1) WHERE `football_league`.`id` = ".$awayTeam."; ";

    $insert = "INSERT INTO `games` (`game_id`, `home_team_id`, `home_team_goals`, `away_team_id`, `away_team_goals`, `date`) VALUES (NULL, '{$homeTeam}', '{$homeTeamGoals}', '{$awayTeam}', '{$awayTeamGoals}', '{$date}'); ";

    $result1 = $connection->query($update1);
    $result2 = $connection->query($update2);
    $result3 = $connection->query($update3);
    $result4 = $connection->query($update4);
    $result5 = $connection->query($insert);

    if($result1 === true || $result2 === true || $result3 === true || $result4 === true || $result5 === true) {
        header("Location: index.php");
    } else {
        die("Error when updating or inserting!");
    }
} else {
    header("Location: index.php");
}
?>