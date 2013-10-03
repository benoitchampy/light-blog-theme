					</section> <!-- end main section -->
				</div> <!-- end large-12 -->
			</div> <!-- end row -->
		</div> <!-- end main -->
		
		<footer></footer>
	</div> <!-- end page -->
	<?php wp_footer(); ?>
	<script type="text/javascript">
		function hideAddressBar()
		{
		    if(!window.location.hash)
		    {
		        if(document.height <= window.outerHeight + 10)
		        {
		            document.body.style.height = (window.outerHeight + 50) +'px';
		            setTimeout( function(){ window.scrollTo(0, 1); }, 50 );
		        }
		        else
		        {
		            setTimeout( function(){ window.scrollTo(0, 1); }, 0 );
		        }
		    }
		}
		window.addEventListener("load", hideAddressBar );
		window.addEventListener("orientationchange", hideAddressBar );
			
		var ua = navigator.userAgent,
		event = (ua.match(/iPad/i)) ? "touchstart" : "click";

		$(".mobile-nav a").bind(event, function(e) {
			e.preventDefault();
		    $("#page").toggleClass("active");
		});
		
		$(".nav-container h1 a").bind(event, function(e) {
			
			if ($("#page").hasClass("active")) {
				e.preventDefault();
				$("#page").toggleClass("active");
				console.log("hello");
			}
		});
	</script>
</body>
</html>