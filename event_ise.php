

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Insignia'13</title>
<script type="text/javascript">

/***********************************************
* Dynamic Ajax Content- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

var loadedobjects=""
var rootdomain="http://"+window.location.hostname

function ajaxpage(url, containerid){
var page_request = false
if (window.XMLHttpRequest) // if Mozilla, Safari etc
page_request = new XMLHttpRequest()
else if (window.ActiveXObject){ // if IE
try {
page_request = new ActiveXObject("Msxml2.XMLHTTP")
} 
catch (e){
try{
page_request = new ActiveXObject("Microsoft.XMLHTTP")
}
catch (e){}
}
}
else
return false
page_request.onreadystatechange=function(){
loadpage(page_request, containerid)
}
page_request.open('GET', url, true)
page_request.send(null)
}

function loadpage(page_request, containerid){
if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1))
document.getElementById(containerid).innerHTML=page_request.responseText
}

function loadobjs(){
if (!document.getElementById)
return
for (i=0; i<arguments.length; i++){
var file=arguments[i]
var fileref=""
if (loadedobjects.indexOf(file)==-1){ //Check to see if this object has not already been added to page before proceeding
if (file.indexOf(".js")!=-1){ //If object is a js file
fileref=document.createElement('script')
fileref.setAttribute("type","text/javascript");
fileref.setAttribute("src", file);
}
else if (file.indexOf(".css")!=-1){ //If object is a css file
fileref=document.createElement("link")
fileref.setAttribute("rel", "stylesheet");
fileref.setAttribute("type", "text/css");
fileref.setAttribute("href", file);
}
}
if (fileref!=""){
document.getElementsByTagName("head").item(0).appendChild(fileref)
loadedobjects+=file+" " //Remember this object as being already added to page
}
}
}

</script>
<style type="text/css">
body {
	
	 background:url(images/templatemo_body1.jpg) repeat fixed;
    color:#c7b8a3;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size:0.75em;
	
}
#rightcolumn{
float:left;
width:70%;
min-height: 200px;

}

* html #rightcolumn{ /*IE only style*/
height: 400px;
}
.cleaner { clear: both }
.hr_divider { 
	padding-bottom: 15px; 
	margin-bottom: 15px; 
	background: url(../images/templatemo_hr_divider.jpg) repeat-x bottom; 
}
#info_wrapper{
	width: 1060px;
	margin: 0 auto;
	padding: 10px 10px;
	
}
#info_wrapper_devide{
	width: 1060px;
	margin: 0 auto;
	padding: 0 10px;
	
}

#info_main {
	
	
	
}
.col { 
	float: left; 
	margin: 0 10px 0 30px; 
}
.one_third1 { 
	width: 250px; 
}
.one_third2 { 
	width: 680px; 
}

.two-third { 
	width: 620px; 
}
.one_fourth { 
	width: 220px; 
}
#info_1 {
	width:280px;
}
#info_2 {
	width:300px;
}

* {margin: 0; padding: 0; outline: none;}

img {border: none;}

a { 
	text-decoration:none; 
	color:#00c6ff;
}

h1 {
	font: 4em normal Arial, Helvetica, sans-serif;
	padding: 20px;	margin: 0;
	text-align:center;
	color:#bbb;
}

h1 small{
	font: 0.2em normal  Arial, Helvetica, sans-serif;
	text-transform:uppercase; letter-spacing: 0.2em; line-height: 5em;
	display: block;
}

h2 {
	font: 2em normal Arial, Helvetica, sans-serif;
	padding-bottom:30px;
	color:#fff;
	display:block;
}

h3 {
	font: 1em Arial, Helvetica, sans-serif;
	font-weight:bold;
	color:#fff;
	display:block;
	padding:10px;
}
div.transbox
  {
	
	background-color:#000;
	
  }
div.transbox1
  {
	margin:5px 0;
	background-color:#FFF;
	opacity:0.6;
	filter:alpha(opacity=60); /* For IE8 and earlier */
  }

.container {
	
	
	overflow: hidden;
	
	
}

/* FIRST EXAMPLE */
#panel { 
	
	list-style:none; 
	
	margin-left:10px;
	margin-right:80px;
}


#panel li {  
	border-radius:3px 3px 3px 3px; 
	margin-top:2px;
	width:150px;
	background: #000000;
	background: -moz-linear-gradient(top, #161616 0%, #000000 100%);
	background: -webkit-linear-gradient(top, #161616 0%,#000000 100%);
	background: -o-linear-gradient(top, #161616 0%,#000000 100%);
	border-left:1px solid #111; border-top:1px solid #111; border-right:1px solid #333; border-bottom:1px solid #333;
}

#panel li.animation { 
	-moz-transition: all 0.4s ease-in-out; 
	-moz-transform:translateX(0px); 
	-o-transition: all 0.4s ease-in-out; 
	-o-transform:translateX(0px); 
	-webkit-transition: all 0.4s ease-in-out; 
	-webkit-transform:translateX(0px); 
}

#panel li.animation:hover { 
	-moz-transform:translateX(25px);
	-o-transform:translateX(25px);
	-webkit-transform:translateX(25px);
}

#panel li a { 
	color:#fff; 
	display:block; 
	padding:10px;
}

#panel li a:hover { 
	color:#00c6ff;
}




@-webkit-keyframes bounceX {
			0% { -webkit-transform: translateX(-205px); -webkit-animation-timing-function: ease-in; }
			
			40% { -webkit-transform: translateX(-100px); -webkit-animation-timing-function: ease-in; }
			65% { -webkit-transform: translateX(-52px); -webkit-animation-timing-function: ease-in; }
			82% { -webkit-transform: translateX(-25px); -webkit-animation-timing-function: ease-in; }
			92% { -webkit-transform: translateX(-12px); -webkit-animation-timing-function: ease-in; }
			
			55%, 75%, 87%, 97%, 100% { -webkit-transform: translateX(0px); -webkit-animation-timing-function: ease-out; }
}

</style>

<link rel="canonical" href="#" />

<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>

 <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />

	<link href="latest_news/styles/ticker-style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.min.js"></script> 
	<script src="latest_news/includes/jquery.ticker.js" type="text/javascript"></script> 



<!-- Start WOWSlider.com HEAD section -->
	
<!-- End WOWSlider.com HEAD section -->

</head>

<body>

<div class="main">
  <table width="100%" border="0" align="center">
    <tr>
      <td width="10%" height="105" valign="top">&nbsp;</td>
      <td width="81%" height="105" ><div id="heading">
        <table width="100%" height="100%" border="0">
          <tr>
            <td width="74%" height="127"><a href="index.php"><img src="images/head.png" /></a></td>
           <td width="9%" height="105"><img src="images/Mr_Heggade.png" alt=""  />
           
            
                       
            
          </tr>
		  
        </table>
      </div>
      </td>
      <td width="26%" align="center" valign="top">
      
    </td>
</td>
      
    </tr>
  </table>
</div>
<center>
<hr width="80%" />

</center>
<?php include 'updates_inc.php'; ?>
<script type="text/javascript">
    $(function () {
        $('#js-news').ticker();
    });
</script>

<div class="center">
  <table width="100%"  border="0">
    <tr>
      <td width="10%" height="356">&nbsp;      </td>
      <td width="15%" valign="top">
      <p>&nbsp;</p>
      <div class="container">
	
	
	

	<ul id="panel">
     <li class="animation"><a href="index.php">Home</a></li>
        <li class="animation"><a href="event_ise.php">Nirupana</a></li>
        <li class="animation"><a href="javascript:ajaxpage('ajaxfiles/ise_impulse.php', 'rightcolumn');">Impulse Coding</a></li>
        <li class="animation"><a href="javascript:ajaxpage('ajaxfiles/ise_havyasa.php', 'rightcolumn');">Havyasa </a></li>
        <li class="animation"><a href="javascript:ajaxpage('ajaxfiles/ise_pinacle.php', 'rightcolumn');">Pinnacle</a></li> 
        <li class="animation"><a href="javascript:ajaxpage('ajaxfiles/ise_embedded.php', 'rightcolumn');">Embedded Coding</a></li>
    </ul>
</div>
	  <p>&nbsp; </p>
       <p>&nbsp; </p>
        <p>&nbsp; </p>
         <p>&nbsp; </p>
       <div class="container">
	<ul id="panel">
       
       
        <li class="animation"><a href="events.php">Technical</a></li>
        <li class="animation"><a href="events_cult.php">Cultural</a></li> 
        <li class="animation"><a href="events_central.php">Centralized</a></li> 
         <li class="animation"><a href="events_biz.php">Bizbee</a></li>
       
    </ul>
</div>
      </td>
       
      <td width="71%" valign="top"><div id="rightcolumn"> 
        <table width="129%" height="86%" border="0" bgcolor="#000000" >
        <tr>
          <td width="190" align="left" valign="middle"><img src="images/manager.jpg" width="150" height="100" /></td>
          <td width="264" align="left" valign="middle" style="font-size:24px; color:#0CF;">NIRUPANA (Paper Presentation)</td>
          <td width="77" height="120" align="right" valign="top"><a href="events.php"><img src="images/back.png"  /></a></td>
        </tr>
         <tr>
          <td height="385" colspan="3" align="left" valign="top"><div style="width:100%; height:100%;">
           <p>&nbsp;</p>
 <p>&nbsp;</p>
<p style="font-size:18px; color:#F00;">
Rules and regulations:
</p>
 <p>&nbsp;</p>
<ul style="font-size:14px; color:#FFF;  margin-left:20px;">
<li>Students from CSE, E&C, E&E, Instrumentation and ISE can participate.</li>
<li>Paper presentation topics :  Image Processing, Data Mining, Computer Networks, Software Engineering, Network Security.</li> 
<li>A team with maximum 2 authors can register for this event.</li>
<li>One participant can be an author in more than one entry.</li>
<li>Paper must be compulsorily presented in IEEE format.</li>
<li>Directly copying from the internet is strongly discouraged and will not be entertained.</li>
<li>The paper should not include college name.</li>
<li>The time duration for presentation is 8 + 2 minutes (for queries).</li>
<li>Maximum slides allowed per presentation are 15 slides.</li>
<li>Paper should be sent to<font color="#0000FF"> iseppt.insignia13@gmail.com</font></li>



</ul>
<p style="font-size:18px; color:#F00;">
Procedure:
</p>
 <p>&nbsp;</p>
<ul style="font-size:14px; color:#FFF;  margin-left:20px;">

<li>The participants of short listed papers will be informed through email and they would have to send a confirmation reply.</li>
<li>The selected teams have to bring a soft copy of paper in CD and two hard copies of paper at the time of presentation.</li>
<li>On the day of event, team members have to present their paper in the time slot provided to them.</li>
<li>The best two presentations will be awarded I & II prize.</li>
<li>Decision of the judges /panel will be the final and cannot be queried.</li>


</ul>
 <p>&nbsp;</p>
<p style="font-size:18px; color:#F00;">
  Co-Ordinators:
</p>
 <p>&nbsp;</p>
       <table width="363" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><p style="font-size:14px; color:#FFF;">Nadashree  D Nayak</p></td>
    <td><p style="font-size:14px; color:#FFF;">+919591297571</p></td>
  </tr>
  <tr>
   <td><p style="font-size:14px; color:#FFF;">Shruti Padaki</p></td>
    <td><p style="font-size:14px; color:#FFF;">+918147348330</p></td>
  </tr>
  
</table>
          </div></td>
          </tr>
      </table>
   </div>     
        </td>
	  
	  
	  
      <td width="4%">&nbsp;</td>
    </tr>
  </table>
</div>
<p></p>
<div id="info_wrapper_devide">
<hr />
  </div>
     
  <?php include 'sitemap_inc.php'; ?> 
     <center><div>
     <a href="#">
<img src="http://hitwebcounter.com/counter/counter.php?page=4710238&style=0036&nbdigits=8&type=page&initCount=856" title="" Alt=""   border="0" >
</a></div><center>
<p align="center" style="color:#F00;" > Dseigned By SDM Web Designing Team(Best Viewed in Google Chrome)</p> 
</div>
</body>
</html>
