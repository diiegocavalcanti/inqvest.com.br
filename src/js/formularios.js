jQuery(document).ready(function(){

	jQuery('#form-login').submit(function(){

			if($("#email").val() == ""){
				mensagem("<h6>Preencha o E-mail!</<h6>");
				return false;
			}else
			if($("#senha").val() == ""){
				mensagem("<h6>Você esqueceu a senha</<h6>");
				return false;
			}else{

			var dados = jQuery(this).serialize();

			jQuery.ajax({
				type: "POST",
				url: "mail/mail.php",
				data: dados,
				success: function(data)
				{

					mensagem(data);
					$('#form-news').each(function(){
  					this.reset();
					});
				}
			});
			return false;
			}

		});
});
function mensagem(str){
	$('.mensagem-form').fadeIn(800).delay(4000);
	$('.mensagem-form').html(str);
	$('.mensagem-form').fadeOut(800);
}