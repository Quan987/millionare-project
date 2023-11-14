<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="mainarea"> 
	<div id = "top"> 
			<img src="../img/logo.png" alt="Logo"> 
		</div> 
		<h1>Who wants to be a Millionaire!</h1>
	<h2> Leaderboard </h2> 
	<table> 
		<tr>
			<th> Rank </th>
			<th> Participants </th> 
			<th> Scores </th> 
		</tr>
		<!-- Implement leaderboard -->
		<?php
			$leaderboard = file("../database/leaderboard.txt");
			$dataSize = count($leaderboard);
			for($i = 0; $i < $dataSize; $i++)
			{
				$leaderboard[$i] = explode(":", $leaderboard[$i]);
			}
			for($c = 0; $c < $dataSize; $c++)
			{
				$high = $c;
				for($d = $c + 1; $d < $dataSize; $d++)
				{
					if($leaderboard[$d][1] > $leaderboard[$high][1])
					{
						$high = $d;
					}
				}
				if($leaderboard[$c][1] < $leaderboard[$high][1])
				{
					$temp = $leaderboard[$c];
					$leaderboard[$c] = $leaderboard[$high];
					$leaderboard[$high] = $temp;
				}
			}
			if($dataSize < 10)
			{
				for($j = 0; $j < $dataSize; $j++)
				{ ?>
					<tr>
						<td><?= $j+1; ?></td>
						<td><?= $leaderboard[$j][0]; ?></td>
						<td><?= $leaderboard[$j][1]; ?></td>
					</tr>
				<?php }
			}
			else
			{
				for($k = 0; $k < 10; $k++)
				{ ?>
					<tr>
						<td><?= $k+1; ?></td>
						<td><?= $leaderboard[$k][0]; ?></td>
						<td><?= $leaderboard[$k][1]; ?></td>
					</tr>
			<?php }
			} ?>
	</table> 
    <h2> <a href="./session-destroy.php">Go to Main Page</a> </h2> 
</div> 
</body>
</html>