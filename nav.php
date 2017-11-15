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
	echo("<nav>
		<div class=\"barDiv\">
		<img src=\"Images/logo.png\" />
		<a class=\"aStyle\" href=\"user.php?u=$u\">
		<img src=\"$rows[0]\" width=\"57\" height=\"57\"  style=\" border: solid 3px white; border-radius: 100%; float: right;   text-align:center; \"/></a>
		<a class=\"aStyle\" href=\"log_out.php\">
		<div class=\"divlink link\">Log out</div></a><a class=\"aStyle\" href=\"Index.php\">
		</a>
		</div>
		</nav>");
}else{
	echo("<nav>
	<div class=\"barDiv\">
	<img src=\"Images/logo.png\" />
	<a class=\"aStyle\" href=\"Sign_up.php\">
	<div class=\"divlink link\">Sign Up
	</div></a>
	<a class=\"aStyle\" href=\"log_in.php\">
	<div class=\"divlink link\">Log in</div></a></div></nav>");
}
?>
