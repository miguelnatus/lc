<main class="container">
	<h1 class="titulo-duas-linhas"><span>Empreendimentos </span>Residenciais</h1>
	<div class="texto-introducao">
		<p>A LC projeta e executa obras para prédios comerciais, residenciais, edifícios, residências e obras públicas, tudo de forma personalizada, de acordo com os sonhos dos nossos clientes.</p>
	</div>
	<ul class="lista-empreendimentos clearfix">

		<?php foreach ($obras as $obra) : ?>
			<li class="clearfix">
				<a href="#">
					<!--<h2><span>Nome do </span>Empreendimento</h2>-->
					<img class="capa" src="<?php echo base_url().'public/imgs/obras/capas/'.$obra->capa?>" alt="<?php echo $obra->nome?>">	
					
					<?php if (isset($obra->logo)) : ?>
						<div class="logo-empreendimento">
							<img class="img-responsive" src="<?php echo base_url().'public/imgs/obras/logos/'.$obra->logo?>" alt="<?php echo $obra->nome?>">
						</div>
					<?php endif; ?>
					
				</a>
			</li>
		<?php endforeach ?>

	</ul>
</main>