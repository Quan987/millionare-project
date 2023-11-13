<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="../css/style.css" type="text/css" rel="stylesheet"/>
<title>Who wants to be a Millionaire!</title> 
<style>
fieldset
{
	margin:auto;
	width:100%;
	display:grid;
	grid-template-columns:auto auto;
	grid-template-rows: auto auto;
}
h2
{
	text-align:center;
	color:red;
}
#question
{
	width:50%;
}
div
{
	margin:auto;
}
form div
{
	display:flex;
	justify-content:center;
}
</style>
</head> 
<body>
	<?php
		//$_SESSION['current'] or point whichever works start with 0
		//Assumption on the question file, question in format "question,a,b,c,d,correct answer"
		if($_SESSION['current'] < 0 || $_SESSION['current'] > 15 || $_SESSION["current"] == null)
		{
			header("Location: ./index.php");
		}
		$questions = file("../database/q.txt");
		$current = $questions[$_SESSION['current']];
		$current = explode("%", $current);
	?>
	    <div id = "mainarea">
			<div id = "top"> 
				<img src = "../img/logo.png" alt = "Logo"> 
			</div> 
				<h1>Who wants to be a Millionaire!</h1>
				<p> Welcome to "Who wants to be a Millionaire"!</p>
		</div>
		<div id="question">
			<form method="post" action="validate.php">
				<h2><?= $current[0];?></h2>
				<fieldset>
					<div>
					<input type="radio" id="A" name="answer" value="A">
					<label for="A"><?= $current[1];?></label>
					</div>
					<div>
					<input type="radio" id="B" name="answer" value="B">
					<label for="B"><?= $current[2];?></label>
					</div>
					<div>
					<input type="radio" id="C" name="answer" value="C">
					<label for="C"><?= $current[3];?></label>
					</div>
					<div>
					<input type="radio" id="D" name="answer" value="D">
					<label for="D"><?= $current[4];?></label>
					</div>
				</fieldset>
				<div>
					<input type="submit" value="Submit Answer">
				</div>
			</form>
		</div>
</body>