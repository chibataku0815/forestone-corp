<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package info@fores-tone.co.jp
 */

?>

	<footer id="footer" class="grid">
		<a class="contact" data-remodal-target="modal">
			<div class="contact__text">contact</div>
		</a>
		<div class="remodal" data-remodal-id="modal">
		  <button data-remodal-action="close" class="remodal-close"></button>
		  <p>
		    <?php echo do_shortcode( '[contact-form-7 id="16" title="お問合せ"]' ); ?>
		  </p>
		</div>
		<div class="copyright">
			Copyright © Forestone Inc All Rights Reserved.
		</div>

	</footer>
<?php wp_footer(); ?>

</body>
</html>
