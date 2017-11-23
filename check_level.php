<?php
	session_start();
	if(isset($_COOKIE["level"]))
	{
		$conn=mysqli_connect("localhost","root","","Charlotte's Web");
		if(!$conn)
			echo "Error. Please go back and try again.";
		else
		{
			$query = "SELECT * FROM levels";
			$res=mysqli_query($conn,$query);
			$numr=mysqli_num_rows($res);
			$flag=0;
			$un=$_SESSION["Username"];
			$x=($_COOKIE["level"]);
			for($i=0;$i<$numr;$i++)
			{
				$row=mysqli_fetch_assoc($res);
				if($un==$row["Username"])
				{
					if($x==1)
					{
						$update="UPDATE levels SET Level1 = 1 WHERE Username = '$un'";
						mysqli_query($conn, $update);
						if($row["Level2"]==0)
							header("Location:homehangman.php");
						else
							header("Location:flipper.html");
					}
					else if($x==2)
					{
						$update="UPDATE levels SET Level2 = 1 WHERE Username = '$un'";
						mysqli_query($conn, $update);
						if($row["Level3"]==0)
							header("Location:memory_game.php");
						else
							header("Location:flipper.html");
					}
					else
					{
						$update="UPDATE levels SET Level3 = 1 WHERE Username = '$un'";
						mysqli_query($conn, $update);
						if($row["Level1"]==0)
							header("Location:scavengerhunt.php");
						else
							header("Location:flipper.html");
					}
				}
			}
		}	
	}
?>