<!-- file: footer.php -->

	<!-- add your scripts here -->

	<!-- Jquery menu sample --> 
	<script> 
		/* <![CDATA[ */ 
		( function( $ ) { 
		  // code goes here 
		  console.log('Jquery is up and running.'); 
		  // hide the children 
		  $('.menu-item-has-children').toggle(); 

		  // Based on @url: http://callmenick.com/post/slide-down-menu-with-jquery-and-css 
		  $( '.menu_item_has_children' ).hover( 
		          function(){ 
		              $(this).children('.sub-menu').toggle(); 
		          }, 
		          function(){ 
		              $(this).children('.menu-item').slideUp(500); 
		          } 
		      ); 
		} )( jQuery ); // jquery end 
		/* ]]> */ 
	</script> 

	<?php wp_footer(); // load WP-related footer scripts ?>

</body>
</html>
