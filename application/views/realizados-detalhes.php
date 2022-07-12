<section id="introducao-realizados">
	<div class="container clearfix">
		<h1 class="titulo-duas-linhas"><span>Residencial </span><?php echo $obra->nome?></h1>
		<div class="texto-introducao">
			<p>A LC projeta e executa obras para prédios comerciais, residenciais, edifícios, residências e obras públicas, tudo de forma personalizada, de acordo com os sonhos dos nossos clientes.</p>
		</div>
		<!--<a href="#" class="tour-virtual">Tour Virtual</a> -->
	</div>
</section>
<section id="fotos">
	<div class="container">
		<h2 class="titulo-duas-linhas">fotos</h2>

		<?php menu($obra); ?>
		
		<div class="albuns-fotos">
			<div id="o-empreendimento" class="album-selecionado">
				<?php echo fotos("empreendimentos",$obra->fotos_empreendimentos,$obra)?>
			</div>
			<div id="plantas">
				<?php echo fotos("plantas",$obra->fotos_plantas,$obra)?>
			</div>
			<div id="obra">
				<?php echo fotos("obras",$obra->fotos_obras,$obra)?>
			</div>
		</div>
	</div>
</section>

