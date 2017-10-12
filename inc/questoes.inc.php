<?php include("inc/section-letreiro-slide.inc.php"); ?>
<?php include("inc/section-questoes.inc.php") ?>
<?php include("inc/section-menu.inc.php") ?>
<section class="section-busca">
	<div class="container">
		<div class="row">
			<form action="">
				<div class="col-sm-3">
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
				<div class="col-sm-3">
					<div class="form-group">
						<select class="form-control select-ano" multiple data-plugin="select2" name="disciplina" id="disciplina" data-placeholder="Disciplina">
							<optgroup label="Selecione as Disciplinas">
								<option value="1">Disciplina</option>
							</optgroup>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<select class="form-control select-ano" multiple data-plugin="select2" name="assunto" id="assunto" data-placeholder="Assunto">
							<optgroup label="Selecione os Assuntos">
								<option value="1">Assunto</option>
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
								<p>Questões por página</p>
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
<section class="section-questao">
	<div class="container">
		<div class="row">
			<div class="col-xs-1">
				<div class="box-n-q">
					<h2>1</h2>
				</div>
			</div>
			<div class="col-xs-11">
				<h5>ANO/DISCIPLINA/ASSUNTO</h5>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur corporis, eum adipisci voluptas facilis vitae quibusdam, minima perspiciatis provident, recusandae impedit. Obcaecati, nihil, voluptatem ut mollitia culpa cupiditate cum doloribus voluptas voluptates laboriosam. Magni similique suscipit laborum quos aliquam earum.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<form action="">
					<div class="form-group">
						<div class="radio">
							<label>
								<span>a</span>
								<input type="radio" name="questao" id="questao1" value="option1">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error laboriosam, recusandae illo ut sint delectus optio possimus praesentium consequuntur, ipsa.
							</label>
						</div>
					</div>
					<div class="form-group">
						<div class="radio">
							<label>
								<span>b</span>
								<input type="radio" name="questao" id="questao1" value="option1">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error laboriosam, recusandae illo ut sint delectus optio possimus praesentium consequuntur, ipsa.
							</label>
						</div>
					</div>
					<div class="form-group">
						<div class="radio">
							<label>
								<span>c</span>
								<input type="radio" name="questao" id="questao1" value="option1">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error laboriosam, recusandae illo ut sint delectus optio possimus praesentium consequuntur, ipsa.
							</label>
						</div>
					</div>
					<div class="form-group">
						<div class="radio">
							<label>
								<span>d</span>
								<input type="radio" name="questao" id="questao1" value="option1">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error laboriosam, recusandae illo ut sint delectus optio possimus praesentium consequuntur, ipsa.
							</label>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="responder">Responder</button>
					</div>
				</form>
				<div class="feedback-resposta">
					<h6 class="errado">
					Xiii... você errou. A alternativa correta é a letra C.
					</h6>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-submenu-questoes">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<a class="sub-links" href="#comentarios" data-target="#collapse-comentario" aria-expanded="true" aria-controls="collapse-comentario">COMENTÁRIOS</a>
				<a class="sub-links" data-target="#collapse-estatisticas" aria-expanded="true" aria-controls="collapse-estatisticas" href="#estatisticas">ESTATÍSTICAS</a>
				<a class="sub-links" data-target="#collapse-adicionar-caderno" aria-expanded="true" aria-controls="collapse-adicionar-caderno" href="#adicionar-caderno">ADICIONAR A UM CADERNO</a>
				<a class="sub-links" data-target="#collapse-evolucao" aria-expanded="true" aria-controls="collapse-evolucao" href="#evolucao">EVOLUÇÃO</a>
			</div>
		</div>
	</div>
</section>
<div class="sub-sections" id="comentarios">
	<?php include("inc/comentarios.inc.php"); ?>
</div>
<div class="sub-sections" id="estatisticas">
	<?php include("inc/estatisticas.inc.php"); ?>
</div>
<div class="sub-sections" id="adicionar-caderno">
	<?php include("inc/adicionar-caderno.inc.php"); ?>
</div>
<div class="sub-sections" id="evolucao">
	<?php include("inc/section-evolucao.inc.php"); ?>
</div>
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