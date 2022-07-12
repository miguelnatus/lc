<!doctype html>

<html lang="pt-br">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
  <meta name="description" content="<?php echo $descricao?>">
  <meta name="robots" content="index,follow">
  <meta name="author" content="Invento Casa Criativa">

  <meta property="og:title" content="<?php echo $title?> - LC Incorporadora">
  <meta property="og:description" content="<?php echo $descricao?>">
  <meta property="og:url" content="">
  <meta property="og:image" content="<?php echo $imagem?>">	

  <title><?php echo $title?> - LC Incorporadora</title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>public/imgs/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>public/imgs/favicon-16x16.png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

  <!-- Styles and Scripts-->
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/plugins/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/plugins/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/min/base.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/plugins/lightbox.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/min/styles.min.css">
  <!-- Page Styles -->
  <link rel="stylesheet" href="<?php _load($file,'css')?>">
  <!-- Custom FD Styles -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/css/custom_fd.css?v=211207d">

  <script src="<?php echo base_url()?>public/js/plugins/jquery-1.12.4.min.js"></script>
  <script src="<?php echo base_url()?>public/js/plugins/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>public/js/plugins/lightbox.js"></script>
  <script src="<?php echo base_url()?>public/js/min/application.min.js"></script>
  <!-- Page Scripts -->
  <script src="<?php _load($file,'js')?>"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-83VVH96PNH"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-83VVH96PNH');
	gtag('config', 'UA-187474502-1');
	
  </script>
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '336927034029054');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=336927034029054&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->

</head>

<body id="<?php echo $file ?>">

	<header class="clearfix">
		<div class="brand">
			<a href="<?php echo base_url()?>" id="logo" title="LC Incorporadora - Início">

				<?php 
				
				if ($file == "home" || $file == "sobre-nos"){
					$logo = "branco";
				} else {
					$logo = "azul";
				}
				?>

				<img src="<?php echo base_url()?>public/imgs/estrutura/logo-<?php echo $logo; ?>.png" alt="LC Incorporadora">

			</a>
			<p id="slogan"><!-- visível só na home -->
				O compromisso é a base <br>
				do nosso negócio		
			</p>
		</div>
		<a href="#navegacao" id="mobile-menu-icon" class="ir">menu</a>
		<nav id="navegacao" class="">
			<ul class="clearfix">
				<li><a href="<?php echo base_url()?>">Início</a></li>
				<li><a href="<?php echo base_url()?>empreendimentos">Empreendimentos</a></li>
				<li><a href="<?php echo base_url()?>obras">Obras <br>Realizadas</a></li>
				<li><a href="<?php echo base_url()?>servicos">Serviços</a></li>
				<li><a href="<?php echo base_url()?>sobre-nos">Sobre <br>Nós</a></li>
				<li><a href="<?php echo base_url()?>contato">Contato</a></li>
			</ul>
		</nav>
	</header>
