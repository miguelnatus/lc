<?php
	return;
?>
<html>
 <head>
 <title>Lista de imagens</title>
 </head>
 <body>
 <p>Lista de imagens do diretorio</p>
	<?php
	// $dirname = "public/imgs/empreendimentos/caracteristicas/";
	$images = glob("*.png");
	// print_r ($images);

	foreach($images as $image) {
		echo '<img src="'.$image.'" /><br />';
	}
	?>
</body>
</html>