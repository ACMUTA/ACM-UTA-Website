<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
	include_once("PHP_Includes/db_con.php");
	if(isset($_COOKIE['user'])){
		$uu=$_COOKIE['user'];
		header("location:user.php?u=$uu");
		exit();
	}
	if(isset($_POST['u'])){
	$u=	$_POST['u'];
	$p_hash=md5($_POST['p']);		
		$sql="SELECT id, password FROM users WHERE username='$u'AND emailverif='1' LIMIT 1";
		$query= mysqli_query($db_conx,$sql);
		$rows=mysqli_fetch_row($query);
		$numofusers= mysqli_num_rows($query);
			$s=$rows[0];
			$p=$rows[1];
		if($numofusers==0){
			echo("*Make sure the information is correct");
			exit();
		}else{
			if($p_hash!==$p){
				echo("*Make sure the information is correct");
				exit();
			}else{
			$_SESSION['userid'] = $s;
			$_SESSION['username'] = $u;
			$_SESSION['password'] = $p_hash;
			setcookie("id", $s, strtotime( '+30 days' ), "/", "", "", TRUE);
			setcookie("user", $u, strtotime( '+30 days' ), "/", "", "", TRUE);
    		setcookie("pass", $p_hash, strtotime( '+30 days' ), "/", "", "", TRUE); 
			$sql = "UPDATE users SET lastlogin=now() WHERE username='$u' LIMIT 1";
            $query = mysqli_query($db_conx, $sql);
				echo("user.php?u=$u");
				exit();
			}
		}
		
	}
	?>
<style>
	button{
		width: 150px;
		height: 50px;
		padding: 10px;
		background-color: #fcd271;
		margin-left:10px;;
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
		background-color: #FFF2D6;
		
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
	span{
		color:#fcd271;
		font-size:12px;
	
	}
	
	</style>
	<script>
		function login(){
			var u=document.getElementById("username").value;
			var p=document.getElementById("pass").value;
			var hr = new XMLHttpRequest;
			var url="log_in.php";
			hr.open("POST",url,true);
					hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				hr.onreadystatechange= function(){
			if(hr.readyState==4&&hr.status==200){
				var return_data = hr.responseText;
				if(return_data[0]=="*"){
				document.getElementById("status").innerHTML=return_data;}
				else{
					window.location.reload(true);
				}
			}
		}
				hr.send("u="+u+"&p="+p);
		}
	</script>
</head>

<body style="background-image: url(Images/back.jpg);margin: 0px;">
<?php
include_once("nav.php");
	?>
<div style="width:570px; height: auto; margin-left: auto;margin-right: auto;">
<img src="Images/logoin.png" style=" position: absolute; z-index:2; margin-top: 85px; float: left;" width="320" height="320"/>
<div style=" margin-top: 100px; margin-left: 160px; position: absolute;padding: 20px; float: right; background-color:#102e37; height:250px;width:370px;">
<form name="loginform" style=" width: 200px; float: right; font-size: 17px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; color:#f78d3f;  font-weight: 500;	"id="signupform" onsubmit="return false;">
    <div>Username: </div>
    <input id="username"  type="text" onblur="" onkeyup="" maxlength="16">
	<div >Password: </div>
    <input  id="pass" type="password" onfocus="" onkeyup="" maxlength="16">
    <button  id="loginbtn" onclick="login()">Log in</button>
            <div> <span id="status"></span></div>

  </form>
  </div>
</div>
</body>
</html>