<?php 
    echo link_tag('assets/css/entrance.css');
    echo link_tag('assets/css/buttons.css');
 ?>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url().'assets/js/entrance.js'?>"></script>
<div class="div_login">
	<div class="resposta resposta-erro">
		<b id="msg"></b>
		<span class='close'>&#10006;</span>
	</div>
	<div class="div_container">
		<form id="login-form" accept-charset="UTF-8" autocomplete="off" class="login-form" action="inicial/view" method="post">
      		<div class="auth-form-header">
        		<h1>Entrar</h1>
      		</div>
      		<div class="auth-form-body">
	       		 <label for="login_field">
	         		 Usuário
	        	</label>
	        	<input autocapitalize="off" autofocus="autofocus" class="input-block" id="st_username" name="st_username" tabindex="1" type="text">
		        <label for="password">
	    	    	Senha <a class="forgotpw" href="">(esqueceu a senha)</a>
	        	</label>
	        	<input autocomplete="disabled" class="input-block" id="st_passwd" name="st_passwd" tabindex="2" type="password">
	        	<input id="bt_entrar" type="button" class="button" name="commit" tabindex="3" value="Entrar">
	        	<input id="bt_limpar" type="button" class="button-clean" name="commit" tabindex="3" value="Limpar">
        	</div>
		</form>
	</div>
</div>