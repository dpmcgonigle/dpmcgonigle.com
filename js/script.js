function spinStartupLogo(elem) {
    var angle=0;
    var id = setInterval(frame, 12);
    function frame() {
        if (angle==720) {
            clearInterval(id);
        } else {
            angle+=10;
            elem.css({'transform': 'rotate('+angle+'deg)'}); 
        }
    }
}

function moveStartupLogo() {
	var elem = document.getElementById("imgStartupLogo"); 
    var x = 50, y = 50;
    var id = setInterval(frame, 10);
    function frame() {
        if (y == 2) {
            clearInterval(id);
        } else {
            x-=2; 
			y-=3;
            elem.style.top = y + '%'; 
            elem.style.left = x + '%'; 
        }
    }
}

$(document).ready(function(){
	
	//This will determine the CSS file to pull from
	var style = "wooded";
	
	switch(style) {
		case "wooded":
			bgOnFail="rgb(247, 136, 47)";
			bgSafari="-webkit-linear-gradient(rgb(86, 82, 10), rgb(247, 195, 49), rgb(86, 82, 10))";
			bgOpera="-o-linear-gradient(rgb(86, 82, 10), rgb(247, 195, 49), rgb(86, 82, 10))";
			bgFireFox="-moz-linear-gradient(rgb(86, 82, 10), rgb(247,195,49), rgb(86, 82, 10))";
			bgStd="linear-gradient(rgb(86, 82, 10), rgb(247, 195, 49), rgb(86, 82, 10))";
			fgOnFail="rgb(247, 136, 47)";
			fgSafari="-webkit-linear-gradient(rgb(86, 82, 10), rgb(247,136,47), rgb(86, 82, 10))";
			fgOpera="-o-linear-gradient(rgb(86, 82, 10), rgb(247,136,47), rgb(86, 82, 10))";
			fgFireFox="-moz-linear-gradient(rgb(86, 82, 10), rgb(247,136,47), rgb(86, 82, 10))";
			fgStd="linear-gradient(rgb(86, 82, 10), rgb(247, 136, 47), rgb(86, 82, 10))";
		break;
		
		default:
		
		break;
		
	}
	
	//navbtn colors
	var bgOnFail, bgSafari, bgOpera, bgFireFox, bgStd, fgOnFail, fgSafari, fgOpera, fgFireFox, fgStd;
	
	var url = window.location.pathname;
	var fileName = url.substring(url.lastIndexOf('/')+1);
	//alert(fileName);
	
	if(fileName=="" || fileName=="index.php") {
		$("#imgStartupLogo").show();
		spinStartupLogo($("#imgStartupLogo"));

		setTimeout(function(){
			moveStartupLogo();
			$("#imgStartupLogo").hide(300);
		}, 1200);
		
		//Hide entire page immediately, delay 1 second and then fade entire page in over 1 second
		$(".pageWrapper").hide(0).delay(1000).fadeIn(1000);

	}
	
	
	//$("#dropdown-content").hide();
	
	/*	when hovering over a navigation button, change cursor, fade bacground out and fade in new background slowly
	when the cursor leaves, change background back quickly	*/
	$('li.navbtn').hover(function() {
		
		$("html").css( 'cursor', 'pointer' );
		$(this).fadeTo(150,0.3,function() {
			$(this).css({background: bgOnFail});
			$(this).css({background: bgSafari});
			$(this).css({background: bgOpera});
			$(this).css({background: bgFireFox});
			$(this).css({background: bgStd});
			$(this).fadeTo(100,1);
		});
	},
	function() {
		$("html").css( 'cursor', 'default' );
		$(this).fadeTo(50,0.3,function() {
			$(this).css({background: fgOnFail});
			$(this).css({background: fgSafari});
			$(this).css({background: fgOpera});
			$(this).css({background: fgFireFox});
			$(this).css({background: fgStd});
			$(this).fadeTo(100,1);
		});		
	});
	
	//Make main content window pop onMouseOver
	$('.mainContent').hover(function() {
		$(this).css({background: "rgba(255,255,255,0.9)"});
	},
	function() {
		$(this).css({background: "rgba(255,255,255,0.8)"});
	});	
	
	/*	when hovering over the logo, change img src	*/
	
	$('.logo').hover(function() {
		
		$("html").css( 'cursor', 'pointer' );
		$(this).fadeTo(150,0.3,function() {
			$(this).attr("src", "img/logo_mouseOver.png");
			$(this).fadeTo(100,1);
		});
	},
	function() {
		$("html").css( 'cursor', 'default' );
		$(this).fadeTo(50,0.3,function() {
			$(this).attr("src", "img/logo.png");
			$(this).fadeTo(100,1);
		});		
	});

	//drop down menu
	$(".dropdown").click(function() {
		$("#dropdown-content").toggle();
	});

	//Spin image
	$(".bulletImg").hover(function() {
		var elem=$(this);
		spinStartupLogo(elem);
	},
	function() {
		
	});
	
		/*					HIDE/SHOW Contact		*/	
	$('.contactToggle').click(function() {
		if($('.contact').is(":visible")) {
			$('.contact').slideToggle("medium", function() { 
				$('.mainContent').slideToggle("slow");
			});
		}
		else {
			$('.mainContent').slideToggle("medium", function() { 
				$('.contact').slideToggle("slow");
			});	
		}

	});

});