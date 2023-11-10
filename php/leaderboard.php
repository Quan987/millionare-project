<?php 
	$users = file("data.txt"); 
	$userInfo = array(); 
	$userScore = array(); 
	
	$name;
	$score; 
	$leaderboardCount = 0; 
	$length = 5; 
	
	foreach($users as $u) {
		$userInfo[] = explode(",", $u); 
		
		foreach($userInfo as $user) {
			$userScore[$user[0]] = $user[2]; 
		}
	}
	asort($userScore, SORT_NATURAL); 
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="utf-8">
<title>LEADERBOARD: Who Wants To Be A Millionaire!</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id = "mainarea"> 
	<div id = "top"> 
			<img src = "logo.png" alt = "Logo"> 
		</div> 
		<h1>Who wants to be a Millionaire!</h1>
	<h2> Leaderboard </h2> 
	<table> 
		<tr>
			<th> Rank </th>
			<th> Participants </th> 
			<th> Scores </th> 
		</tr>
		<?php 
			foreach($userScore as $key => $value) {
				$leaderboardCount++; 
				echo " 
				<tr> 
					<td class = name>$leaderboardCount </td>
					<td class = rank> $key </td> 
					<td c;ass = score> $value </td>
				</tr>"; 
				if($leaderboardCount == $length) {
					break; 
				}
			}
		?>
	</table> 
	<div> 
		<button onclick = "document.location = 'homepage.php'">Try Again</button> 
		<button onclick = "document.location = 'logout.php'">Log Out </button> 
	</div>
</div> 
</body>
</html>