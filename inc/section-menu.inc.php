<section class="section-menu">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3">
				<a href="?url=questoes">
					<div class="box-menu menu-1 animation <?php if(isset($_GET['url']) && $_GET['url'] == 'questoes'){ echo ' current';} ?>">

						<h2>Estudo</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, et?</p>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-sm-3">
				<a href="?url=prova">
					<div class="box-menu menu-2 animation <?php if(isset($_GET['url']) && $_GET['url'] == 'prova'){ echo ' current';} ?>">
						<h2>Prova</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-sm-3">
				<a href="?url=simulado">
					<div class="box-menu menu-3 animation <?php if(isset($_GET['url']) && $_GET['url'] == 'simulado'){ echo ' current';} ?>">
						<h2>Simulado</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-sm-3">
				<a href="?url=caderno">
					<div class="box-menu menu-4 animation <?php if(isset($_GET['url']) && $_GET['url'] == 'caderno'){ echo ' current';} ?>">
						<h2>Caderno</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>