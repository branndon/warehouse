<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package HowlThemes
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

		<!-- MAIS POPULARES -->
		<div class="content-title first">
			<h3 class="maven_promedium">As mais populares</h3>
			<p class="maven_promedium">janeiro de 2016</p>
		</div>
		<ul>
			<li class="small-border">
				<a href="#">
					<img src="<?php bloginfo( 'template_directory' ); ?>/img/teste-mais-vistos.jpg" alt="<?php bloginfo( 'name' ); ?>"/>
					<h4 class="maven_probold">Dossiê: a make hit do verão 2016</h4>
					<div class="border"></div>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?php bloginfo( 'template_directory' ); ?>/img/teste-mais-vistos2.jpg" alt="<?php bloginfo( 'name' ); ?>"/>
					<h4 class="maven_probold">5 usos para o seu hidratante que você não conhecia</h4>
					<div class="border"></div>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?php bloginfo( 'template_directory' ); ?>/img/teste-mais-vistos3.jpg" alt="<?php bloginfo( 'name' ); ?>"/>
					<h4 class="maven_probold">3 dicas para deixar a sua manhã mais produtiva</h4>
					<div class="border"></div>
				</a>
			</li>
		</ul>
		
		<!-- INSTAGRAM -->
		<div class="content-facebook">
			<div class="content-title">
				<h3 class="maven_promedium">Siga-nos no Instagram</h3>
				<p class="maven_promedium">@grandplazashopping</p>
			</div>
			<div class="content">
				<?php echo do_shortcode('[instagram-feed]'); ?>
			</div>
		</div>
		
		<!-- FACEBOOK -->
		<div class="content-facebook">
			<div class="content-title">
				<h3 class="maven_promedium">Curta a nossa página</h3>
				<p class="maven_promedium">fique ligado nas nossas novidades</p>
			</div>
			<div class="content">
				<div class="fb-page" data-href="https://www.facebook.com/GrandPlazaShop" data-width="100%" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/GrandPlazaShop"><a href="https://www.facebook.com/GrandPlazaShop">Grand Plaza Shopping</a></blockquote></div></div>
			</div>
		</div>
