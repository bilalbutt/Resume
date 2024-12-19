$( document ).ready(function() {
	
    $( ".anim_prg" ).each(function( index ) {
        var Prg = $(this).attr("data-prog");
        var ShowNumber = $(this).attr("data-show-number");
        if ( ShowNumber == 1 ){
            $(this).text(Prg);
        }
        $(this).animate({ width: Prg });
    });
    
    $(".more_info_bio").click(function(){
		var BioCnt = $(this).parent("h2").parent(".w3-container").parent(".bio_cnt");
		var ActHeight = BioCnt.height();
		if ( ActHeight <= 65 ){
			var ActHeight2 = BioCnt.get(0).scrollHeight;
			BioCnt.animate({height: ActHeight2 + "px"});
            $(this).css({transform: "rotate(180deg)"});
        }else{
            BioCnt.animate({height: "65px"});
            $(this).css({transform: "rotate(0deg)"});
        }
    });
	
	$(".summary_up, .skills_up, .work_with_up, .social_up, .lang_up, .twork_up, .edu_up").click(function(){
		
		var TotalHeight = '';
		
		var GrandParent = $(this).parent(".w3-padding-16").parent(".main_cnt");		
		var GrandParentHeight = GrandParent.height();
		//console.log( "Grand Parent Height : " + GrandParentHeight );
		
		var HeadingHeight = $(this).parent(".w3-padding-16").height();
        var HeadingPaddingTop = parseInt( $(this).parent(".w3-padding-16").css("padding-top") );
        var HeadingPaddingBottom = parseInt( $(this).parent(".w3-padding-16").css("padding-bottom") );
        var HeadingMarginTop = parseInt( $(this).parent(".w3-padding-16").css("margin-top") );
        var HeadingMarginBottom = parseInt( $(this).parent(".w3-padding-16").css("margin-bottom") );
		TotalHeight = HeadingHeight + HeadingPaddingTop + HeadingPaddingBottom + HeadingMarginTop + HeadingMarginBottom;
        
        //console.clear();
        //console.log( "More Info : " + GrandParentHeight + " | " + HeadingHeight + " | " + HeadingPaddingTop + " | " + HeadingPaddingBottom + " | " + HeadingMarginTop + " | " + HeadingMarginBottom);
        
        if ( GrandParentHeight <= 150 ){
			
			$(".work_details").click();
			//var ActHeight = $(this).parent(".w3-padding-16").parent(".main_cnt").get(0).scrollHeight;
            var ActHeight = GrandParent.get(0).scrollHeight;
			//$(this).parent(".w3-padding-16").parent(".main_cnt").height( ActHeight );
			GrandParent.height( ActHeight )
			$(this).css({transform: "rotate(180deg)"});
			
        }else{
			
			//$(this).parent(".w3-padding-16").parent(".main_cnt").animate({height: TotalHeight + "px"});
            GrandParent.animate({height: TotalHeight + "px"});
            $(this).css({transform: "rotate(0deg)"});
			
        }
		
	});
	
	$(".profile_up, .work_up").click(function(){
		
		var TotalHeight = '';		
		var GrandParent = $(this).parent(".w3-padding-16").parent("div").parent(".main_cnt");
		var GrandParentHeight = GrandParent.height();
		//console.log( "Grand Parent Height : " + GrandParentHeight );
		
		var HeadingHeight = $(this).parent(".w3-padding-16").height();
        var HeadingPaddingTop = parseInt( $(this).parent(".w3-padding-16").css("padding-top") );
        var HeadingPaddingBottom = parseInt( $(this).parent(".w3-padding-16").css("padding-bottom") );
        var HeadingMarginTop = parseInt( $(this).parent(".w3-padding-16").css("margin-top") );
        var HeadingMarginBottom = parseInt( $(this).parent(".w3-padding-16").css("margin-bottom") );
		TotalHeight = HeadingHeight + HeadingPaddingTop + HeadingPaddingBottom + HeadingMarginTop + HeadingMarginBottom;
        
        //console.clear();
        //console.log( "More Info : " + GrandParentHeight + " | " + HeadingHeight + " | " + HeadingPaddingTop + " | " + HeadingPaddingBottom + " | " + HeadingMarginTop + " | " + HeadingMarginBottom);
        
        if ( GrandParentHeight <= 150 ){
			$(".work_details").click();
			//var ActHeight = $(this).parent(".w3-padding-16").parent(".main_cnt").get(0).scrollHeight;
            var ActHeight = GrandParent.get(0).scrollHeight;
			//$(this).parent(".w3-padding-16").parent(".main_cnt").height( ActHeight );
			GrandParent.height( ActHeight )
			$(this).css({transform: "rotate(180deg)"});
        }else{
			//$(this).parent(".w3-padding-16").parent(".main_cnt").animate({height: TotalHeight + "px"});
            GrandParent.animate({height: TotalHeight + "px"});
            $(this).css({transform: "rotate(0deg)"});
        }
		
	});
	
});

var BackToTop = $('.back_to_top');
$(window).scroll(function() {
	var scrollPosition = $(window).scrollTop();
	if (scrollPosition < 5000) {
		BackToTop.css("bottom", "20px");
	} else {
		BackToTop.css("bottom", "125px");
	}
});
BackToTop.on('click', function(e) {
	e.preventDefault();
	$('html, body').animate({scrollTop:0}, '250');
});