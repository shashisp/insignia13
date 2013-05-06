var countme=0;
var sponsorcount=0;
var paths=["Background/accenture_logo.jpg","Background/IBM_logo.png","Background/vodafone_qatar.png"];
var menu_state=0;
var puller=0;
var eventset=1;	

$(document).ready(function(e) {
	
	
	
	$.modal.defaults.closeClass="introskip";
	
	sponsorme();
    $("#home").mouseover(function(){
		//alert("GHELL");
		$("#home").css("color","#0CF");
		
	});
	$("#home").mouseout(function(){
		$("#home").css("color","#FFF");
		
	});
	
	$("#events").mouseover(function(){
		$("#events").css("color","#0CF");
		
	});
	$("#events").mouseout(function(){
		$("#events").css("color","#FFF");
		
	});
	
	$("#schedule").mouseover(function(){
		$("#schedule").css("color","#0CF");
		
	});
	$("#schedule").mouseout(function(){
		$("#schedule").css("color","#FFF");
		
	});
	
	$("#workshops").mouseover(function(){
		$("#workshops").css("color","#0CF");
		
	});
	$("#workshops").mouseout(function(){
		$("#workshops").css("color","#FFF");
		
	});
	
	$("#hospitality").mouseover(function(){
		$("#hospitality").css("color","#0CF");
		
	});
	$("#hospitality").mouseout(function(){
		$("#hospitality").css("color","#FFF");
		
	});
	$("#register").click(function(){
		 alert("Registration are not yet open");
		 //$("#registermodal").modal();
	});
	$("#register").mouseover(function(){
		$("#register").css("color","#0CF");
	});
	$("#register").mouseout(function(){
		$("#register").css("color","#FFF");
	});
	$("#sponsors").mouseover(function(){
		$("#sponsors").css("color","#0CF");
		
	});
	$("#sponsors").mouseout(function(){
		$("#sponsors").css("color","#FFF");
		
	});
	
	$("#contact").mouseover(function(){
		$("#contact").css("color","#0CF");
		
	});
	$("#contact").mouseout(function(){
		$("#contact").css("color","#FFF");
		
	});
	
	$("#button").mouseover(function(){
		$("#button").attr("src","Background/submit_over.png");
	});
	$("#button").mouseout(function(){
		$("#button").attr("src","Background/submit.png");
	});
	
	$("#opener").click(function(){
		
		if(puller==0){
			$("#login_div").animate({marginLeft:"0px"},500);
			$("#opener").attr("width",14);
			$("#opener").attr("height",62);
			$("#opener").attr("src","Background/push_up.png");
			puller=1;
		}
		else{
			$("#login_div").animate({marginLeft:"-227px"},500);
			$("#opener").attr("width",16);
			$("#opener").attr("height",112);
			$("#opener").attr("src","Background/my_acc.png");
			puller=0;
		}
	});
	
	$("#testme").click(function(){
		if(menu_state==0){
			$("#testme").animate({marginLeft:"0%"},500);
			$("#menu").attr("src","Background/cm.png");
			menu_state=1;
		}
		else{
			$("#testme").animate({marginLeft:"-100px"},500);
			$("#menu").attr("src","Background/om.png");
			menu_state=0;
		}
	});
	
	$("#man").click(function(){
		$("#cultevent").fadeOut(500,"",function(){
			
		if(eventset==1){
			$("#bus").appendTo("#eventholder");
		}
		eventset=2;
		$("#managementevents").appendTo("#cultevent");
		});
		$("#cultevent").fadeIn(500,"","");
	});
	
	$("#busi").click(function(){
		$("#cultevent").fadeOut(500,"",function(){
			
		if(eventset==2){
			$("#managementevents").appendTo("#eventholder");
		}
		eventset=1;
		$("#bus").appendTo("#cultevent");
		});
		$("#cultevent").fadeIn(500,"","");
	});
	
	$("#n4").click(function(){
	$("#teaminsig").modal();
	});
	$("#contact").click(function(){
	$("#teaminsig").modal();
	});
	$("#hospitality").click(function(){
	$("#myhos").modal();
	});
	$("#h1").click(function(){
	$("#reachme").modal();
	});
	
	$("#events").click(function(){
		$("#eventsect").modal();
	});
	
	$("#bestevent").click(function(){
		$("#bm").modal();
	});
	$("#financeevent").click(function(){
		$("#fin").modal();
	});
	$("#humanevent").click(function(){
		$("#hr").modal();
	});
	
	$("#marketingevent").click(function(){
		$("#mark").modal();
	});
	$("#gate").click(function(){
		$("#bill").modal();
	});
	$("#job").click(function(){
		$("#jobs").modal();
	});
	$("#warren").click(function(){
		$("#buffett").modal();
	});
	$("#bplan").click(function(){
		$("#incorp").modal();
	});
});

	
	
function sponsorme(){
	/*$("#spons").fadeOut(200,function(){
		$("#spons").html("<img src='"+paths[sponsorcount]+"'/>");
	});
	$("#spons").fadeIn(200,function(){});
	sponsorcount++;
	if(sponsorcount==3){
		sponsorcount=0;
	}
	window.setTimeout("sponsorme()",5000);*/
}

// JavaScript Document// JavaScript Document