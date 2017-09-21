<?php include("inc/section-letreiro-slide.inc.php"); ?>
<section class="section-titulos configuracoes-bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<img src="src/img/titulo-configuracoes-03.svg" class="img-responsive" alt="">
			</div>
		</div>
	</div>
</section>
<section class="section-config">
	<div class="container">
		<div class="row">
			<form action="">
				<div class="col-xs-12">
					<div class="form-group">
						<label for="">Nome Completo</label>
						<input type="text" name="nomeCompleto" id="nomeCompleto" required class="form-control" placeholder="José da Silva">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="">Data de Nascimento</label>
						<input type="text" name="dataNascimento" id="dataNascimento" required class="form-control" placeholder="01/01/2017">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="">Sexo</label>
						<div class="row">
							<div class="col-xs-6">
								<div class="radio">
									<label>
										<input type="radio" name="sexo" id="sexo" value="Feminino">
										Fem
									</label>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="radio">
									<label>
										<input type="radio" name="sexo" id="sexo" value="Masculino">
										Mas
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="">CPF</label>
						<input type="text" name="cpf" id="cpf" required class="form-control" placeholder="000.000.000.00">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="row">
						<div class="col-sm-2">
							<div class="form-group">
								<label for="">Estado</label>
								<select name="estado" id="estado" class="form-control">
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label for="">Cidade</label>
								<input type="text" name="cidade" id="cidade" required class="form-control" placeholder="Cidade">
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label for="">Telefone</label>
								<input type="text" name="fone" id="fone" required class="form-control" placeholder="(00) 00000-0000">
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="">E-mail</label>
								<input type="email" name="email" id="email" required class="form-control" placeholder="exemplo@exemplo.com">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label for="exampleInputFile">Foto do perfil</label>
								<input type="file" id="exampleInputFile">
								<p class="help-block">Adicione uma foto para sua conta</p>
							</div>
						</div>
						<div class="col-sm-4">
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
						
					</div>
				</div>
				<div class="col-xs-12">
					<div class="row">
						<div class="col-sm-2">
							<a class="bt-alterar-senha animation" href="">ALTERAR SENHA</a>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for="">Senha</label>
								<input type="password" name="senha" id="senha" required readonly class="campo-senha form-control">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for="">Confirmar Senha</label>
								<input type="password" name="senha" id="senha" required readonly class="campo-senha form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="interesse">
						<h4>Assinale suas áreas de interesse</h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="agenciasReguladoras">
										Agências reguladoras
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Bancária
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Conselhos de Fiscalização
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Educação
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										EP e SEM
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Estágio
									</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Exame de Proﬁciência
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Executivo
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Fiscal
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Forças Armadas
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Gestão e Controle
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Judiciário (Servidor)
									</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Judiciário (Autoridade)
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Legislativo
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Policial
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Saúde
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Saúde
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interesse" id="interesse" value="Sim">
										Saúde
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<button type="submit" class="btn animation">ENVIAR</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>