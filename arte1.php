<?php
	include 'includes/diccionario.php';
	include 'folders/arte1.php';
	$n = 101;
	
	include 'includes/header.php';
?>
	<section id="galeria" class="slider">
		<div class="titulo">
			<h1 class="naranja2">Arte y Fotografía ></h1>
      	<h2 class="hide"><?php echo $pagina[$n]; ?></h2>
			<ul class="soloCel">
				<?php include 'includes/menu.php'; ?>
			</ul>
		</div>
		<?php
			include 'includes/galeria.php';
		  ?>
	</section>

<?php
	include 'includes/footer.php';
?>