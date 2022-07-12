
	<section class="carrossel-empreendimentos">
		<ul class="owl-carousel owl-theme">
			<?php foreach (getEmpreendimentos() as $empreendimento) : ?>
					<li class="item" style="background:url('<?php echo base_url()."public/imgs/empreendimentos/banners/".$empreendimento->banner?>') no-repeat center top; background-size:cover;" data-logo="<?php echo base_url()."public/imgs/empreendimentos/logos/".$empreendimento->logo ?>">
						<div class="container">
							<h1><?php echo $empreendimento->nome?></h1>
							<a href="<?php echo base_url().'empreendimentos/'.$empreendimento->slug?>" class="botao-banner"><span>Detalhes do empreendimento</span></a>
						</div>
					</li>
			<?php endforeach ?>
		</ul>

		<!-- navegacão entre os slides do carrossel -->
		<!-- <div class="owl-nav">
			<button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
			<button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
		</div>	 -->
	</section>

	<section class="o-que-fazemos">
		<div class="container">

			<div>
				<h1 class="titulo-duas-linhas"><span>O que</span> fazemos</h1>
				<a href="<?php echo base_url()?>servicos" class="botao-pos-titulo"><span>Conheça nossos serviços</span></a>
			</div>
			<ul>
				<li>
					<div>
						<h2>Incorporações</h2>
						<p>Nossa incorporadoda trabalha em conjunto com a LC construtora. Realizamos o projeto, cuidamos de todos os detalhes até a venda.</p>
					</div>
				</li>
				<li>
					<div>
						<h2>Construções</h2>
						<p>Executamos obras personalizadas, do jeito que você planejou o seu lugar perfeito para viver. Trabalhamos com todo tipo de obra civil, em especial, projetos residenciais.</p>
					</div>
				</li>
				<!-- <li>
					<div>
						<h2>Empreendimentos</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipiing elit aenean eumod.</p>
					</div>
				</li> -->
			</ul>

		</div>
	</section>

	<section class="projetos-destaque">
		<div class="container">
			<h1 class="titulo-duas-linhas"><span>Projetos em</span> destaque</h1>
			<ul class="clearfix">

				<li>
					<a href="<?php echo base_url()?>empreendimentos/gardens-residence">
						<img src="<?php echo base_url()?>public/imgs/empreendimentos/capas/foto-gardens.jpg" alt="Imagem do empreendimento Gardens Residence">
						<h2 class="botao-projetos"><span>Gardens Residence</span></h2>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url()?>empreendimentos/santa-catharina">
						<img src="<?php echo base_url()?>public/imgs/empreendimentos/capas/foto-santa-catharina.jpg" alt="Imagem do empreendimento Santa Catharina">
						<h2 class="botao-projetos"><span>Santa Catharina</span></h2>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url()?>empreendimentos">
						<img src="<?php echo base_url()?>public/imgs/empreendimentos/capas/foto-ana-julia.jpg" alt="Imagem do empreendimento Ana Julia">
						<h2 class="botao-projetos"><span>Ana Julia</span></h2>
					</a>
				</li>
			</ul>
		</div>
	</section>


