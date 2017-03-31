<!-- file: footer.php -->

	<!-- add your scripts here -->

	<!-- Jquery menu sample --> 
	<script> 
		/* <![CDATA[ */ 
		( function( $ ) { 
		  // code goes here 
		  // console.log('Jquery is up and running.'); 
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
