<pre>
	
</pre>

<main class="container">
	<h1 class="titulo-duas-linhas"><span>Nossos </span>Empreendimentos</h1>
	<ul class="lista-empreendimentos">

		<?php foreach($empreendimentos as $empreendimento) : ?>
			<li class="clearfix lista-emp-<?php echo $empreendimento->slug ?>">
				<?php echo (!isset($empreendimento->status)) ? "<a href='".base_url()."empreendimentos/".$empreendimento->slug."'>" : "<a href='#' class='indisponivel'>"?>
					<div class="emp-info">
						<h2 class="ir" style="background-image:url('<?php echo base_url()?>public/imgs/empreendimentos/logos/<?php echo $empreendimento->logo ?>');"><?php echo $empreendimento->nome ?></h2>
						<!-- <img src="<?php echo base_url()?>public/imgs/empreendimentos/logos/<?php echo $empreendimento->logo ?>" alt=""> -->
						<ul class="caracteristicas clearfix">
							<?php foreach ($empreendimento->caracteristicas as $caracteristica) : ?>
									<li><span style="background-image: url('<?php echo base_url()."public/imgs/empreendimentos/caracteristicas/".$caracteristica->icon?>')"></span><?php echo $caracteristica->descricao?></li>
							<?php endforeach ?>
						</ul>
						<?php if (!isset($empreendimento->status)) { ?>
							<strong>VEJA O PROJETO</strong>	
						<?php }else{ ?>
							<span class="em-espera">em breve!</span>
						<?php } ?>				
					</div>
					<div class="emp-foto">
						<img src="<?php echo base_url()?>public/imgs/empreendimentos/capas/<?php echo $empreendimento->foto_capa?>" alt="Foto do <?php echo $empreendimento->nome ?>">	
					</div>
				</a>
			</li>
		<?php endforeach?>
	</ul>
</main>

