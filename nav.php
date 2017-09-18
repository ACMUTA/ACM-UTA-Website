<style>
	.link{
	 transform: skew(-10deg);
	}
		.link:hover{
	background-color: #f78d3f;
		font-size: 20px;
			padding-bottom: 20px;
	}
	</style>
	<?php
if(isset($_COOKIE['user'])){
			$u=$_COOKIE['user'];
	include_once("PHP_Includes/db_con.php");
	$sql="SELECT avatar FROM users WHERE username='$u' LIMIT 1";
				 $query = mysqli_query($db_conx, $sql);
				$rows= mysqli_fetch_row($query);
	echo("<nav style=\"width: 100%;background-color: #102e37;top:0px;position: fixed;height: 60px;z-index: 10; \"><div style=\"width: 960px; margin-left: auto; margin-right: auto; height: 60px;\"><img src=\"Images/logo.png\" /><a style=\"color: #e8ede0;font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:300;\" href=\"user.php?u=$u\"><img src=\"$rows[0]\" width=\"57\" height=\"57\"  style=\" border: solid 3px white; border-radius: 100%; float: right;   text-align:center; \"/></a><a style=\"color: #e8ede0;font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:300;\" href=\"log_out.php\"><div class=\"link\" style=\"width:auto; float: right; height: 30px; padding: 10px; margin-right:20px; padding-top: 20px; text-align:center; \">Log out</div></a><a style=\"color: #e8ede0;font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:300;\" href=\"Index.php\"><div class=\"link\" style=\"width: auto; float: right; height: 30px; padding: 10px; padding-top: 20px; text-align:center; \">Home</div></a></div> </nav>");
}else{
	echo("	<nav style=\"width: 100%;background-color: #102e37;top:0px;position: fixed;height: 60px;z-index: 10; \"><div style=\"width: 960px; margin-left: auto; margin-right: auto; height: 60px;\"><img src=\"Images/logo.png\" /><a style=\"color: #e8ede0;font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:300;\" href=\"Index.php\"><div class=\"link\" style=\"width: auto; float: right; height: 30px; padding: 10px; padding-top: 20px; text-align:center; \">Home</div></a><a style=\"color: #e8ede0;font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:300;\" href=\"Sign_up.php\"><div class=\"link\" style=\"width:auto; float: right; height: 30px; padding: 10px; padding-top: 20px; text-align:center; \">Sign Up</div></a><a style=\"color: #e8ede0;font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:300;\" href=\"log_in.php\"><div class=\"link\" style=\"width:auto; float: right; height: 30px; padding: 10px; padding-top: 20px; text-align:center; \">Log in</div></a></div></nav>");
}
?>
