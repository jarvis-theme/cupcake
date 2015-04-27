	{{HTML::script(dirTemaToko().'cupcake/assets/js/jquery.min.js')}}
	{{HTML::script(dirTemaToko().'cupcake/assets/js/bootstrap.min.js')}}
	{{HTML::script(dirTemaToko().'cupcake/assets/js/main.js')}}
	{{HTML::script(dirTemaToko().'cupcake/assets/js/jquery.cslider.js')}}
	{{HTML::script(dirTemaToko().'cupcake/assets/js/jquery.navgoco.min.js')}}
	{{HTML::script(dirTemaToko().'cupcake/assets/js/jquery.flexslider.js')}}

	<script type="text/javascript">
		// FANCYBOX
		$(function() {
			$('.fancybox').fancybox({
				padding: 10,
				openEffect : 'elastic',
				openSpeed  : 150,
				closeEffect : 'elastic',
				closeSpeed  : 150
			});
		});
	</script>
	<script type="text/javascript">
		$(function() {
		
			$('#da-slider').cslider({
				autoplay	: true,
				bgincrement	: 450
			});
		
		});
    	$('.sidey .nav').navgoco();
	</script>

	{{HTML::script(dirTemaToko().'cupcake/assets/js/jquery.fancybox.pack.js')}}
	{{HTML::script(dirTemaToko().'cupcake/assets/js/owl.carousel.min.js')}}
