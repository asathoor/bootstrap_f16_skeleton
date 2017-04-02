<!-- file: footer.php -->
<footer class="footer aligncenter well">
	<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.
</footer>


	<!-- add your scripts here -->

	<!-- Jquery menu sample --> 
	<script> 
		/* <![CDATA[ */ 
		( function( $ ) { 

			/**
			 * Hover Menu
			 * ( mobile friendly? )
			 */
 
		  // hide the children 
		  $('.sub-menu').toggle(); 

		  // Based on @url: http://callmenick.com/post/slide-down-menu-with-jquery-and-css 
		  $( '.menu-item-has-children' ).hover( 
		          function(){ 
		              $(this).children('.sub-menu').toggle(500); 
		          }, 
		          function(){ 
		              $(this).children('.sub-menu').slideUp(500); 
		          } 
		      ); 
		} )( jQuery ); // jquery end 
		/* ]]> */ 

	</script> 

	<?php wp_footer(); // load WP-related footer scripts ?>

</body>
</html>
