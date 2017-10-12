<?php include("inc/section-letreiro-slide.inc.php"); ?>
<section class="section-titulos evolucao-bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<img src="src/img/titulo-evolucao-17.svg" class="img-responsive" alt="">
			</div>
		</div>
	</div>
</section>
<section class="section-numeros">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="sn-titulo">
					<h2>TROFÉUS</h2>
				</div>
				<div class="sn-ctn-caroucel">
					<div class="box-trofeu">
						<div class="owl-prev animation"></div>
						<div class="owl-next animation"></div>
						<div id="owl-trofeu-evolucao" class="owl-carousel">
							<div class="item">
								<img src="src/img/trofeu-19.svg" alt="" class="img-responsive">
							</div>
							<div class="item">
								<img src="src/img/trofeu-19.svg" alt="" class="img-responsive">
							</div>
							<div class="item">
								<img src="src/img/trofeu-19.svg" alt="" class="img-responsive">
							</div>
							<div class="item">
								<img src="src/img/trofeu-19.svg" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="sn-titulo openModal" data-url="inc/questoes-respondidas.inc.php" data-title="DESAFIOS" data-toggle="tooltip" data-placement="top" title="Click para ver mais">
					<h2>DESAFIOS</h2>
				</div>
				<div class="sn-ctn openModal" data-url="inc/questoes-respondidas.inc.php" data-title="DESAFIOS" data-toggle="tooltip" data-placement="bottom" title="Click para ver mais">
					<div>
						<h3>10</h3>
						<h4>00:00</h4>
						<p>Tempo Médio por Questão</p>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="sn-titulo openModal" data-url="inc/duelos-respondidos.inc.php" data-title="DUELOS" data-toggle="tooltip" data-placement="top" title="Click para ver mais">
					<h2>DUELOS</h2>
				</div>
				<div class="sn-ctn">
					<div>
						<h3>50</h3>
						<h4>00:00</h4>
						<p>Tempo Médio por Questão</p>
						<br>
						<a class="btn btn-warning btn-xs openModal" data-url="inc/duelos-criar.inc.php" data-title="CRIAR DUELO" data-toggle="tooltip" data-placement="bottom" title="Crie um novo duelo">Criar Duelo</a>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="sn-titulo">
					<h2>QUESTÕES RESOLVIDAS</h2>
				</div>
				<div class="sn-ctn">
					<div class="grafico-questoes">
						<h3>1000</h3>
						<div class="grafico-1">
							<p>
								<span class="acertos">80%</span>
								<span class="erros">20%</span>
							</p>

							<div class="barra">
								<div class="bar-result-questoes" percent="80">
								</div>
							</div>

							<p class="legenda-grafico">
								<span class="acertos">Acertos</span>
								<span class="erros">Erros</span>
							</p>							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="sn-titulo">
					<h2>PONTOS ACUMULADOS</h2>
				</div>
				<div class="sn-ctn">
					<h3>10000</h3>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="sn-titulo">
					<span><img src="src/img/coin.png" class="img-responsive" alt=""></span> <h2>SALDO</h2>
				</div>
				<div class="sn-ctn">
					<h3>$100 </h3>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-busca">
	<div class="container">
		<div class="row">
			<form action="">
				<div class="col-sm-3">
					<label for="">POSIÇÃO GERAL</label>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<select name="disciplina" id="disciplina" class="form-control">
							<option value="">POR DISCIPLINA</option>
						</select>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<select name="banca" id="banca" class="form-control">
							<option value="">POR BANCA</option>
						</select>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<select name="prova" id="prova" class="form-control">
							<option value="">POR PROVA</option>
						</select>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<section class="section-posicao">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="sua-posicao">
					<div class="line-you">
						<div class="line-data">
							<p>Você</p>
							<div class="my-caret"><img src="src/img/caret-you.svg" alt=""></div>
							<h6>50%</h6>
						</div>
					</div>
					<div class="line-full"></div>
					<div class="line-others">
						<div class="line-data">
							<p>Média</p>
							<div class="my-caret"><img src="src/img/caret-others.svg" alt=""></div>
							<h6>70%</h6>
						</div>
					</div>
					<div class="ball-finish"></div>
					<div class="ball-init"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-graficos">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>O seu histórico está excelente!</h2>
				<h3>Continue investindo no seu conhecimento e obtendo grandes resultados</h3>
				<div class="line-title"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4>Acerto Líquido/Mês</h4>
				<canvas class="grafico" id="grafico-bar"></canvas>
			</div>
			<div class="col-sm-6">
				<h4>Total de Questões Respondidas/Mês</h4>
				<canvas class="grafico" id="grafico-line"></canvas>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4>Tempo Médio por Questão</h4>
				<canvas class="grafico" id="grafico-line2"></canvas>
			</div>
			<div class="col-sm-6">
				<h4>Posição Geral</h4>
				<canvas class="grafico" id="posicao-geral"></canvas>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4>Acerto por Ano</h4>
				<canvas class="grafico" id="grafico-radar"></canvas>
			</div>
			<div class="col-sm-6">
				<h4>Acerto por Disciplina</h4>
				<canvas class="grafico" id="acerto-banca"></canvas>
			</div>
		</div>
	</div>
</section>
<section class="section-visao-geral">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>VISÃO GERAL</h1>
			</div>
			<div class="col-sm-2">
				<div class="svg-title-1">
					<h2></h2>
				</div>
				<div class="svg-key-1">
					<h3>Atual</h3>
				</div>
				<div class="svg-value-1">
					<h6>Anterior</h6>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="svg-title">
					<h2>Disciplina de Maior Rendimento</h2>
				</div>
				<div class="svg-key">
					<h3>Economia</h3>
				</div>
				<div class="svg-value">
					<h6>Matemática</h6>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="svg-title">
					<h2>Ano com Mais Questões Resolvidas</h2>
				</div>
				<div class="svg-key">
					<h3>2013</h3>
				</div>
				<div class="svg-value">
					<h6>2014</h6>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="svg-title">
					<h2>Disciplina Mais Respondida</h2>
				</div>
				<div class="svg-key">
					<h3>Matemática</h3>
				</div>
				<div class="svg-value">
					<h6>Informática</h6>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="svg-title">
					<h2>Mês com Mais Respostas</h2>
				</div>
				<div class="svg-key">
					<h3>Agosto</h3>
				</div>
				<div class="svg-value">
					<h6>Julho</h6>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="svg-title">
					<h2>Melhor Posição no Ranking</h2>
				</div>
				<div class="svg-key">
					<h3>4º</h3>
				</div>
				<div class="svg-value">
					<h6>7º</h6>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-graficos section-resultados">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>Acertos por Questão</h3>
				<canvas class="grafico" id="acertos-questao">
				</canvas>
			</div>
			<div class="col-sm-6">
				<h3>Resultado Mensal</h3>
				<div class="row">
					<div class="col-xs-6">
						<p>Percentual de Acertos</p>
						<h5>80% <span><img src="src/img/ico-up.svg" alt=""></span></h5>
					</div>
					<div class="col-xs-6">
						<p>Tempo Médio / Prova</p>
						<h5>00:00 <span><img src="src/img/ico-down.svg" alt=""></span></h5>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<p>Percentual de Erros</p>
						<h5>10% <span><img src="src/img/ico-up.svg" alt=""></span></h5>
					</div>
					<div class="col-xs-6">
						<p>Jogos Concluídos</p>
						<h5>10 <span><img src="src/img/ico-down.svg" alt=""></span></h5>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<p>Questões em Branco</p>
						<h5>10% <span><img src="src/img/ico-up.svg" alt=""></span></h5>
					</div>
					<div class="col-xs-6">
						<p>Pontos Acumulados</p>
						<h5>100 <span><img src="src/img/ico-down.svg" alt=""></span></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="src/js/charts-load.js"></script>