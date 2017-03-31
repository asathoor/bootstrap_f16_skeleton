<!-- file: footer.php -->

	<!-- add your scripts here -->

<<<<<<< Updated upstream
<!-- Jquery menu sample --> 
		  <script> 
		    /* <![CDATA[ */ 
		    ( function( $ ) { 
		      // code goes here 
		      console.log('Here\'s Jquery.'); 
		      // hide the children 
		      $('.children').toggle(); 
		 
		      // Based on @url: http://callmenick.com/post/slide-down-menu-with-jquery-and-css 
		      $( '.page_item_has_children' ).hover( 
		              function(){ 
		                  $(this).children('.children').slideDown(500); 
		              }, 
		              function(){ 
		                  $(this).children('.children').slideUp(500); 
		              } 
		          ); 
		    } )( jQuery ); // jquery end 
		    /* ]]> */ 
		  </script> 



	<?php wp_footer(); // load WP-related footer scripts ?>
=======
	<!-- Jquery menu sample --> 
	<script> 
		/* <![CDATA[ */ 
		( function( $ ) { 
		  // code goes here 
		  console.log('Here\'s Jquery.'); 
		  // hide the children 
		  $('.children').toggle(); 

		  // Based on @url: http://callmenick.com/post/slide-down-menu-with-jquery-and-css 
		  $( '.page_item_has_children' ).hover( 
		          function(){ 
		              $(this).children('.children').slideDown(500); 
		          }, 
		          function(){ 
		              $(this).children('.children').slideUp(500); 
		          } 
		      ); 
		} )( jQuery ); // jquery end 
		/* ]]> */ 
	</script> 

<?php wp_footer(); // load WP-related footer scripts ?>

>>>>>>> Stashed changes
</body>
</html>
