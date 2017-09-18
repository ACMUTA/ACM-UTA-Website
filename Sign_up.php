<!doctype html>
<include once 
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<?php 
?>
<?php 
		include_once("PHP_Includes/db_con.php");
	if(isset($_POST['checkuserused'])){
		$username = preg_replace('#[^a-z0-9]#i', '', $_POST['checkuserused']);
	$sql = "SELECT id FROM users WHERE username='$username' LIMIT 1";
    $query = mysqli_query($db_conx, $sql); 
    $uname_check = mysqli_num_rows($query);
		if ($uname_check < 1) {
	    exit();
    } else {
	    echo '*This username is taken';
	    exit();
	}
	}
	?>
<?php 
		if(isset($_POST['username'])){
		$p_hash = md5($_POST['pass']);
		$u=$_POST['username'];
		$e=$_POST['email'];
		$fn=$_POST['firstname'];
		$ln=$_POST['lastname'];
		$s=$_POST['size'];
		$g=$_POST['gender'];
		$h=$_POST['bio'];
			
		$sql = "INSERT INTO users (username, email, password, gender, signup, lastlogin, teesize, bio, firstname, lastname)     VALUES('$u','$e','$p_hash','$g',now(),now(),'$s','$h','$fn','$ln')";
		$query = mysqli_query($db_conx, $sql); 
			$to = "$e";							 
		$from = "noreply@occ.com";
		$subject = 'ACM UTA Website Account Activation';
			$uid = mysqli_insert_id($db_conx);
		$message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>ACM UTA Local Chapter</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="localhost/website/index.php"><img src="images/logo.png" width="36" height="36" alt="ACM UTA" style="border:none; float:left;"></a>Account Activation</div><div style="padding:24px; font-size:17px;">Hello '.$u.',<br /><br />Click the link below to activate your account when ready:<br /><br /><a href="localhost/website/activation.php?id='.$uid.'&u='.$u.'&e='.$e.'&p='.$p_hash.'">Click here to activate your account now</a><br /><br />Login after successful activation using your:<br />* E-mail Address: <b>'.$e.'</b></div></body></html>';
		$headers = "From: $from\n";
        $headers = "MIME-Version: 1.0\n";
        $headers = "Content-type: text/html; charset=iso-8859-1\n";
		mail($to, $subject, $message, $headers);
	echo("*Please Check your email to activate your account");
			exit();
	}
?>
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
</head>
<script>
	function post(){
		
		var sr = new XMLHttpRequest;
		var url = "Sign_up.php";
		sr.open("Post",url,true);
		var a=document.getElementById("username").value;
		var b=document.getElementById("email").value;
		var c= document.getElementById("firstname").value;
		var d= document.getElementById("lastname").value;
		var e= document.getElementById("pass1").value;
		var f= document.getElementById("size").value;
		var	g= document.getElementById("gender").value;
		var h=document.getElementById("bio").value;
		sr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		sr.onreadystatechange= function(){
			if(sr.readyState==4&&sr.status==200){
				var return_data = sr.responseText;
			
				document.getElementById("status").innerHTML=return_data;
			}
		}
		sr.send("username="+a+"&email="+b+"&firstname="+c+"&lastname="+d+"&pass="+e+"&size="+f+"&gender="+g+"&bio="+h);
		
		
	}
	function checkusername(){
			var usernameflag=0;
		var x= document.getElementById('username').value;
		
		for(var i=0;i<x.length;++i){
		
			if(!((x[i]>='a'&&x[i]<='z')||(x[i]>='A'&&x[i]<='Z')||(x[i]>='0'&&x[i]<='9')))
			{
			usernameflag=1;
				document.getElementById("unamestatus").innerHTML="*Can't have symbols";
				return 0;
				break;
			}
		}
		if(x.length<=4){
										
			document.getElementById("unamestatus").innerHTML="*Needs to be longer than 3 characters";
						usernameflag=1;
				return 0;
		}
		if(usernameflag==0){
			var hr = new XMLHttpRequest;
		var url = "Sign_up.php";
		hr.open("Post",url,true);
			hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				hr.onreadystatechange= function(){
			if(hr.readyState==4&&hr.status==200){
				var return_data = hr.responseText;
				document.getElementById("unamestatus").innerHTML=return_data;
			}
		}
		hr.send("checkuserused="+x);
		
return 1;
		}
		
	}

	function checkemail(){
		var x=document.getElementById('email').value;
			var atpos = x.indexOf("@");
    	var dotpos = x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
			document.getElementById("email").style.backgroundColor=" hsla(359,100%,67%,1.00)";

      							document.getElementById("emailstatus").innerHTML="*Enter a valid email";
        return 0;
    	}else{
			document.getElementById("emailstatus").innerHTML=""
		    							document.getElementById("email").style.backgroundColor="hsla(108,100%,90%,1.00)";
			  return 1;
		}
	}
	function checkpass1(){
				var passflag=0;
		var x= document.getElementById('pass1').value;
		if(x.length<=3){
											
			document.getElementById("passstatus").innerHTML="*Needs to be longer than 3 characters";
						passflag=1;
			return 0;
		}
		if(passflag==0){
			
							document.getElementById("passstatus").innerHTML="";
return 1;
		}
	}
	function checkpass2(){
				var passflag=0;
		
			var x= document.getElementById('pass1').value;
			var y= document.getElementById('pass2').value;
		if(x.localeCompare(y)!=0||y==""){
										document.getElementById("pass2status").innerHTML="*Needs to be equal to your password";
			return 0;
		}else{
										document.getElementById("pass2status").innerHTML="";
			return 1;
	
		}
		}
	function checkfirstname(){
		var x= document.getElementById('firstname').value;
		if(x.length==0){
			return 0;
		}
		else return 1;
	}
	function checklastname(){
		var x= document.getElementById('lastname').value;
		if(x.length==0){
			return 0;
		}
		else return 1;
	}
	function checkgender(){
			var x= document.getElementById('gender').value;
	if (x.length==0)
		return 0;
	else return 1;
	}
	
	function signup(){
		var a =checkusername();
		var b= checkemail();
		var c= checkpass1();
		var d=checkpass2();
		var e=checkfirstname();
		var f=checklastname();
		var g=checkgender();
		console.log(a+" "+b+" "+c+" "+d+" "+c+" "+e+" "+f+" "+g)
		if(a&&b&&c&&d&&e&&f&&g){
					post();

		}
		
	}
</script>
<body style="background-image: url(Images/back.jpg);margin: 0px; ">
<?php
include_once("nav.php");
	?>

<div style=" margin-top: 100px; padding: 20px; background-color:#102e37; height:auto;;width:400px; margin-left: auto;margin-right: auto;">
<form name="signupform" style=" font-size: 17px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; color:#f78d3f;  font-weight: 500;	"id="signupform" onsubmit="return false;">
    <div>Username: </div>
    <input id="username" type="text" onblur="checkusername()" onkeyup="checkusername()" maxlength="16">
    <span id="unamestatus"></span>
    <div>Email Address:</div>
    <input id="email" type="text" onfocus="emptyElement('status')" onkeyup="checkemail()" maxlength="88">
    <span id="emailstatus"></span>
    <div>First Name:</div>
 	<input id="firstname" type="text" onfocus="emptyElement('status')" onkeyup="checkemail()" maxlength="88">
    <div>Last Name:</div>
    <input id="lastname" type="text" onfocus="emptyElement('status')" onkeyup="checkemail()" maxlength="88">
    <div>Create Password:</div>
    <input id="pass1" type="password" onfocus="emptyElement('status')" onkeyup="checkpass1()" maxlength="16">
        <span id="passstatus"></span>
    <div>Confirm Password:</div>
    <input id="pass2" type="password" onfocus="emptyElement('status')"onkeyup="checkpass2()" maxlength="16">
            <span id="pass2status"></span>
    <div>Gender:</div>
     <select id="gender" onfocus="emptyElement('status')">
      <option value=""></option>
      <option value="m">Male</option>
      <option value="f">Female</option>
    </select>
        <div>T-shirt size:</div>
     <select id="size" onfocus="emptyElement('status')">
      <option value=""></option>
      <option value="0">XS</option>
      <option value="1">S</option>
      <option value="2">M</option>
      <option value="3">L</option>
      <option value="4">XL</option>
    </select>
      	<div>Bio:</div>
    	<textarea id="bio" type="text" onfocus="emptyElement('status')"  onkeyup="checkemail()" maxlength="255"></textarea>
       
           <span id="status"></span>
        <button id="signupbtn" onclick="signup()">Create Account</button>
  </form>
  </div>
</body>
</html>