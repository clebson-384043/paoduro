<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Cadastro de novo Usuário</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<script type="text/javascript" src="css/view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="images/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Cadastro de novo usuário</a></h1>
		
		<form id="form_cadastro" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Cadastro de novo usuário</h2>
		</div>						
			<ul>
			<h3>Dados Pessoais</h3>
			
		</li>		<li id="nome" >
		<span>
			<input id="element_nome_first" name="element_nome_first" class="element text" maxlength="255" size="18" value=""/>
			<label class="tam">Nome</label>
		</span>
		<span>
			<input id="element_nome_last" name="element_nome_last" class="element text" maxlength="255" size="18" value=""/>
			<label class="tam">Sobrenome</label>
		</span>
		<p class="guidelines" id="guide_1"><small>Preencha com seu nome e sobrenome completos</small></p> 
		</li>		<li id="sexo" >
		<label class="description" for="element_sexo">Sexo </label>
		<span>
			<input id="element_sexo_masc" name="element_sexo" class="element radio" type="radio" value="Masculino" />
<label class="choice" for="element_sexo_masc">Masculino</label>
<input id="element_sexo_fem" name="element_sexo" class="element radio" type="radio" value="Feminino" />
<label class="choice" for="element_sexo_feminino">Feminino</label>

		</span> 
		</li>		<li id="data" >
		<label class="description" for="element_data_nascimento">Data de Nascimento </label>
		<span>
			<input id="element_data_dia" name="element_data_dia" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_data_dia">Dia</label>
		</span>
		<span>
			<input id="element_data_mes" name="element_data_mes" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_data_mes">Mês</label>
		</span>
		<span>
	 		<input id="element_data_ano" name="element_data_ano" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_data_ano">Ano</label>
		</span>
	
		 
		</li>		<li class="section_break">
			<h3>Endereço</h3>
			<p></p>
		</li>		<li id="address" >
		
		
		<div>
			<input id="element_address_rua" name="element_address_rua" class="element text large" value="" type="text">
			<label for="element_address_rua">Logradouro, n°</label>
		</div>
	
		<div>
			<input id="element_address_bairro" name="element_address_bairro" class="element text large" value="" type="text">
			<label for="element_address_bairro">Bairro</label>
		</div>
	
		<div class="left">
			<input id="element_address_cidade" name="element_address_cidade" class="element text medium" value="" type="text">
			<label for="element_address_cidade">Cidade</label>
		</div>
	
		<div class="right">
			<input id="element_address_estado" name="element_address_estado" class="element text medium" value="" type="text">
			<label for="element_address_estado">Estado</label>
		</div>
	
		<div class="left">
			<input id="element_address_cep" name="element_address_cep" class="element text medium" maxlength="15" value="" type="text">
			<label for="element_address_cep">CEP</label>
		</div>
	

	<p class="guidelines" id="guide_3"><small>Preencha com endereço completo, inclusive o CEP.</small></p> 
		</li>		<li class="section_break">
			<h3>Informações de Login</h3>
			<p></p>
		</li>		<li id="login" >
		<label class="description" for="element_email">Email </label>
		<div>
			<input id="element_email" name="element_email" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_senha">Senha </label>
		<div>
			<input id="element_senha" name="element_senha" class="element text medium" type="password" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="257667" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Cadastrar" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			<a href='quemsomos.php'>"Pão Duro - Todos os direitos reservados"</a>
		</div>
	</div>
	<img id="bottom" src="images/bottom.png" alt="">
	</body>
</html>