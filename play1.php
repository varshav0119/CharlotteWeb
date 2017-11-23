<?php
	session_start();
	$x=($_SESSION["Username"]);
	//echo($x);
	$conn=mysqli_connect("localhost","root","","Charlotte's Web");
	if(!$conn)
		echo "Error. Please go back and try again.";
	else
	{
		$query = "SELECT * FROM levels";
		$res=mysqli_query($conn,$query);
		$numr=mysqli_num_rows($res);
		$flag=0;
		for($i=0;$i<$numr;$i++)
		{
			$row=mysqli_fetch_assoc($res);
			if($x==$row["Username"])
			{
				$flag=1;
				$update="UPDATE levels SET Level1 = 0, Level2 = 0, Level3 = 0 WHERE Username = '$x'";
				mysqli_query($conn, $update);
			}
		}
		if($flag==0)
		{
			$query1="INSERT INTO levels(Username,Level1, Level2, Level3) VALUES('$x',0,0,0)";
			mysqli_query($conn, $query1);
		}
	}
	mysqli_close($conn);
?>
<html>
	<head>
		<link rel="icon" href="favi.png"/>
		<title>Charlotte's Web</title>
		<style>
			body{
				background-image:url(bg_howdy.jpg);
			}
			#howdy{
				width:500px;
				height:290px;
				position:relative;
				bottom:20px;
			}
			.chcon{
				cursor:pointer;
				font-family:Orator Std;
				font-size:30;
				color:black;
				background-color:#dfdfe0;
				border-radius:5px;
				height:5%;
				padding:0.5%;
			}
			.chcon:hover{
				background-color:#b5a3c2;
			}
			#pop{
				background-image:url(roundedrect.png);
				background-color:white;
				position:absolute;
				left:15%;
				top:45%;
				height:50%;
				width:70%;		
				border-radius:20px;
				border:5px solid #4a196f;
			}
			#link{
				color:black;
				font-size:30px;
				color:#4a196f;
				text-decoration:none;
				font-family:Orator Std;
				position:relative;
				bottom:5px;
			}
			#un{
				position:relative;
				bottom:10px;
				color:black;
				font-family:Poor Richard;
				font-size:25;
			}
			#cls{
				text-decoration:none;
				font-family:Orator Std;
				font-size:20px;
				cursor:pointer;
				color:black;
				position:absolute;
				left:92%;
				width:40px;
				height:40px;
				top:3%;
			}
			#back{
				position:relative;
				left:6px;
				top:4px;
				font-family:Orator Std;
				font-size:20;
				color:#1b2347;
				text-decoration:none;
				width:50px;
				height:18px;
				padding:2px 2px;
			}
			#back_hold{
				position:absolute;
				left:84%;
				top:5%;
				width:12%;
				height:7%;
			}
		</style>
	</head>
	<body>
		<div id="back_hold"><a id="back" href="index.php">Back</a></div>
		<center>
		<img id="howdy" src="howdy.png"/><br><br><br>
		<div class='chcon' id="play1" style="width:60%">I am looking for something that is lost.</div><br><br><br>
		<div class='chcon' id="play2" style="width:60%">I seek to save someone I love.</div><br><br><br>
		<div class='chcon' id="play3" style="width:60%">I am on a quest to find my truest self.</div><br>
		</center>
	</body>
	<script>
		var chcon = document.querySelectorAll(".chcon");
		for(var i=0;i<chcon.length;i++)
		{
			chcon[i].addEventListener("click",pop,false);
		}
		function pop(e)
		{
			for(var i=0;i<chcon.length;i++)
			{
				chcon[i].removeEventListener("click",pop,false);
			}
			var x = document.createElement("div");
			x.id="pop";
			document.body.appendChild(x);
			var close= document.createElement("div");
			close.textContent="close";
			close.id="cls";
			close.addEventListener("click",cls,false);
			x.appendChild(close);
			var c = document.createElement("center");
			x.appendChild(c);
			var un = document.createElement("p");
			un.id="un";
			if(e.target.id=="play1")
				un.innerHTML="What's your name? "+"<?php echo $_SESSION['Username'];?>"+", is it?<br/><br/>"+"I'll help you, but first I need to retrieve my magical Easter Eggs!";
			else if(e.target.id=="play2")
				un.innerHTML="What's your name? "+"<?php echo $_SESSION['Username'];?>"+", is it?<br/><br/>"+"I'll help you, but first I need to recall my magic phrase!";
			else
				un.innerHTML="What's your name? "+"<?php echo $_SESSION['Username'];?>"+", is it?<br/><br/>"+"I'll help you, but first I need to find my magical decks of cards!";
			c.appendChild(un);									
			var link = document.createElement("a");
			link.id="link";
			if(e.target.id=="play1")
			{
				link.innerHTML="Scavenger Hunt";
				link.href="scavengerhunt.php";
			}
			else if(e.target.id=="play2")
			{
				link.innerHTML="Hangman";
				link.href="homehangman.php";
			}
			else if(e.target.id=="play3")
			{
				link.innerHTML="Memory Card Game";
				link.href="memory_game.php";
			}
			c.appendChild(link);
		}
		function cls(e)
		{
			var par = e.target.parentNode;
			document.body.removeChild(par);
			for(var i=0;i<chcon.length;i++)
			{
				chcon[i].addEventListener("click",pop,false);
			}			
		}
	</script>
</html>
	