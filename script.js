function validate() {
    const homeTeam = document.getElementById("homeTeam").value;
    const awayTeam = document.getElementById("awayTeam").value;
    const homeTeamGoals = document.getElementById("homeTeamGoals").value;
    const awayTeamGoals = document.getElementById("awayTeamGoals").value;

    if(homeTeam == awayTeam) {
        alert("Home team and away team cannot be the same!");
        return false;
    }
    if(homeTeamGoals < 0) {
        alert("You have to enter valid number of goals for home team!");
        return false;
    }
    if(awayTeamGoals < 0) {
        alert("You have to enter valid number of goals for away team!");
        return false;
    }

    return (true);
}