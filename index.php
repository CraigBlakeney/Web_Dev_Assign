<?php session_start();  include 'navbar.php'?>
<!--Home Page for the website -->
		<!--Says hello to the person if logged in using the username , or guest if not logged in -->
		<p class="loginhelp">Welcome <?php 
		if(isset($_SESSION['username']))
		{
			echo $_SESSION['username'];
		}else
		{
			echo 'guest';
		}			
		?>!</p>
		<!--J Query for the sliding panel on the home page that shows more information , and fading symbol at bottom -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script> 
				$(document).ready(function()
				{
					$("#flip").click(function()
					{
						$("#panel").slideToggle("slow");
					});
				});
			</script>
			
			
		<div id="flip"><h1 style="color:#3366ff">Blockbuster</h1></div>
		<div id="panel"><h4 style="color:#3366ff"> Blockbuster is an American Based provider of home movie and video game rental services through video rental shops, DVD by mail, streaming video on demand and cinema theatre. Contact us at 1-866-692-2789. </h4></div>

		<footer>
		
		<div class = "fadeinout" id="fadetext"> <h1> Blockbuster</h1>  
		
		<script>
			fadeloop('#fadetext', 1500,1200,true);
			
			function fadeloop(el, timeout, timein, loop)
			{
				var $el = $(el),intID,fn = function()
					{
						$el.fadeOut(timeout).fadeIn(timein);
					};
					fn();
					if(loop)
					{
						intId = setInterval(fn,timeout+timein+100);
						return intId;
					}
				return false;
			}
			</script>
		</div>	
		
		</footer>
			
		
		



		