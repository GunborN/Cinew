<?php
include 'login.php';
echo "<p><b>Logged In As: {$_SESSION["user"]}</b></p>";
echo "<p><b>Today's Date: {$_SESSION["today_date"]}</b></p>";
echo 
	"<form action='logout.php'>
	<div align='left'> <button class='button2'>LOG OUT</button> </div>
	</form>";
$user = $_SESSION["user"];
?>

<html>
<body>

<head>
<title> 
Admin Panel
</title>
</head>

<body style="background-color:lightgrey">
<div align="center">

<h1><u>Admin Panel</u></h1>
<br><br>

<h2><u>Add to Database</u></h2>
<head>
<style>
.button2{
	background: red;
	font-size: 16px;
	width: 100px;
	height: 50px
}

.button4{
	background: orange;
	font-size: 24px;
	width: 150px;
	height: 80px
}

.form1 {
   display:inline;
   margin:0;
   padding:0;
}

.button5{
	background: orange;
	font-size: 15px;
	width: 150px;
	height: 80px
}

</head>
</style>


<?php
	if($user == "Admin"){
		echo 
		"<form action='AdminAddToCinplex.php' class='form1'>
		<button class='button4' type='submit'>Add to Cinplex</button>
		</form>
		
		 <form action='AdminAddToMember.php' class='form1'>
		<button class='button4' type='submit'>Add to Member</button>
		</form>
		
		<form action='AdminAddToMembership.php' class='form1'>
		<button class='button4' type='submit'>Add to Membership</button>
		</form>
		
		<form action='AdminAddToMovie.php' class='form1'>
		<button class='button4' type='submit'>Add to Movie</button>
		</form>
		
		<form action='AdminAddToReservation.php' class='form1'>
		<button class='button4' type='submit'>Add to Reservation</button>
		</form>
		
		<form action='AdminAddToSeats.php' class='form1'>
		<button class='button4' type='submit'>Add to Seats</button>
		</form>
		
		<form action='AdminAddToTheater.php' class='form1'>
		<button class='button4' type='submit'>Add to Theater</button>
		</form>
		
		<form action='AdminAddToWatch.php' class='form1'>
		<button class='button4' type='submit'>Add to Watch</button>
		</form>
		
		<form action='AdminAddToPlay.php' class='form1'>
		<button class='button4' type='submit'>Add to Play Table</button>
		</form>
		
		<form action='AdminAddToReservationSeatAssignments.php' class='form1'>
		<button class='button5' type='submit'>Add to Reservation Seat Assignments</button>
		</form>";
		
		echo "<h2><u>Delete from Database</u></h2>";
		
		echo 
		"<form action='AdminDeleteFromCinplex.php' class='form1'>
		<button class='button4' type='submit'>Delete From Cinplex</button>
		</form>
		
		 <form action='AdminDeleteFromMember.php' class='form1'>
		<button class='button4' type='submit'>Delete From Member</button>
		</form>
		
		<form action='AdminDeleteFromMembership.php' class='form1'>
		<button class='button4' type='submit'>Delete From Membership</button>
		</form>
		
		<form action='AdminDeleteFromMovie.php' class='form1'>
		<button class='button4' type='submit'>Delete From Movie</button>
		</form>
		
		<form action='AdminDeleteFromReservation.php' class='form1'>
		<button class='button4' type='submit'>Delete From Reservation</button>
		</form>
		
		<form action='AdminDeleteFromSeats.php' class='form1'>
		<button class='button4' type='submit'>Delete From Seats</button>
		</form>
		
		<form action='AdminDeleteFromTheater.php' class='form1'>
		<button class='button4' type='submit'>Delete From Theater</button>
		</form>
		
		<form action='AdminDeleteFromWatch.php' class='form1'>
		<button class='button4' type='submit'>Delete From Watch</button>
		</form>
		
		<form action='AdminDeleteFromPlay.php' class='form1'>
		<button class='button4' type='submit'>Delete From Play Table</button>
		</form>
		
		<form action='AdminDeleteFromReservationSeatAssignments.php' class='form1'>
		<button class='button5' type='submit'>Delete From Reservation Seat Assignments</button>
		</form>";
	}
	else{
		echo"<h1>Invalid Access! Not an admin</h1>";
		echo 
		"<form action='StartPage.php'>
		<button class='button2' type='submit'>Back</button>
		</form>";
	}
?>

</div>
</body>
</html>