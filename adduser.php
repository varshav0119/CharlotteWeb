<?php
	$conn=mysqli_connect("localhost","root","","Charlotte's Web");
	if(!$conn)
		echo "Error. Please go back and try again.";
	else
	{
		extract($_POST);
		$query = "SELECT Username FROM users";
		$res=mysqli_query($conn,$query);
		$numr=mysqli_num_rows($res);
		$flag=0;
		//if($numr>0)
		//{
		for($i=0;$i<$numr;$i++)
		{
			$row=mysqli_fetch_assoc($res);
			if($un==$row["Username"])
			{
				echo "<div id='d'><center><p id='txt'> Username already exists! Please try a different one. </p>";
				echo "<br/><br/><a id='linky' href='signup.html'>Sign Up</a><br/><br/>";
				echo "<a id='homie' href='index.php'>Homepage</a></center></div>";
				$flag=1;
			}
		}
		if($flag==0)
		{
			$ins = "INSERT INTO users(Username,Password) VALUES('$un','$pw')";
			if(mysqli_query($conn,$ins))
			{
				echo "<div id='d'><center><p id='txt'>You have signed up successfully.</p><br/><br/>";
				echo "<a id='linky' href='signin.html'>Sign In</a><br/><br/>";
				echo "<a id='homie' href='index.php'>Homepage</a></center></div>";
			}
			else
			{
				echo "<div id='d'><center><p id='txt'>Your attempt to sign up was unsuccessful. Please try again.</p><br/><br/>";
				echo "<a id='linky' href='signin.html'>Sign In</a><br/><br/>";
				echo "<a id='homie' href='index.php'>Homepage</a></center></div>";
			}
		}
	}
	mysqli_close($conn);
?>

<html>
	<head>
		<link rel="icon" href="favi.png"/>
		<title>Charlotte's Web</title>
		<style>
			#d
			{
				width:30%;
				height:50%;
				border-radius:20px;
				display:-webkit-flex;
				display:flex;
				background-color:white;
				-webkit-flex-direction:column;
				flex-direction:column;
				position:absolute;
				left:35%;
				top:25%;
			}
			#txt
			{
				position:relative;
				top:25px;
				font-family:Orator Std;
				font-size:25px;
				padding-left:5px;
				padding-right:5px;
			}
			#linky
			{
				font-family:Orator Std;
				font-size:20px;
			}
			#homie
			{
				font-family:Orator Std;
				font-size:20px;
			}
		</style>
	</head>
	<body>
		<audio id="audio" src="1.mp3" loop="true"/>
	</body>
	<script>
		var audio = document.getElementById("audio");
		if(localStorage.getItem("audio")=="play")
			audio.play();
		var theme = localStorage.getItem("theme");
		if(theme=='url("theme1.jpg")'|| theme=="url('theme1.jpg')" || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_1.jpg)";
		else if(theme=='url("theme2.jpg")' || theme=="url('theme2.jpg')" || theme=='url(theme1.jpg)')
			document.body.style.backgroundImage="url(bg_2.jpg)";
	</script>
</html>