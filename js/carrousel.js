var carrousel = {

	nbSlide : 0,
	nbCurrent : 1,
	elemCurrent : null,
	elem : null,
	timer :null,
	
	init : function (elem){
		this.nbSlide = elem.find(".slide").length;

		// Cr�er la pagination
		elem.append('<div class="navigation"></div>');
		for(var i=1;i<=this.nbSlide;i++){
			elem.find(".navigation").append("<span>"+i+"</span>");
		}
		elem.find(".navigation span").click(function(){carrousel.gotoSlide($(this).text());})
		
		// Initialisation du carrousel
		this.elem=elem;
		elem.find(".slide").hide();
		elem.find(".slide:first").show();
		this.elemCurrent = elem.find(".slide:first");
		this.elem.find(".navigation span:first").addClass("active");
		
		//Cr�er le timer
		carrousel.play();
		
		//Stop quand on passe sur le carrousel
		elem.mouseover(carrousel.stop);
		elem.mouseout(carrousel.play);
	},
	
	gotoSlide : function(num){
		if(num==this.nbCurrent){return false;}
		/* Animation en FadeIn/FadeOut
		this.elemCurrent.fadeOut();
		this.elem.find("#slide"+num).fadeIn();
		*/
		/* Animation En Slide*/
		var sens = 1;
		if(num<this.nbCurrent){sens=-1;} 
		var cssDeb = { "left" : sens*this.elem.width()};
		var cssFin = { "left" : -sens*this.elem.width()};
		this.elem.find("#slide"+num).show().css(cssDeb);
		
		this.elem.find("#slide"+num).animate({"top":0,"left":0},500);
		this.elemCurrent.animate(cssFin,500);
		
		this.elem.find(".navigation span").removeClass("active");
		this.elem.find(".navigation span:eq("+(num-1)+")").addClass("active");
		this.nbCurrent = num;
		this.elemCurrent = this.elem.find("#slide"+num);
	},
	
	next : function(){
		var num = this.nbCurrent+1;
		if(num>this.nbSlide){
			num = 1;
		}
		this.gotoSlide(num);
	},
	
	stop : function(){
		window.clearInterval(carrousel.timer);
	},
	play : function(){
		window.clearInterval(carrousel.timer);
		carrousel.timer = window.setInterval("carrousel.next()",5000);
	}
}
$(function(){
	carrousel.init($("#carrousel"));
});