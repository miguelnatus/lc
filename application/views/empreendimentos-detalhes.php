<section id="introducao">
	<div class="container clearfix">
		<div class="info-empreendimento">
			<h1 class="ir" style="background-image:url('<?php echo base_url()?>public/imgs/empreendimentos/logos/<?php echo $empreendimento->logo?>');">Gardens Residence</h1>
			<div class="texto-introducao">
				<p><?php echo $empreendimento->descricao?></p>
			</div>

			<?php if(isset($empreendimento->tour_virtual)) : ?>
				<a href="<?php echo $empreendimento->tour_virtual?>" class="tour-virtual" target="_blank">Tour Virtual</a>
			<?php endif ?>

		</div>
		<img src="<?php echo base_url()?>public/imgs/empreendimentos/capas/<?php echo $empreendimento->foto_capa?>" class="imagem-empreendimento" alt="Imagem ilustrativa do empreendimento Gardens Residence">
	</div>
</section>
<section id="fotos">
	<div class="container">
		<h2 class="titulo-duas-linhas">fotos</h2>

		<?php menu($empreendimento); ?>

		<div class="albuns-fotos">
			<div id="o-empreendimento" class="album-selecionado">

				<?php echo fotos("empreendimentos",$empreendimento->fotos_empreendimentos,$empreendimento)?>

			</div>
			<div id="plantas">

				<?php echo fotos("plantas",$empreendimento->fotos_plantas,$empreendimento)?>
			
			</div>
			<div id="obra">

				<?php echo fotos("obras",$empreendimento->fotos_obras,$empreendimento)?>
			
			</div>
		</div>
	</div>
</section>
<section id="caracteristicas">
	<div class="container">
		<h2 class="hide">Características do empreendimento</h2>
		
		<ul class="caracteristicas clearfix">

			<?php foreach ($empreendimento->caracteristicas as $caracteristica) : ?>
					<li>
						<span style="background-image: url('<?php echo base_url().'public/imgs/empreendimentos/caracteristicas/'.$caracteristica->icon?>')"></span>
						<h3><?php echo $caracteristica->descricao?></h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing<p> -->
					</li>
			<?php endforeach ?>

		</ul>
	</div>
</section>
<!-- <section id="detalhes">
	<div class="container clearfix">
		<div class="dados-gerais">
			<h2 class="titulo-duas-linhas">Apartamentos</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo.</p>
			<a href="#" class="download-botao">Faça download das plantas</a>
		</div>
		<div class="tabela">
			<table>
				<thead>
					<tr>
						<th>Quartos</th>
						<th>Quantidade</th>
						<th>Cômodos</th>
						<th>Área</th>
						<th>Estacionamento</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>20</td>
						<td>4</td>
						<td>80<span>m&#178;</span></td>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
						<td>20</td>
						<td>4</td>
						<td>80<span>m&#178;</span></td>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
						<td>20</td>
						<td>4</td>
						<td>80<span>m&#178;</span></td>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
						<td>20</td>
						<td>4</td>
						<td>80<span>m&#178;</span></td>
						<td>1</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section> -->
<!-- <section id="andamento">
	<div class="container">
		<h2 class="titulo-duas-linhas">Andamento da Obra</h2>
		
			<h3>Total da Obra</h3>
			<div class="barra-vazia" id="total-da-obra">
				<span class="barra-preenchimento"></span>
				<span class="porcentagem">0%</span>
			</div>

			<div class="obra-completa">
				<img src="<?php echo base_url()?>public/imgs/estrutura/success-icon.png" alt="">
				<h3>Obra Finalizada!</h3>
			</div>
			
			<h4><span>Mais detalhes</span></h4>
			<ul class="clearfix">
				<?php foreach ($andamento as $key => $value) : ?>
					<li>
						<h5><?php echo $key?></h5>
						<div class="barra-vazia" id="<?php echo $key?>">
							<span class="barra-preenchimento"></span>
							<span class="porcentagem"><?php echo $value?>%</span>
						</div>
					</li>	
				<?php endforeach ?>	
			</ul>
		
	</div>
</section> -->
<section id="localizacao">
	<h2 class="hide">Localização do Empreendimento</h2>
	<div class="mapa">
		<?php echo $empreendimento->mapa?>
	</div>
	<div class="infos-localizacao">
		<h3><?php echo $empreendimento->nome ?></h3>
		<?php echo $empreendimento->endereco ?>
	</div>
</section>
<section id="conversao">
	<div class="container">
		<h2>Gostaria de marcar uma visita?</h2>
		<p>Entre em contato com as imobiliárias locais</p>
		<!-- <div class="drop-menu">
			<h3 class="bt-imobiliarias">Imobiliárias</h3>	
		</div>

		<div class="box-imobiliarias">
			<ul>
				<li><a href="#" target="_blank">Viacava</a></li>
				<li><a href="#" target="_blank">Alice Imóveis</a></li>
				<li><a href="#" target="_blank">Projeta Imóveis</a></li>
				<li><a href="#" target="_blank">Imobiliária Rodrigues</a></li>
				<li><a href="#" target="_blank">Facilitta Imóveis</a></li>
				<li><a href="#" target="_blank">Conceito Imóveis</a></li>
				<li><a href="#" target="_blank">Edson Imóveis</a></li>
				<li><a href="#" target="_blank">BN Imóveis</a></li>
			</ul>
		</div> -->

		<span class="divisoria">Ou</span>

		<h3>Te ajudamos com qualquer dúvida</h3>
		<a href="<?php echo base_url()?>contato" class="bt-fale-conosco">Fale Conosco</a>
	</div>
</section>

