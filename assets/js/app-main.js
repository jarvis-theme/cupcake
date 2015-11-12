var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=006",
	waitSeconds: 120,
	shim: {
		'bootstrap' : {
			deps : ['jquery']
		},
		'cart' : {
			deps : ['jquery','noty'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
		"noty_util" : {
			deps : ['jquery','noty'],
		},
		"navgoco" : {
			deps : ['jquery'],
		},
		"owlcarousel" : {
			deps : ['jquery'],
		},
		"cslider" : {
			deps : ['jquery'],
		},
		"fancybox" : {
			deps : ['jquery']
		}
	},

	paths: {
		// LIBRARY
		jquery 			: '//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min',
		bootstrap		: '//maxcdn.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min',
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		noty_util		: 'js/utils/noty',
		cslider			: dirTema+'/assets/js/lib/jquery.cslider',
		fancybox		: dirTema+'/assets/js/lib/jquery.fancybox.pack',
		flexslider		: dirTema+'/assets/js/lib/jquery.flexslider',
		navgoco			: dirTema+'/assets/js/lib/jquery.navgoco.min',
		owlcarousel		: dirTema+'/assets/js/lib/owl.carousel.min',
		
		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		main	        : dirTema+'/assets/js/pages/default',
	}
});
require([
	'jquery',
	'router',
	'cart',
	'noty_util',
	'main'
], function($,router,cart,noty,main){
	router.run();
	main.run();
	noty.run();
	cart.run();
});