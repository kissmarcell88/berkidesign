<html>

	<head>
		<title>Berki Design</title>
		<link rel="stylesheet"  type="text/css" href="css/style.css" />
		<script type='text/javascript' src='js/jquery-1.8.2.min.js' charset='utf-8'></script>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
		
		<script>

			$(document).ready(function() {
				  $('.menu-item').hover(
					function() {
						$(this).css('z-index', 1);
					    $(this).animate(
							    { 
							    	opacity: 1,
								    //left: '-=50', 
								    //top: '-=50', 
								    height: 200,//'+=100', 
								    width: 200//'+=100' 
								}, 
							    500, 
							    function() {}
						);
				  	},
				  	
					function() {
						$(this).css('z-index', 0);
					    $(this).animate(
							    { 
							    	opacity: 0.8,
								    //left: '+=50', 
								   // top: '+=50', 
								    height: 100,//'-=100', 
								    width: 100//'-=100' 
								}, 
							    500, 
							    function() {}
						);
				  	}

				);
			});

		</script>
	</head>
	
	<body>
		<div id="menu-container">
		
			<div id="main" class="menu-item">
				<div style="position:absolute; bottom:5px; left:5px; font-weight:bold; font-size:20px; font-family:Tangerine; color:white;">Main</div>
				<img src='img/150x150.jpg' width="100%"></img>
			</div>
			<div id="interior" class="menu-item"><img src='img/100x100.jpg' width="100%"></img></div>
			<div id="photos" class="menu-item"><img src='img/90x90.jpg' width="100%"></img></div>
			<div id="diy" class="menu-item"><img src='img/70x70.jpg' width="100%"></img></div>
			<div id="contact" class="menu-item"><img src='img/80x80.jpg' width="100%"></img></div>
			<div id="about" class="menu-item"><img src='img/60x60.jpg' width="100%"></img></div>
			
		</div>
	
	
	</body>
	
</html>