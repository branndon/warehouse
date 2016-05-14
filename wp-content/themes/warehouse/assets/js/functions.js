$(document).ready(function($) {

	/*---------------------*\
		Menu: scroll
	\*---------------------*/
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname){
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});

	/*---------------------*\
		Validação: Contato
	\*---------------------*/
		$( "#contato" ).submit( function(){

			var nome		= $( "#nome" )[0];
			var email		= $( "#email" )[0];
			var telefone	= $( "#telefone" )[0];
			var mensagem	= $( "#mensagem" )[0];

			if( nome.value == '' ) {
				nome.focus();
				swal({   title: "Erro!",   text: "O campo NOME é obrigatório. Por favor, preencha corretamente.",   type: "error",   confirmButtonText: "Ok" });
				return false;
			}

			if( email.value == '' ) {
				email.focus();
				swal({   title: "Erro!",   text: "O campo EMAIL é obrigatório. Por favor, preencha corretamente.",   type: "error",   confirmButtonText: "Ok" });
				return false;
			}
			else if( !/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/.test( email.value ) ) {
				email.select();
				swal({   title: "Erro!",   text: "O EMAIL informado não é válido. Por favor, verifique e preencha corretamente.",   type: "error",   confirmButtonText: "Ok" });
				return false;
			}

			if( telefone.value == '' || telefone.value.substring( telefone.value.length - 2, telefone.value.length ) == '__' ) {
				telefone.focus();
				swal({   title: "Erro!",   text: "O campo TELEFONE é obrigatório. Por favor, preencha corretamente.",   type: "error",   confirmButtonText: "Ok" });
				return false;
			}

			if( mensagem.value == '' ) {
				mensagem.focus();
				swal({   title: "Erro!",   text: "O campo MENSAGEM é obrigatório. Por favor, preencha corretamente.",   type: "error",   confirmButtonText: "Ok" });
				return false;
			}
		});

	/*---------------------*\
		Maps Scroll
	\*---------------------*/
		$('.content-map').click(function () {
			$('.content-map iframe').css("pointer-events", "auto");
		});
});