/*	window.onload = ( function() {        
    getDateTime();
	document.getElementById('span.browser').innerHTML = 'Chrome';
     })();*/
	 
	 //Change the greeting element based on the time of the day
		function getDateTime() {
		var now     = new Date(); 
		var hour    = now.getHours(); 
	   if(hour >= 17){  
			//document.getElementById('greeting').innerHTML = "evening";
			$("#greeting").text("evening");
	   }
	   else if(hour>=12){
			//document.getElementById('greeting').innerHTML = "afternoon";
			$("#greeting").text("afternoon");
		}
		else {
			//document.getElementById('greeting').innerHTML = "morning";
			$("#greeting").text("morning");
		}
	}
	
/*Unreliable; Edge Comes up as Chrome
	function getBrowser() {
		var browserType;
		if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 ) 
		{
			browserType='Opera';
		}
		else if(navigator.userAgent.indexOf("Chrome") != -1 )
		{
			browserType='Chrome';
		}
		else if(navigator.userAgent.indexOf("Safari") != -1)
		{
			browserType='Safari';
		}
		else if(navigator.userAgent.indexOf("Firefox") != -1 ) 
		{
			 browserType='Firefox';
		}
		else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
		{
		  browserType='IE'; 
		}  
		else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
		{
		  browserType='IE'; 
		}  
		else 
		{
		   browserType='unknown';
		}
		document.getElementById('browser').innerHTML = browserType;
	}*/


$(document).ready(function() {

	getDateTime();
	//getBrowser();

	
/*	when hovering over a navigation button, change cursor, fade bacground out and fade in new background slowly
when the cursor leaves, change background back quickly	*/
	$('li.navbtn').hover(function() {
		$("html").css( 'cursor', 'pointer' );
		$(this).fadeTo(150,0.3,function() {
			$(this).css({background: "rgb(247, 136, 47)"});
			$(this).css({background: "-webkit-linear-gradient(rgb(86, 82, 10), rgb(247, 195, 49), rgb(86, 82, 10))"});
			$(this).css({background: "-o-linear-gradient(rgb(86, 82, 10), rgb(247, 195, 49), rgb(86, 82, 10))"});
			$(this).css({background: "-moz-linear-gradient(rgb(86, 82, 10), rgb(247,195,49), rgb(86, 82, 10))"});
			$(this).css({background: "linear-gradient(rgb(86, 82, 10), rgb(247, 195, 49), rgb(86, 82, 10))"});
			$(this).fadeTo(100,1);
		});
	},
	function() {
		$("html").css( 'cursor', 'default' );
		$(this).fadeTo(50,0.3,function() {
			$(this).css({background: "rgb(247, 136, 47)"});
			$(this).css({background: "-webkit-linear-gradient(rgb(86, 82, 10), rgb(247,136,47), rgb(86, 82, 10))"});
			$(this).css({background: "-o-linear-gradient(rgb(86, 82, 10), rgb(247,136,47), rgb(86, 82, 10))"});
			$(this).css({background: "-moz-linear-gradient(rgb(86, 82, 10), rgb(247,136,47), rgb(86, 82, 10))"});
			$(this).css({background: "linear-gradient(rgb(86, 82, 10), rgb(247, 136, 47), rgb(86, 82, 10))"});
			$(this).fadeTo(100,1);
		});		
	});
	
	// Older version // $('.home div').hover(function() {	$(this).fadeTo(250,0); },	function() { $(this).fadeTo(50,1); });
	
	/*accordion in the aside tag*/
	$('div.accordion > button').click(function() {
		$('div.panel').slideUp();
		if($(this).next().css('display') === 'none')
			$(this).next().slideDown();
	});
	
	/*					HEADLINE BANNER HOVER			*/
	$('.headlineBanner').hover(function() {
		$(this).css({background: "rgba(247,195,49,0.8)"}); /*citrus*/
		$("html").css( 'cursor', 'grab' );
	},
	function() {
		$(this).css({background: "rgba(247,195,49,0.5)"}); /*citrus*/
		$("html").css( 'cursor', 'default' );
	});
	
	$('.headlineBanner').mousedown(function() {
		$("html").css( 'cursor', 'grabbing' );
	});
	
	$('.headlineBanner h1').mouseup(function() {
		$("html").css( 'cursor', 'grab' );		
	});
	
	/*					THIS HASN'T BEEN WORKING			*/
  $(function() {
    $('.headlineBanner h1').draggable();
  });
	
	$('.form').hover(function() {
		$(this).css({background: "rgba(107,122,143,0.8)"}); /*blueberry*/
	},
	function() {
		$(this).css({background: "rgba(107,122,143,0.5)"}); /*blueberry*/
	});	
	
	$('.contactBanner').hover(function() {
		$(this).css({background: "rgba(247,195,49,0.8)"}); /*citrus*/
		$("html").css( 'cursor', 'pointer' );
	},
	function() {
		$(this).css({background: "rgba(247,195,49,0.5)"}); /*citrus*/
		$("html").css( 'cursor', 'default' );
	});	
	
	/*					HIDE/SHOW Form			*/
	$('.contactBanner').click(function() {
		if($('.form').is(":visible")) {
			$('.contactBanner img').attr("src", "img/up.png");
			$('.form').slideToggle("medium", function() { 
				$('.mainDisplay').slideToggle("slow");
			});
		}
		else {
			$('.contactBanner img').attr("src", "img/down.png");		
			$('.mainDisplay').slideToggle("medium", function() { 
				$('.form').slideToggle("slow");
			});	
		}

	});

	/*					FOOTER HOVER			*/
	$('footer').hover(function() {
		$(this).css({background: "rgba(107,122,143,0.8)"}); /*blueberry*/
	},
	function() {
		$(this).css({background: "rgba(107,122,143,0.5)"}); /*blueberry*/
	});		
	
});

