<?php
/**
 * Template Name: Contato
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="content">

		<!-- Maps -->
		<div class="content-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3208.6817773091266!2d-46.42921272329448!3d-23.90081671791063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1a0ee617516b%3A0x9852d38b7aadc9b1!2sWarehouse+Estudio!5e0!3m2!1spt-BR!2sbr!4v1462751471518" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<div class="container">
			<div class="content-tit">
				<?php
					while ( have_posts() ) : the_post();
						echo '<h1>' . get_the_title() . '</h1>';
						echo get_the_content();
					endwhile;
				?>
			</div>

			<!-- Infos -->
			<div class="infos-contact col-md-5">
				<p><strong>Endereço:</strong><br/>
				Rua São José, 98 - Cubatão / SP</p>

				<p><strong>Telefones:</strong><br/>
				(13) 3361-1919</p>

				<p><a href="mailto:estudiowarehouse@gmail.com">estudiowarehouse@gmail.com</a></p>
			</div>

			<!-- Formulário -->
			<div class="formulario col-md-7">
				<div class="row main">
					<div class="main-login main-center">
						<form name="contato" id="contato" class="form-horizontal" method="post" action="<?php bloginfo( 'template_directory' ); ?>/includes/send-contato.php">
							
							<!-- Nome -->
							<div class="content-fields">
								<label for="nome" class="cols-sm-2 control-label">Nome</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="nome" id="nome"  placeholder="Digite seu nome"/>
									</div>
								</div>
							</div>

							<!-- E-mail -->
							<div class="content-fields">
								<label for="email" class="cols-sm-2 control-label">E-mail</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="email" id="email"  placeholder="Digite seu e-mail"/>
									</div>
								</div>
							</div>

							<!-- Telefone -->
							<div class="content-fields">
								<label for="telefone" class="cols-sm-2 control-label">Telefone</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="telefone" id="telefone"  placeholder="Digite seu telefone"/>
									</div>
								</div>
							</div>

							<!-- Mensagem -->
							<div class="content-fields">
								<label for="mensagem" class="cols-sm-2 control-label">Mensagem</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-comments" aria-hidden="true"></i></span>
										<textarea class="form-control" name="mensagem" id="mensagem"  placeholder="Diz aí para nós, como podemos ajudar você?"></textarea>
									</div>
								</div>
							</div>

							<!-- Enviar -->
							<div class="content-fields">
								<input type="submit" class="btn btn-success btn-lg btn-block" name="btnEnviar" id="btnEnviar" value="Enviar mensagem" />
								<!-- <button type="button" ><i class="fa fa-check" aria-hidden="true"></i> Enviar mensagem</button> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>
