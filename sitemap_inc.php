 <div id="info_wrapper">
<div class="transbox" style="opacity:0.6; filter:alpha(opacity=60);">
  <div class="col one_fourth">
   	<p align="center" >&nbsp;</p>
   	<p style="font-size:20px; color:#F00">Insignia'12 Sponsors</p>
   	<p align="center">&nbsp;</p>
       
  <script language="JavaScript1.2">

/*
Cross browser Marquee script- © Dynamic Drive (www.dynamicdrive.com)
For full source code, 100's more DHTML scripts, and Terms Of Use, visit http://www.dynamicdrive.com
Credit MUST stay intact
*/

//Specify the marquee's width (in pixels)
var marqueewidth="180px"
//Specify the marquee's height
var marqueeheight="132px"
//Specify the marquee's marquee speed (larger is faster 1-10)
var marqueespeed=3
//configure background color:
var marqueebgcolor="23132E"
//Pause marquee onMousever (0=no. 1=yes)?
var pauseit=1

//Specify the marquee's content (don't delete <nobr> tag)
//Keep all content on ONE line, and backslash any single quotations (ie: that\'s great):

var marqueecontent='<nobr><a href="http://www.accenture.com"</a><img src="spons/1.png"><a href="http://www.sbi.co.in"</a><img src="spons/sbi.jpg"><a href="http://www.deccanherald.com/"</a><img src="spons/dh.jpg"><a href="http://www.isctonline.com"</a><img src="spons/isct.png"><a href="http://www.syndicate.com"</a><img src="spons/syndicate.jpg"><a href="http://www.karnatakabank.com"</a><img src="spons/kb.jpg"></nobr>'


////NO NEED TO EDIT BELOW THIS LINE////////////
marqueespeed=(document.all)? marqueespeed : Math.max(1, marqueespeed-1) //slow speed down by 1 for NS
var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+marqueecontent+'</span>')
var actualwidth=''
var cross_marquee, ns_marquee

function populate(){
if (iedom){
cross_marquee=document.getElementById? document.getElementById("iemarquee") : document.all.iemarquee
cross_marquee.style.left=parseInt(marqueewidth)+8+"px"
cross_marquee.innerHTML=marqueecontent
actualwidth=document.all? temp.offsetWidth : document.getElementById("temp").offsetWidth
}
else if (document.layers){
ns_marquee=document.ns_marquee.document.ns_marquee2
ns_marquee.left=parseInt(marqueewidth)+8
ns_marquee.document.write(marqueecontent)
ns_marquee.document.close()
actualwidth=ns_marquee.document.width
}
lefttime=setInterval("scrollmarquee()",20)
}
window.onload=populate

function scrollmarquee(){
if (iedom){
if (parseInt(cross_marquee.style.left)>(actualwidth*(-1)+8))
cross_marquee.style.left=parseInt(cross_marquee.style.left)-copyspeed+"px"
else
cross_marquee.style.left=parseInt(marqueewidth)+8+"px"

}
else if (document.layers){
if (ns_marquee.left>(actualwidth*(-1)+8))
ns_marquee.left-=copyspeed
else
ns_marquee.left=parseInt(marqueewidth)+8
}
}

if (iedom||document.layers){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
if (iedom){
write('<div style="position:relative;width:'+marqueewidth+';height:'+marqueeheight+';overflow:hidden">')
write('<div style="position:absolute;width:'+marqueewidth+';height:'+marqueeheight+';background-color:'+marqueebgcolor+'" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">')
write('<div id="iemarquee" style="position:absolute;left:0px;top:0px"></div>')
write('</div></div>')
}
else if (document.layers){
write('<ilayer width='+marqueewidth+' height='+marqueeheight+' name="ns_marquee" bgColor='+marqueebgcolor+'>')
write('<layer name="ns_marquee2" left=0 top=0 onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed"></layer>')
write('</ilayer>')
}
document.write('</td></table>')
}
}
</script>
  </div>
        <div class="col one_fourth">
        	<p >&nbsp;</p>
        	<p ><img src="images/navigation.png" /></p>
       	  <p >&nbsp;</p>
            <ul style="list-style:none;">
           	  <li> <a href="http://www.sdmcet.ac.in"  target="_blank"><font style="font-size:16px;"><p align="justify">SDMCET</p></font></a></li><p></p>
                <li> <a href="#"><font style="font-size:16px;"><p align="justify">Schedule</p></font></a></li><p></p>
                <li><a href="contact.php"><font style="font-size:16px;"><p align="justify">Contact Us</p></font></a></li>
               <li><a href="aboutus.php"><font style="font-size:16px;"><p align="justify">About Us</p></font></a></li>
			</ul>
        	
    </div>
        <div class="col one_fourth">
       	  <p>&nbsp;</p>
       	  <p><img src="images/workshops.png" /></p>
       	  <p>&nbsp;</p>
          <ul style="list-style:none;">
         
          <li> <a href="workshop.php"><font style="font-size:16px;"><p align="justify">Aero Modeling</p></font></a></li><p></p>
                <li> <a href="workshop.php"><font style="font-size:16px;"><p align="justify">Autovaganza</p></font></a></li><p></p>
                <li><a href="workshop.php"><font style="font-size:16px;"><p align="justify">Motion &amp; Gesture Sensing</p></font></a></li>
               
		  </ul>
        	
    </div>
                <div class="col one_fourth last_box">
        	<p >&nbsp;</p>
        	<p ><img src="images/hosp.png" /></p>
        	<p >&nbsp;</p>
           <ul style="list-style:none;">
           	 <li> <a href="reach.php"><font style="font-size:16px;">
           	 <p align="justify">Reach SDMCET</p></font></a></li>
              </ul>
        	

    </div>
         <div class="cleaner hr_divider"></div>
</div>