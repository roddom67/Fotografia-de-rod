<?php
	include 'includes/diccionario.php';
	include 'folders/desnudo_masculino.php';
	$n = 20;
	
	include 'includes/header.php';
?>
	<section id="galeria" class="slider">
		<div class="titulo">
			<h1 class="bordo">Desnudos ></h1>
         <h2 class="hide">Masculino</h2>
         <ul class="soloCel">
            <li class="bgbordo"><a href="#" title="Masculino" class="selected" >Masculino</a></li>
            <li><a href="desnudo_femenino.php" title="Femenino"  class="bordo" >Femenino</a></li>
         </ul>
		</div>
		 <?php
			include 'includes/galeria.php';
		  ?>
	</section>

<?php
	include 'includes/footer.php';
?>