<!doctype html>
<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

<title>ACM@UTA</title>
<link href="CSS/main.css" rel="stylesheet" type="text/css">
<link href="CSS/Slider.css" rel="stylesheet" type="text/css">
<link href="CSS/Nav.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php
include_once("nav.php");
	?>
	
	<div id="imp" style=" margin: 0;  position: absolute; height: 100%; width: 100%;">
		<div class="line Bblue" style="margin-top: 15%;"></div>	
		<div class="line Borange"></div>
		<div class="line Bblue"></div>
		<div class="line Borange"></div>
	    <div class="line Bblue"></div>
		<div class="line Borange"></div>
	</div>
	<script>
	document.getElementById("imp").style.width=window.innerWidth;
    var x1=-900;
	var w=900;
	function Mr(){
		var elem=document.getElementsByClassName("Borange");
		for( var i=0;i<3;++i) elem[i].style.marginLeft=x1+"px";
						   x1+=1; 
		if(x1>=window.innerWidth-20){
		x1=-900;
		w=900;
			for( var i=0;i<3;++i)elem[i].style.width=w+"px";
		}
		else if(x1>=window.innerWidth-920){
			w-=1;
			
			for( var i=0;i<3;++i)elem[i].style.width=w+"px";
		}
	}
	setInterval(function(){Mr()},5);
	
	   var x2=window.innerWidth;
	var w2=0;
	function Ml(){
		var elem=document.getElementsByClassName("Bblue");
		for( var i=0;i<3;++i) elem[i].style.marginLeft=x2+"px";
						   x2-=1; 
		if(w2<900){
		w2+=1;
			for( var i=0;i<3;++i)elem[i].style.width=w2+"px";
		}else if(x2<=-890){
			x2=window.innerWidth-20;
			w2=0;
		for( var i=0;i<3;++i)elem[i].style.width=w2+"px";
		}
	}
	setInterval(function(){Ml()},5);
	</script>

<div class="main" style="  height:3000px;padding-top: 100px;">
	<div class="main" style=""> 
		<div id="News">
			<div class="MainNews">	
				<h1 class="title">Welcome to our new website!</h1>
				<p class="pp">This is the new website for the ACM chapter at UTA.
				</p>
			</div>
			<div class="Other">
                <div class="OtherNews" >
                    <h2>About Us</h2>
                    <p>Learn more about us here.</p>
                </div>
                
                <div class="OtherNews" >
                    <h2>Why ACM?</h2>
                    <p>Click here for an answer.</p>
                </div>
                <div class="OtherNews">
                    <h2>Calender</h2>
                        <p>Take a look at the future.</p>
                </div>
            </div>
		</div>	
</div>
  <div class="main"top:0; style="background-color:#e8ede0 ; height: 2000px; margin-top: 100px;">
		<div id="About">
						<h1 class="title" style="margin-left: auto; margin-right: auto; color: #2bbbd8; text-align: center; font-size: 72px; ">About Us</h2>
						<div style="transform: skewY(-1deg); transform-origin: 0 0;width:860px; margin-top: 40px; height: 350px;">
						<img src="Images/1.jpg" style="float:left;" class="person" width="350" height="350" alt=""/>
							<div style="width: 480px; height: 320px; float:left;background-color: #102e37; padding: 15px;">
								<h2> Bashar Al Atoum</h2>
								<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.	
								</p>
							</div>
						</div>
						<div style="transform: skewY(-1deg); transform-origin: 0 0;width:860px; margin-top: 40px; height: 350px;">
						<img src="Images/1.jpg" style="float:right;" class="person" width="350" height="350" alt=""/>
							<div style="width: 480px; height: 320px; float:right;background-color: #102e37; padding: 15px;">
								<h2> Bashar Al Atoum</h2>
								<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.	
								</p>
							</div>

						</div>
						<div style="transform: skewY(-1deg); transform-origin: 0 0;width:860px; margin-top: 40px; height: 350px;">
						<img src="Images/1.jpg"  style="float:left;"class="person" width="350" height="350" alt=""/>
							<div style="width: 480px; height: 320px; float:left;background-color: #102e37; padding: 15px;">
								<h2> Bashar Al Atoum</h2>
								<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.	
								</p>
							</div>
						</div>
						<div style="transform: skewY(-1deg); transform-origin: 0 0;width:860px; margin-top: 40px; height: 350px;">
						<img src="Images/1.jpg" style="float:right;" class="person" width="350" height="350" alt=""/>
							<div style="width: 480px; height: 320px; float:right;background-color: #102e37; padding: 15px;">
								<h2> Bashar Al Atoum</h2>
								<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.	
								</p>
							</div>
						</div>
						</div>
</div>
	</div>
</body>
</html>
