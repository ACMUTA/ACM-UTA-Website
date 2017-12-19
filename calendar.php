<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Events at ACM@UTA</title>
<link href="CSS/main.css" rel="stylesheet" type="text/css">
<link href="CSS/Slider.css" rel="stylesheet" type="text/css">
<link href="CSS/Nav.css" rel="stylesheet" type="text/css">
    <script>
        //To change the background of the google cal iframe

    </script>
<style>
.responsiveCal {
 
position: relative;padding-left: 10%: padding-right: 10%;padding-bottom: 75%; height: 0; overflow: hidden;
    max-width: 1000px;
    
    
 
}
 
.responsiveCal iframe {
  
position: absolute; top:0; left: 0; width: 100%; height: 100%;
    max-height: 600px;
 
}
</style>
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


<div class="responsiveCal" style=" margin:0 auto;">
<iframe id="iframe" src="https://calendar.google.com/calendar/b/1/embed?title=Events%20%40%20UTA%20ACM&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=acm.uta%40gmail.com&amp;color=%23691426&amp;src=ocrkieubbcqchvmt7fj6gea8p0%40group.calendar.google.com&amp;color=%2329527A&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%2329527A&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%2329527A&amp;src=72fmjl6epm15ke4r2us20b3j0c%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FChicago" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>

	</div>
</body>
</html>
