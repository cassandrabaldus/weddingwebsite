<html>
<body>
<?php
	$message = "Name: " . $_POST['name'] . "\nSong: " . $_POST['song'] . "\nArtist: " . $_POST['artist'];
	mail("kteebaldus@gmail.com","song suggestions",$message);
?>
submitted successfully!<br>
Name: <?php echo $_POST['name']; ?><br>
Song: <?php echo $_POST['song']; ?><br>
artist: <?php echo $_POST['artist']; ?><br>
</body>
</html>