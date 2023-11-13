<?php 
session_start(); 
function getAnswer($num) {
    $questions = file_get_contents("../database/q.txt");
    $questions = explode("\n", $questions);
    return explode("%", $questions[$num])[5];
}
function is_wrong($questionNumber) {
    return $_POST["answer"] != getAnswer($questionNumber);
}
if ($_SESSION['current'] == -1 || $_SESSION['current'] == null) {
    //user is not in a game
    header("Location: ../php/index.php");
}

if (is_wrong($_SESSION['current'])) {
    //save points to db here
	updateLeaderboard();
    header("Location: ../php/loser.php"); 
}
else {
	$_SESSION['current'] = $_SESSION['current'] + 1;
	if ($_SESSION['current'] == 15)//If user won the game
	{
		updateLeaderboard();
		header("Location: ../php/winner.php");
	}
    header("Location: ../php/questions.php");
}

function updateLeaderboard()
{
	$leaderboardData = $_SESSION['user_auth'].":".$_SESSION['current'].PHP_EOL;
	file_put_contents('../database/leaderboard.txt', $leaderboardData, FILE_APPEND);
    $_SESSION["current"] = -1;
}
?>