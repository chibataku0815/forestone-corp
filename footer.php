<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package info@fores-tone.co.jp
 */

?>

	<footer id="" class="grid">
		<a class="contact" data-remodal-target="modal">contact</a>
		<div class="remodal" data-remodal-id="modal">
		  <button data-remodal-action="close" class="remodal-close"></button>
		  <h1>Remodal</h1>
		  <p>
		    Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin with declarative configuration and hash tracking.
		  </p>
		  <br>
		  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
		  <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
		</div>
		<div class="copyright">
			Copyright © Forestone Inc All Rights Reserved.
		</div>

	</footer>
<?php wp_footer(); ?>

</body>
</html>
