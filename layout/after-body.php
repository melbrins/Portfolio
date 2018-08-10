<script type="text/javascript" src="/dest/js/jquery.min.js"></script>
<script type="text/javascript" src="/dest/js/addons.min.js"></script>

<script type="text/javascript" src="/dest/js/main.min.js"></script> 



<script type="text/javascript">
	

	$(document).ready(function(){
	 	$('.owl-carousel').owlCarousel({
		    loop:true,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        }
		    }
		});

	    $('.content-wrap .lazy').lazy({
	    	appendScroll: $('.content-wrap'),
	    	placeholder: "/images/lazy.gif"
	    });
	});
</script>