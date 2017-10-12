<?php include("inc/section-letreiro-slide.inc.php"); ?>
<?php include("inc/section-questoes.inc.php") ?>
<?php include("inc/section-menu.inc.php") ?>
<section class="section-busca">
	<div class="container">
		<div class="row">
			<form action="">
				<div class="col-sm-3 col-sm-offset-2">
					<select class="form-control select-ano" multiple data-plugin="select2" data-placeholder="Ano">
						<optgroup label="Selecione os Anos">
							<?php
							$ano = date('Y');
							for($i=0; $i<=20; $i++){ ?>
							<option value="<?=$ano-$i?>"><?=$ano-$i?></option>
							<?php } ?>
						</optgroup>
					</select>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<select class="form-control select-ano" multiple data-plugin="select2" name="disciplina" id="disciplina" data-placeholder="Disciplina">
							<optgroup label="Selecione as Disciplinas">
								<option value="1">Disciplina</option>								
							</optgroup>
						</select>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group"><button class="btn" type="submit">FILTRAR</button></div>
				</div>
			</form>
		</div>
	</div>
</section>
<section class="section-resultados">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<p class="pull-left">1000 resultados encontrados</p>
				<form action="" class="pull-right qtde-pagina">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-6">
								<p>Simulados por página</p>
							</div>
							<div class="col-xs-6">
								<select name="" id="" class="form-control">
									<option value="">1</option>
								</select>
							</div>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<section class="section-header-simulado">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="row"><a class="animation seletor-simulado current" target="#section-simulado">ESCOLHER UM SIMULADO</a></div>
			</div>
			<div class="col-sm-6">
				<div class="row"><a class="animation seletor-simulado" target="#section-criar-simulado">CRIAR UM SIMULADO</a></div>
			</div>
		</div>
	</div>
</section>
<section class="section-res-simulado">
	<div class="container">
		<div class="row">
			<div id="section-simulado" class="sections-simulado col-sm-12">
				<?php for($i=0;$i<10;$i++){ ?>

				<div class="ctn-res-provas">
					<div class="row">
						<div class="col-sm-6">
							<h2>#<?=$i?> ANO/DISCIPLINA </h2>
							<p>10 questões   Criado em 00/00/0000</p>
						</div>
						<div class="col-sm-6">
							<a href="" class="links apagar animation">APAGAR</a>
							<a role="button" data-toggle="collapse" href="#collapse-caderno-<?=$i?>" aria-expanded="false" aria-controls="collapse-caderno-<?=$i?>" class="links historico animation">HISTÓRICO</a>
							<a href="" class="links comecar animation">COMEÇAR</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 ctn-collapse collapse" id="collapse-caderno-<?=$i?>">
							<div class="row">
								<div class="col-sm-4">
									<h4>Você já <span>respondeu </span>esse simulado <span>12 vezes</span></h4>
								</div>
								<div class="col-sm-4">
									<div class="grafico">
										<div class="grafico-1">
											<a href="?url=feedback-simulado">
												<div class="barra">
													<div class="acertos"><p>10</p></div>
													<div class="bar-result" percent="20">
														<div class="erros"><p>20</p></div>
													</div>
												</div>
											</a>
											<p>1º</p>
										</div>
										<div class="grafico-1">
											<a href="?url=feedback-simulado">
												<div class="barra">
													<div class="acertos"><p>10</p></div>
													<div class="bar-result" percent="80">
														<div class="erros"><p>20</p></div>
													</div>
												</div>
											</a>
											<p>2º</p>
										</div>
										<div class="grafico-1">
											<a href="?url=feedback-simulado">
												<div class="barra">
													<div class="acertos"><p>10</p></div>
													<div class="bar-result" percent="20">
														<div class="erros"><p>20</p></div>
													</div>
												</div>
											</a>
											<p>3º</p>
										</div>
										<div class="grafico-1">
											<a href="?url=feedback-simulado">
												<div class="barra">
													<div class="acertos"><p>10</p></div>
													<div class="bar-result" percent="99">
														<div class="erros"><p>20</p></div>
													</div>
												</div>
											</a>
											<p>4º</p>
										</div>
										<div class="grafico-1">
											<a href="?url=feedback-simulado">
												<div class="barra">
													<div class="acertos"><p>10</p></div>
													<div class="bar-result" percent="2">
														<div class="erros"><p>20</p></div>
													</div>
												</div>
											</a>
											<p>5º</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="feedback-box pdt-caderno">
										<div class="erros-box"></div> <h3>Acertos</h3>
									</div>
									<div class="feedback-box">
										<div class="acertos-box"></div> <h3>Erros</h3>
									</div>
									<p>5 Últimos Resultados</p>
								</div>

							</div>
							<div class="row">
								<a class="bt-coll-caderno" role="button" data-toggle="collapse" href="#collapse-caderno-<?=$i?>" aria-expanded="false" aria-controls="collapse-caderno-<?=$i?>" >
									<img src="src/img/questoes/up.svg" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="col-xs-12 sections-simulado" id="section-criar-simulado">
				<div class="row">
					<form action="">
						<div class="col-sm-4">
							<div class="form-group">
								<select name="ano" id="ano" class="form-control">
									<option value="">ANO</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<select name="disciplina" id="disciplina" class="form-control">
									<option value="">DISCIPLINA</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<select name="assunto" id="assunto" class="form-control">
									<option value="">ASSUNTO</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<select name="assunto" id="assunto" class="form-control">
									<option value="">NÚMERO DE QUESTÕES</option>
								</select>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<div class="radio">
								  <label>
								    <input type="radio" name="tempo" id="tempo" class="livre" value="tempo">
								    TEMPO LIVRE
								  </label>
								</div>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<div class="radio">
								  <label>
								    <input type="radio" name="tempo" id="tempo" class="pre-determinado" value="tempo">
								    TEMPO PRÉ-DETERMINADO
								  </label>
								</div>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<select name="assunto" id="duracao" class="form-control" readonly>
									<option value="">DURAÇÃO</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group"><button class="btn animation" type="submit">CRIAR SIMULADO</button></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-pagination">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<a href="" class="current">1</a>
				<a href="" class="">2</a>
				<a href="" class="">3</a>
				<a href="" class="">4</a>
				<a href="" class="">5</a>
				<a href="" class="">6</a>
				<a href="" class="">7</a>
				<a href="" class="">8</a>
				<a href="" class="">9</a>
				<a href="" class="">10</a>
			</div>
		</div>
	</div>
</section>