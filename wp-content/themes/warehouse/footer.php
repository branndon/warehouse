<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="infos">
				<div class="address col-md-4">
					<h5>Onde Estamos:</h5>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> Rua São José, 98 - Cubatão / SP</p>
					<p><i class="fa fa-phone" aria-hidden="true"></i> (13) 3361-1919</p>
					<p><a href="mailto:estudiowarehouse@gmail.com"><i class="fa fa-paper-plane" aria-hidden="true"></i> estudiowarehouse@gmail.com</a></p>
					<p><i class="fa fa-skype" aria-hidden="true"></i> @estudiowarehouse</p>
				</div>
				<div class="smm col-md-4">
					<h5>Siga-nos:</h5>
					<a href="#" target="_blank" class="shrink"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#" target="_blank" class="shrink"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
					<a href="#" target="_blank" class="shrink"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
				</div>
			</div>

			<div class="clear"></div>

			<div class="copyright">
				<p>© Warehouse, <?php echo date( 'Y' ); ?>. All rights reserved. Design by Evelise</p>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- Plugins -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/sweetalert.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/parallax.min.js"></script>

	<!-- Main theme -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/functions.js"></script>

	<?php wp_footer(); ?>
</body>
</html>
