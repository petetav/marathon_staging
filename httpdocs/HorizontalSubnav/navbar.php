<html>
<head>
<meta charset="utf-8">

<title>Horizontal Subnav w/ CSS &amp; jQuery</title>

<style type="text/css">
body {
	font: 10pt normal Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
}

.container {width: 1000px; margin: 0 auto;}



ul#topnav {
	margin: 25px 0px 0px 0px; 
	padding:0px;
	float: left;
	width: 1000px;
	list-style: none;
	position: relative;
	font-size: 2em;
	background:url(HorizontalSubnav/images/topnav_sTAV.gif) repeat-x;
	background-color: #900;
}

ul#topnav li {
	float: left;
	margin: 0px 10px; 
	padding: 0px;
	border-right: 1px solid #555;
}

ul#topnav li a {
	padding: 8px 25px;
	display: block;
	color: #ffffff;
	text-decoration: none;
	font-size: 10pt;	
}

 ul#topnav li:hover { 
	background: #900 url (HorizontalSubnav/images/topnav_aTAV.gif) repeat-x;
	
	
}
	
ul#topnav li span {
	float: left;
	padding: 6px 0;
	position: absolute;
	left: 0; top:28px;
	display: none;
	width: 1000px;
	background-color:grey;
	color: #fff;
	-moz-border-radius-bottomright: 5px;
	-khtml-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-khtml-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
}

ul#topnav li:hover span {
	display: block;
	font-size: 1em;
	
}

ul#topnav li span a { 
	display: inline;
	border-right: 1px solid #555;
	vertical-align: middle;
	
}

ul#topnav li a:hover {
text-decoration: none;
color: #ff9; 
}

ul#topnav li span a:hover{
	color:#ff9;
} 

</style>


<script type="text/javascript"
src="HorizontalSubnav/images/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
$("ul#topnav li").hover(function() { //Hover over event on list item
	$(this).css({ 'background' : '#900 url(HorizontalSubnav/images/topnav_active.gif) repeat-x'}); //Add background color + image on hovered list item
	$(this).find("span").show(); //Show the subnav
} , function() { //on hover out...
	$(this).css({ 'background' : 'none'}); //Ditch the background
	$(this).find("span").hide(); //Hide the subnav
});
	
});
</script>

</head>

<body>

<div class="container">	
	
    <ul id="topnav">
        
    	 <li><a href="index.php">Home</a></li>
        <li>
        	<a href="">Fun Run Info</a>
            <span> 
                <a href="details.php">Fun Run details</a> 
                <a href="Forms/entryform2015.pdf" alt="" target="_blank">Entryform 2015</a>
                <a href="map.php">The Route</a> 
				<!--<a href="onlineentryform.php" alt="">Entry form</a> -->
                <a href="Forms/sponsorform.pdf" alt="" width="595" height="842" target="_blank" />Sponsorship form</a> 
                <a href="rules.php">Rules & Trophies</a>
                <a href="Forms/stallholdersform.pdf" alt="" target="_blank">Stallholders form</a>
                
            </span>
        </li>
        <li>
            <a href="">Results</a>
            <span>
                <a href="prizes.php">Prizes</a> 
                <a href="10_mile_run.php">10 Mile Run</a> 
                <a href="6_mile_run.php">6 Mile Run</a>
                <a href="6_mile_walk.php">6 Mile Walk</a>
            </span>
        </li>
        <li>
            <a href="">Donors & Donees</a>
           <span>
           <a href="donors.php">Donors</a>
           <a href="good_causes.php">Donees</a>
           </span>
           	
           	 <li><a href="http://picasaweb.google.com/100385312035948473944" target="_blank">Old Photos</a></li>
           	
        </li>
        <li><a href="contact_us.php">Contact Us</a></li>
    </ul>
	

</div>

</body>
</html>

