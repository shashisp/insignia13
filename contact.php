

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Insignia'13</title>
<style type="text/css">
body {
	
	 background:url(images/templatemo_body1.jpg) repeat fixed;
    color:#c7b8a3;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size:0.75em;
	
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
	padding: 30px 10px;
	
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
	margin:5px 0;
	background-color:#000;
	opacity:0.6;
	filter:alpha(opacity=60); /* For IE8 and earlier */
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
      <td width="15%" >
      <div class="container">
	
	
	

	<ul id="panel">
        <li class="animation"><a href="index.php"><img src="icons/home.png" alt="" />Home</a></li>
        <li class="animation"><a href="events.php"><img src="icons/flag.png" alt="Events" />Events</a></li>
        <li class="animation"><a href="#"><img src="icons/workshop.png" alt="Workshops" />Workshops</a></li>
        <li class="animation"><a href="#"><img src="icons/clock.png" alt="Schedule" />Schedule</a></li> 

        <li class="animation"><a href="#"><img src="icons/bag.png" alt="Hospitality" />Hospitality</a></li>
        <li class="animation"><a href="#"><img src="icons/map.png" alt="How to Reach" />How to Reach</a></li>
		<li class="animation"><a href="contact.php"><img src="icons/contact.png" alt="Contact" />Contacts</a></li>
    </ul>
</div>
      </td>
       
      <td width="71%" valign="top"><table width="724" height="372" border="0" cellpadding="0" cellspacing="0">
       <tr>
      <td width="259" height="39" valign="top"> 
      <div class="transbox1">
      <p align="center"><font color="#FF0000" style="font-size:24px; color:#FFFFFF;">.</font></p>
      </div>
      </td>
       <td width="259" valign="top">
       <div class="transbox1">
        <p align="center"><font color="#FF0000" style="font-size:24px;">Contact Us</font></p>
       </div>
       </td>
       <td width="259" valign="top"><div class="transbox1">
        <p align="center"><font color="#FF0000" style="font-size:24px; color:#FFFFFF;">.</font></p>
       </div></td>
       </tr>
        <tr>
          <td width="259" valign="top">
          <div class="transbox1">
          <p align="center"><font color="#FF0000" style="font-size:22px;">For Technical Events</font></p>
          <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
          <ul style="list-style:none; font-size:16px; text-align:center; color:#000">
             <li>Abhirup   +919964167937</li>
             <li>Nishant           +919035355189</li>
             <li>Subhas           +918970567455</li>
              <li style="color:#FFFFFF;">.</li>
          </ul>
           <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
          </div>
          </td>
           
          <td width="256" valign="top">
           <div class="transbox1">
         <p align="center"> <font color="#FF0000" style="font-size:22px;">For Cultural Events</font></p>
         <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
        
        
          <ul style="list-style:none; font-size:16px; text-align:center; color:#000">
            
             <li>Ajay              +918904778998</li>
             <li>Arjun          +918050863553</li>
              <li>Abhiraj          +919844023029</li>
              <li style="color:#FFFFFF;">.</li>
          </ul>
           <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
          </div>
          </td>
          <td width="209" valign="top">
           <div class="transbox1">
         <p align="center"> <font color="#FF0000" style="font-size:22px;">For Centralized Events</font></p>
         <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
         
        
          <ul style="list-style:none; font-size:16px; text-align:center; color:#000">
             <li>Shardul  +918050402326</li>
             <li>Sachit             +918123798907</li>
             <li>Akshay           +919035984345</li>
             <li>Praveen          +919663126663</li>
          </ul>
           <p align="center">&nbsp;</p>
           <p align="center">&nbsp;</p>
           </div>
          </td>
        </tr>
        <tr>
          <td width="259" valign="top">
          <div class="transbox1">
          <p align="center"> <font color="#FF0000" style="font-size:22px; color:#FFFFFF">.</font></p>
         <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
         
        
          <ul style="list-style:none; font-size:16px; text-align:center; color:#FFF">
             <li>.</li>
             <li>.</li>
             <li>.</li>
           
          </ul>
           <p align="center">&nbsp;</p>
           <p align="center">&nbsp;</p>
          </div>
          </td>
           
          <td width="256" valign="top">
           <div class="transbox1">
          <p align="center"> <font color="#FF0000" style="font-size:22px;">Website Team</font></p>
         <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
         
        
          <ul style="list-style:none; font-size:16px; text-align:center; color:#000">
             <li>Sharath  +917795771002</li>
             <li>Vinayak            +919591703774</li>
             <li>Shashi           +919035162272</li>
           
          </ul>
           <p align="center">&nbsp;</p>
           <p align="center">&nbsp;</p>
          </div>
          </td>
          <td width="209" valign="top">
          <div class="transbox1">
          <p align="center"> <font color="#FF0000" style="font-size:22px; color:#FFFFFF">.</font></p>
         <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
         
        
          <ul style="list-style:none; font-size:16px; text-align:center; color:#FFF;">
             <li>.</li>
             <li>.</li>
             <li>.</li>
           
          </ul>
           <p align="center">&nbsp;</p>
           <p align="center">&nbsp;</p>
          </div>
          </td>
        </tr>
       <tr>
      <td width="259" height="39" valign="top"> 
      <div class="transbox1">
      <p align="center"><font color="#FF0000" style="font-size:20px; color:#F00;">Email Us at : </font></p>
      </div>
      </td>
       <td width="259" valign="top">
       <div class="transbox1">
        <p align="center"><font color="#FF0000" style="font-size:20px;"><a href="mailto:insignia.sdmcet@gmail.com" style="color:#000">
insignia.sdmcet@gmail.com</a></font></p>
        
       </div>
       </td>
       <td width="259" valign="top"><div class="transbox1">
        <p align="center"><font color="#FF0000" style="font-size:20px; color:#FFFFFF;">.</font></p>
       </div></td>
       </tr>
      </table>
      
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
    <center>
    <div>
     <a href="#">
<img src="http://hitwebcounter.com/counter/counter.php?page=4710238&style=0036&nbdigits=8&type=page&initCount=856" title="" Alt=""   border="0" >
</a></div><center>
<p align="center" style="color:#F00;" > Dseigned By SDM Web Designing Team(Best Viewed in Google Chrome)</p> 
</div>
</body>
</html>
