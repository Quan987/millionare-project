<?php 

function getAnswer($num) {
    $questions = file_get_contents("q.txt");
    $questions = explode("\n", $questions);
    return explode("%", $questions[$num])[5];
}
function is_wrong($questionNumber) {
    return $_POST != getAnswer($questionNumber);
}

if (is_wrong($_COOKIE["current"])) {
    setcookie("current", -1);
    header("Location: ./leaderboard.php");
}
else {
    header("Location: ./question.php");
}

?>