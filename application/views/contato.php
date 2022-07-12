<div class="container">
	<h1 class="titulo-duas-linhas">Contato</h1>
</div>
<section>
	<div class="container clearfix">
		<div class="formas-de-contato">
			<h2>Estamos a disposição para lhe atender</h2>
			
			<h3>Endereço</h3>
			<p>
			Rua Emílio Lúcio Esteves, 1131, Sala 301<br>
			Bairro Centro<br>
			Taquara / RS
			</p>

			<h3>Informações de Contato</h3>
			<p>
			lc@lcincorporacoes.com.br<br>
			51 3541.8394
			</p>

			<ul class="clearfix">
				<li>
					<a href="#" class="ir fb">Facebook</a>
				</li>
				<li>
					<a href="#" class="ir ins">Instagram</a>
				</li>
				<li>
					<a href="#" class="ir lin">LinkedIn</a>
				</li>
			</ul>
		</div>
		<div class="formulario">
			<span class="form-success"><?php echo $this->session->flashdata('success') ?></span>
			<form action="<?php echo base_url()?>contato/envio" method="post" class="clearfix">
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome" value="<?php echo set_value('nome')?>">
				<?php echo form_error('nome') ?>
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email" value="<?php echo set_value('email')?>">
				<?php echo form_error('email') ?>
				<label for="telefone">Telefone</label>
				<input type="text" name="telefone" id="telefone" value="<?php echo set_value('telefone')?>">
				<?php echo form_error('telefone') ?>
				<label for="assunto">Assunto</label>
				<input type="text" name="assunto" id="assunto" value="<?php echo set_value('assunto')?>">
				<?php echo form_error('assunto') ?>
				<label for="mensagem">Mensagem</label>
				<textarea name="mensagem" id="nome" value="<?php echo set_value('mensagem')?>"></textarea>
				<?php echo form_error('mensagem') ?>
				<span class="aviso">* Campos obrigatórios</span>

				<input type="submit" value="Enviar">
			</form>
		</div>
	</div>
</section>