<?php
	include 'includes/diccionario.php';
	include 'folders/desnudo_femenino.php';
	$n = 21;
	
	include 'includes/header.php';
?>
	<section id="galeria" class="slider">
		<div class="titulo">
			<h1 class="bordo">Desnudos ></h1>
      	<h2 class="hide">Femenino</h2>
      	<ul class="soloCel">
        		<li><a href="desnudo_masculino.php" title="Masculino" class="bordo" >Masculino</a></li>
        		<li class="bgbordo"><a href="#" title="Femenino"  class="selected" >Femenino</a></li>
      	</ul>
		</div>
		<?php
			include 'includes/galeria.php';
		  ?>
	</section>

<?php
	include 'includes/footer.php';
?>