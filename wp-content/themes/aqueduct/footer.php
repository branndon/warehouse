<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package HowlThemes
 */
?>

	<!--  </div> #content -->
<?php // howlthemes_foot(); ?>

	<div class="copyright">
		<div class="container">
			<div class="content-social grid_5">
				<p>Acompanhe-nos nas nossas redes sociais</p>

				<div class="clear"></div>

				<ul>
					<li>
						<a href="https://www.facebook.com/GrandPlazaShop" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="https://twitter.com/GrandPlazaShop" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/grandplazashopping/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
					</li>
					<li>
						<a href="https://www.youtube.com/user/GrandPlazaShopping" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
					</li>
					<li>
						<a href="http://www.plazablog.com.br/feed/rss/" target="_blank" title="RSS"><i class="fa fa-rss"></i></a>
					</li>
					<li>
						<a href="#" target="_blank" title="Snapchat"><i class="snapchat"></i></a>
					</li>
				</ul>

				<div class="clear"></div>

				<p class="allright">Copyright © 2016 · Todos os direitos reservados</p>
			</div>

			<div class="content-assinatura grid_5">
				<p>
					<img src="<?php bloginfo( 'template_directory' ); ?>/img/gran-plaza-logo-rodape.png" alt="<?php bloginfo( 'name' ); ?>"/><br/>					
				</p>
				<p class="mktvirtual">
					<a href="http://www.mktvirtual.com.br" target="_blank" title="Mkt Virtual">
						<img src="<?php bloginfo( 'template_directory' ); ?>/img/mktvirtual.png" alt="<?php bloginfo( 'name' ); ?>"/>
					</a>
				</p>
			</div>

			<!-- <div class="back-top">
				<a href="#" id="back-to-top" title="Back to top">Back To Top<i class="fa fa-arrow-circle-o-up"></i></a>
			</div> -->
		</div>
	</div>
	
<?php wp_footer(); ?>

</body>
</html>
