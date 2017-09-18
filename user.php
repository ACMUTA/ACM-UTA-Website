<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="CSS/Slider.css" rel="stylesheet" type="text/css">
<title>Untitled Document</title>
<?php
include_once("PHP_Includes/db_con.php");
	$s ="";
	if(isset($_POST['bio'])&&isset($_COOKIE['user'])){
				$u=$_COOKIE['user'];
		$b=$_POST['bio'];

		$sql= "UPDATE users SET bio='$b' WHERE username='$u'";
		$query=mysqli_query($db_conx,$sql);
		exit();
	}
	if(isset($_GET['u'])){
						#$s="<div style=\"float:left; width:250px; margin-left: 20px;  margin-top: 40px; background-image:url('$rows[2]'); background-size: cover;height:250px;\"> </div><div style=\"width: 480px; height: 320px; float:right; padding: 15px; padding-right: 10px;\"><h2 style=\"color:#f78d3f;	\">$rows[0] $rows[1]</h2>	<p style=\"color:#102e37;\">$rows[3]</p></div>";

		$u=$_GET['u'];
				$sql="SELECT firstname, lastname, avatar, bio FROM users WHERE username='$u' LIMIT 1";
				 $query = mysqli_query($db_conx, $sql);
				$rows= mysqli_fetch_row($query);
		if(isset($_COOKIE['user'])){
			if($_GET['u']===$_COOKIE['user']){
				
				$s="<div style=\"float:left; width:250px; margin-left: 20px;  margin-top: 40px; background-image:url('$rows[2]'); background-size: cover;height:250px;\"> </div><div style=\"width: 480px; height: 320px; float:right; padding: 15px; padding-right: 10px;\"><h2 style=\"color:#f78d3f;	\">$rows[0] $rows[1]</h2>	    	<textarea id=\"bio\" type=\"text\" onfocus=\"emptyElement('status')\"  onkeyup=\"SetBio()\" maxlength=\"255\">$rows[3]</textarea></div>";

			}
			else{
$s="<div style=\"float:left; width:250px; margin-left: 20px;  margin-top: 40px; background-image:url('$rows[2]'); background-size: cover;height:250px;\"> </div><div style=\"width: 480px; height: 320px; float:right; padding: 15px; padding-right: 10px;\"><h2 style=\"color:#f78d3f;	\">$rows[0] $rows[1]</h2>	<p style=\"color:#102e37;\">$rows[3]</p></div>";
			}
		}else{
$s="<div style=\"float:left; width:250px; margin-left: 20px;  margin-top: 40px; background-image:url('$rows[2]'); background-size: cover;height:250px;\"> </div><div style=\"width: 480px; height: 320px; float:right; padding: 15px; padding-right: 10px;\"><h2 style=\"color:#f78d3f;	\">$rows[0] $rows[1]</h2>	<p style=\"color:#102e37;\">$rows[3]</p></div>";
			}
		
	}else{
		header("location: localhost/website/index.php");
	}
?>
</head>
<style>
	button{
		width: 150px;
		height: 50px;
		padding: 10px;
		background-color: #fcd271;
		margin-left: 125px;;
margin-top: 10px;
				font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:600;
color: #102e37;
		border: none;
 border-bottom: solid 4px #3a93a5;
	}
	button:hover{
outline: none;
		box-shadow: 0px 0px 0px 0px;
		border-color: #f78d3f;
  border-bottom: solid 4px #2bbbd8;
	}
	input{

	padding: 5px;
		border: 0px;
		font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:600;
		margin-top: 10px;
  border-bottom: solid 4px #ce9165;
		margin-bottom: 10px;
		background-color: #e8ede0;
	}
	input:focus{
		outline: none;
		box-shadow: 0px 0px 0px 0px;
		border-color: #f78d3f;
  border-bottom: solid 4px #f78d3f;
	}
	select:focus{
		outline: none;
		box-shadow: 0px 0px 0px 0px;
		border-color: #3a93a5;
  border-bottom: solid 4px #f78d3f;
	}
	span{
		color:#fcd271;
		font-size:12px;
	
	}
	select{
		padding: 5px;
			margin-top: 10px;
  border-bottom: solid 4px #ce9165;
		margin-bottom: 10px;
				background-color: #e8ede0;
width: 175px;
font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:600;
	}
	option{
		  border-bottom: solid 4px #ce9165;
				padding: 5px;		font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:600;

	}
	option:hover{
		outline: #f78d3f;
	background-color:#f78d3f;
	}
	#bio{
		width: 390px;
			padding: 5px;
margin-left: auto;
		margin-right: auto;
		height: 100px;
					margin-top: 10px;
  border-bottom: solid 4px #ce9165;
		margin-bottom: 10px;
				background-color: #e8ede0;
		font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-weight:600;

	}
	#bio:focus{
		outline: none;
		box-shadow: 0px 0px 0px 0px;
		border-color: #3a93a5;
  border-bottom: solid 4px #f78d3f;
	}
	</style>
<script>
function SetBio(){
	var x= document.getElementById("bio").value;
	var hr= new XMLHttpRequest;
	var url="user.php";
	hr.open("POST",url,true);
	hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	hr.send("bio="+x);
}	
</script>
<body style=" background-image: url(Images/back.jpg);margin: 0px; ">
<?php
include_once("nav.php");
	?>
<div style="width:800px; padding: 30px;margin-left: auto; margin-top: 150px; border-radius: 10px; background-color: #e8ede0; margin-right: auto; height: 330px;">
	<?php echo($s);?>
	</div>
</body>
</html>