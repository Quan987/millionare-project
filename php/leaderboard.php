<?php 
	$users = file("db.txt"); 
	$userInfo = array(); 
	$userScore = array(); 
	
	$count = 0; 
	$length = 10; 
	
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
<link rel="stylesheet" href="../css/style.css"> 
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
				$count++; ?> 
				 
				<tr> 
					<td > <?= $count ?></td>
					<td > <?= $key ?> </td> 
					<td > <?= $value ?> </td>
				</tr>; 
			<?php if($count == $length) {
					break; 
				}
			}
		?>
	</table> 
	<div> 
		<div class = "nav"> 
				<a href = "./index.php" class = "box">
				Go to Main Page</a> 
				
				<a href = "logout.php" class = "box"> 
				Log Out </a> 
				
		</div>
	</div>
</div> 
</body>
</html>