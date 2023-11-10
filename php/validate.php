<?php 

function getAnswer($num) {
    $questions = file_get_contents("q.txt");
    $questions = explode("\n", $questions);
    return explode("%", $questions[$num])[5];
}
function is_wrong($questionNumber) {
    return $_POST["answer"] != getAnswer($questionNumber);
}
if ($_COOKIE["current"] == -1) {
    //user is not in a game
    header("Location: ./index.php");
}

if (is_wrong($_COOKIE["current"])) {
    setcookie("current", -1);
    //save points to db here
    setcookie("point", 0);
    header("Location: ./leaderboard.php");
}
else {
    setcookie("point", $_COOKIE["point"] + 1);
    header("Location: ./question.php");
}

?>