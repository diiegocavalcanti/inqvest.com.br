<?php include("inc/section-letreiro-slide.inc.php"); ?>
<section class="section-titulos configuracoes-bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<img src="src/img/titulo-cadastro-17.svg" class="img-responsive" alt="">
			</div>
		</div>
	</div>
</section>
<section class="section-config">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<form action="">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="">Nome Completo</label>
							<input type="text" name="nomeCompleto" id="nomeCompleto" required class="form-control" placeholder="José da Silva">
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="">E-mail</label>
							<input type="email" name="email" id="email" required class="form-control" placeholder="exemplo@exemplo.com">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Foto do perfil</label>
							<input type="file" id="exampleInputFile">
							<p class="help-block">Adicione uma foto para sua conta</p>
						</div>
						<div class="form-group">
							<label for="">Deseja receber informações via email?</label>
							<div class="row">
								<div class="col-xs-6">
									<div class="radio">
										<label>
											<input type="radio" name="desejaEmail" id="desejaEmail" value="Sim">
											Sim
										</label>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="radio">
										<label>
											<input type="radio" name="desejaEmail" id="desejaEmail" value="Nao">
											Não
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="">Senha</label>
									<input type="password" name="senha" id="senha" required class="campo-senha form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="">Confirmar Senha</label>
									<input type="password" name="senha" id="senha" required class="campo-senha form-control">
								</div>
							</div>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" required> Desejo receber informações sobre promoções e novidades.
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> <a class="openModal" data-url="inc/termos.inc.php" data-title="Termos e Condições">Li e aceito termo de uso</a>
							</label>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<button type="submit" class="btn animation">CADASTRAR</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-6">
				<a class="btn btn-block btn-social btn-facebook">
					<span class="fa fa-facebook"></span>
					Entre com o Facebook
				</a>
				<a class="btn btn-block btn-social btn-google">
					<span class="fa fa-google"></span>
					Entre com o Google
				</a>
			</div>
		</div>
	</div>
</section>