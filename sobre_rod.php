<?php

	include 'includes/diccionario.php';
	$n = 2;
	
	include 'includes/header.php';
	
	include 'datos/cursos.php';
	include 'datos/ensenanza.php';
	include 'datos/exposiciones.php';
?>
	<section id="sobre" class="sobreRod">
		<article>
			<div class="titulo">
				<h1 class="naranja3">Sobre Rod ></h1>
				<h2 class="hide">Bio</h2>
			</div>
			<div class="float">
				<p>Rodolfo se inició en la fotografía desde su temprana edad. En su casa, la madre poseía una camara Canon AE-1 que sacaba fotos en diapositivas, tanto color, como blanco y negro.</p>
				<p>A los 16 años realizó un curso básico de fotografía en la Casa del Fotógrafo.</p>
				<p>En 1996 se recibe de Decorador Profesional. </p>
				<p>Se dedicó a fotografiar con la cámara de su madre y luego siguió practicando con distintos tipos de cámaras, pocket, reflex, digitales.</p>
				<p>En la actualidad, realiza trabajos de fotografía artística, tanto de bodegones como de personas. </p>
	
			 	<h3>Ensañanza</h3>
			 	<div>
			 		<ul>
			 		<?php
			 			for($a=0;$a < sizeof($ensenanza);$a++){
			 		?>
			 			<li><?php echo $ensenanza[$a]['fecha']; ?>, <strong><?php echo $ensenanza[$a]['title']; ?></strong>, <?php echo $ensenanza[$a]['detail']; ?>.</li>
					<?php
						}
					?>
			 		</ul>
			 	</div>
			 	
				<h3 class="theTitle">Exposiciones</h3>
				<div>
			 	<?php
			 		for($a=0;$a < sizeof($exposiciones);$a++){
			 	?>
			 		<h4><?php echo $exposiciones[$a]['anio']; ?></h4>
					<ul>
			 	<?php
			 			for($b=0;$b<sizeof($exposiciones[$a]['expo']);$b++){
			 	?>
			 			<li><?php echo $exposiciones[$a]['expo'][$b]['fecha']; ?>, <strong><?php echo $exposiciones[$a]['expo'][$b]['title']; ?></strong>, <?php echo $exposiciones[$a]['expo'][$b]['detail']; ?>.</li>
			 	
			 	<?php
			 			}
			 	?>
					</ul>
			 		
				<?php
					}
				?>
				</div>

				
			 	<h3 class="theTitle">Cursos realizados</h3>
			 	<div>
			 	<?php
			 		for($a=0;$a < sizeof($cursos);$a++){
			 	?>
			 		<h4><?php echo $cursos[$a]['anio']; ?></h4>
					<ul>
			 	<?php
			 			for($b=0;$b<sizeof($cursos[$a]['expo']);$b++){
			 	?>
			 			<li><?php echo $cursos[$a]['expo'][$b]['fecha']; ?>, <strong><?php echo $cursos[$a]['expo'][$b]['title']; ?></strong>, <?php echo $cursos[$a]['expo'][$b]['detail']; ?>.</li>
			 	
			 	<?php
			 			}
			 	?>
					</ul>
			 		
				<?php
					}
				?>
				</div>
			</div>
			<div id="fotorod"><img src="imgs/rodo.jpg" title ="Rod" bordero="0"></div>
		</article>
	</section>

<?php
	include 'includes/footer.php';
?>
