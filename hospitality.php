

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
       
        <li class="animation"><a href="index.php"><img src="icons/home.png" alt="" />Home</a></li>
        <li class="animation"><a href="events.php"><img src="icons/flag.png" alt="Events" />Events</a></li>
        <li class="animation"><a href="workshop.php"><img src="icons/workshop.png" alt="Workshops" />Workshops</a></li>
        <li class="animation"><a href="#"><img src="icons/clock.png" alt="Schedule" />Schedule</a></li> 

        <li class="animation"><a href="hospitality.php"><img src="icons/bag.png" alt="Hospitality" />Hospitality</a></li>
        <li class="animation"><a href="#"><img src="icons/user.png" alt="How to Reach" />About Us</a></li>
		<li class="animation"><a href="contact.php"><img src="icons/contact.png" alt="Contact" />Contacts</a></li>
    </ul>
</div>
	  <p>&nbsp; </p>
       <p>&nbsp; </p>
     
      </td>
       
      <td width="71%" valign="top"><div id="rightcolumn">
    <table width="129%" height="86%" border="0" bgcolor="#000000" >
        <tr>
          <td width="250" align="left" valign="middle"><img src="images/hospitality.jpg" width="250" height="170" /></td>
          <td width="741" align="center" valign="middle" style="font-size:24px; color:#0CF;">Hospitality</td>
          <td width="622" height="120" align="right" valign="top"><a href="index.php"><img src="images/back.png"  /></a></td>
        </tr>
         <tr>
          <td height="385" colspan="3" align="left" valign="top">
           <p>&nbsp;</p>
           <p style="font-size:18px; color:#F00;">
How to reach SDMCET? 
           </p>
            <p>&nbsp;</p>
          <p style="font-size:14px; color:#FFFFFF">SDMCET is around three kilometres from main/city bus-stand and railway station. Auto rickshaws charge roughly around Rs 40 to 60(depending upon the time of the day) to reach SDM college of Engineering and Technology, Dharwad from these destinations.</p>
           <p>&nbsp;</p>
         
          <p style="font-size:18px; color:#F00;">
What after reaching SDMCET? 
           </p>
            <p>&nbsp;</p>
          <p style="font-size:14px; color:#FFFFFF">If you are registered on the hospitality portal of INSIGNIA'13, then you need to come to the Registration Desk for registration, which will be set up at the entrance of the main building of the campus. You will be provided the accommodation only if you have registered for the accommodation. </p>
           <p>&nbsp;</p>
           <p style="font-size:18px; color:#F00;">
How do I get accommodation?
           </p>
            <p>&nbsp;</p>
          <ul style="font-size:14px; color:#FFF;  margin-left:20px;">
<li>While registering for the events, a participant (who wants accommodation during the event) has to opt for accommodation in the registration page.</li>
<li>Accommodation shall be provided at a cost of Rs 50/- per participant per day.</li>
<li>Accommodation will be provided separately for boys and girls at different partner institutions.</li>
<li>Accommodation will be provided from the day of start of fest till it gets over.</li>
<li>Participants should note that they will be required to share accommodation. Requests for individual rooms or any other complaints in this regard will not be entertained. Also the accommodation will be restricted only to the students.</li>

</ul>
<p>&nbsp;</p>
<p style="font-size:14px; color:#FFFFFF">All participants are required to carry their college identity cards. The participants are also expected to follow certain Rules and Regulations to help us maintain the right kind of festive atmosphere in the institute.
</p>
<p style="font-size:14px; color:#FFFFFF">All essential facilities are present inside the campus.</p>
<p style="font-size:14px; color:#FFFFFF">&nbsp; </p>
  <p style="font-size:18px; color:#F00;">
What should I bring with me?
           </p>
           <p>&nbsp;</p>
           <ul style="font-size:14px; color:#FFF;  margin-left:20px;">
<li>It is mandatory for all participants to carry college IDs.</li>
<li>Mattresses, pillows, bed spreads and buckets are the only things that shall be provided to you for accommodation. All the other things which participants require for their stay here should be arranged by themselves.</li>

</ul>
 <p>&nbsp;</p>
<p style="font-size:18px; color:#F00;">
Where do I eat?
           </p>
           <p>&nbsp;</p>
           <p style="font-size:14px; color:#FFFFFF">The festive area will have INSIGNIA'13 Food court to take care of your appetite (food coupons will be provided at the time of registering for the events at Registration Desk).

</p>
           <p style="font-size:14px; color:#FFFFFF">There are lots of eating joints in the campus -Santrupti(Central Dining For Students) SDMCET Food Court, SDMCET Bakery, Suruchi-College Canteen and F&H Coffee Shop.</p>
           <p style="font-size:14px; color:#FFFFFF">&nbsp;</p>
           <p style="font-size:18px; color:#F00;">
What about the medical assistance?
           </p>
           <p style="font-size:14px; color:#FFFFFF">&nbsp;</p>
           <p style="font-size:14px; color:#FFFFFF">In case you fall ill, you are advised to report to the volunteers of INSIGNIA'13. We shall make appropriate arrangements for your treatments. A first-aid assistance van will also be available to serve the purpose.
             
           </p>
           <p style="font-size:18px; color:#F00;">&nbsp;</p>
           <p style="font-size:18px; color:#F00;">What about the security facilities? </p>
<p style="font-size:14px; color:#FFFFFF">&nbsp;</p>
<p style="font-size:14px; color:#FFFFFF">SDMCET campus has a vigilant and round-the-clock security service. You have to take care of your belongings and we are not responsible for the loss.
  
</p>
           <p style="font-size:18px; color:#F00;">&nbsp;</p>
           <p style="font-size:18px; color:#F00;">What all things are prohibited in the campus? </p>
<p style="font-size:14px; color:#FFFFFF">&nbsp;</p>
<p style="font-size:14px; color:#FFFFFF">Consumption of alcohol, tobacco, non-vegetarian food or any intoxicants is strictly prohibited within campus premises. Any flammable liquids, knives and explosives of any kind are strictly prohibited inside the campus. Any other item if deemed unsafe will be prohibited.
  
</p>
           <p style="font-size:18px; color:#F00;">&nbsp;</p>
           <p style="font-size:18px; color:#F00;"><b>IMPORTANT:</b> </p>
<p style="font-size:14px; color:#FFFFFF">&nbsp;</p>
<p style="font-size:14px; color:#FFFFFF">Outstation participants coming on 20th of March 2013 should contact the co-ordinators for the accommodation purpose.
  
</p>
          </td>
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
