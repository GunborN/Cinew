<?php
include 'login.php';
?>

<html>
<body style="background-color:lightgrey">

<div align="center">
<head>
<title> 
Seat Reservations
</title>
</head>

<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
}
caption{
	border: 1px solid black;
	font-size: 30;
}
</style>
</head>

<h3>Seat Reservations</h3>

<?php
    $cinplexResult = mysql_query("SELECT * FROM cinplex") or die(mysql_error());
?>

<?php
	// Access form variables
	//$cinema = $_POST['complexes'];
		while($row = mysql_fetch_array($cinplexResult)){
			$cinplexName = $row['name'];
			$cinplexAddr = $row['addr'];
			echo"<table style='width:50%'>";
			echo "<caption>{$cinplexName}</caption>
			<tr>
				<th>Movie</th>
				<th>Theater</th>
				<th>Showtime</th>
				<th>Reserve</th>
			</tr>";
			$movieResult = mysql_query("select * from play P,cinplex C where P.addr = C.addr;") or die(mysql_error());
			while($row = mysql_fetch_array($movieResult)){
				if($row['addr'] == $cinplexAddr){
					echo "<caption>{$row['name']}</caption>
					<tr>
						<th>{$row['title']}</th>
						<th>{$row['t_num']}</th>
						<th>{$row['showtime']}</th>
						<th>
							<form action='SeatResDisplay.php' method='POST'>
							<input type='hidden' value='{$cinplexName}' name='complex'/>
							<input type='hidden' value='{$row['title']}' name='title'/>
							<input type='hidden' value='{$row['t_num']}' name='theater'/>
							<input type='hidden' value='{$row['showtime']}' name='showtime'/>
							<input type='submit' value='Reserve' style='height:40px; width:100px'/>
							</form>
						</th>
					</tr>";
				}
			}
			echo"</table>
				<br><br><br>";
		}
?>
<br><br><br>

<form action="SeatResDisplay.php" method="POST">
<button type="submit">Back</button>
</form>

</div>
</body>
</html>