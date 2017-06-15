<!-- file: footer.php -->
<footer class="footer aligncenter">
	<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">
		<img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.<br>

		WP Theme &copy; 
			<a href="https://www.gnu.org/licenses/gpl-3.0.txt">GPLv3</a> <?php echo date("Y"); ?> 
			<a href="https://github.com/asathoor/bootstrap_f16_skeleton/tree/multimusen">"Bootstrap-F16-Skeleton"</a> by Per Thykjaer Jensen<br>
		Based on <a href="http://getbootstrap.com/">Twitter's Bootstrap</a>.
		Powered by <a href="http://www.wordpress.org/">WordPress</a>!
</footer>

	<!-- add your scripts here -->

	<!-- Jquery menu sample --> 
	<script> 
		/* <![CDATA[ */ 
		( function( $ ) {

			/**
			 * Android Browser Tweaks
			 * @url: https://v4-alpha.getbootstrap.com/getting-started/browsers-devices/#mobile-devices
			 */
			$(function () {
				var nua = navigator.userAgent
				var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
				if (isAndroid) {
					$('select.form-control').removeClass('form-control').css('width', '100%')
				}
			})

		} )( jQuery ); // jquery end 
		/* ]]> */ 

	</script> 

	<?php wp_footer(); // load WP-related footer scripts ?>

</body>
</html>
