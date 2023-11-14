<?php session_start();
$answer = $_POST['answer'];
$file = file("../database/q.txt");
$fileData = $file[$_SESSION['current_question']];
$fileData = explode("%", $fileData);
$correctAns = $fileData[6];
if ($_SESSION['current'] == -1 || $_SESSION['current'] == null) {
    //user is not in a game
    header("Location: ../php/index.php");
}
if (trim($answer) != trim($correctAns))
{
	updateLeaderboard();
	$_SESSION["current"] = -1;
    header("Location: ../php/loser.php"); 
}
else 
{
	$_SESSION['current'] = $_SESSION['current'] + 1;
	if ($_SESSION['current'] == 15)//If user won the game
	{
		updateLeaderboard();
		$_SESSION["current"] = -1;
		header("Location: ../php/winner.php");
	}
	else
	{
		header("Location: ../php/questions.php");
	}
}

function updateLeaderboard()
{
	$leaderboardData = $_SESSION['user_auth'].":".$_SESSION['current'].PHP_EOL;
	file_put_contents('../database/leaderboard.txt', $leaderboardData, FILE_APPEND);
}
?>