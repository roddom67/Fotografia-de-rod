<?php

	$carpeta = $folder[$n];
	$cant = count($files[$n]);
	$images = '';
	$images = $files[$n];
	echo $images[0]['alt'];
?>

<div class="galeria">
	<!-- Slide -->
	<div id="slider" class="flexslider">
		 <ul class="slides galerie">
		<?php
			$image='';
			for($a=0;$a<$cant;$a++){
				
	  			$image="imgs/".$carpeta."/".$images[$a]['src'].".jpg";
		?>
			<li>
				<strong>
					<img src="<?php echo $image; ?>" alt="<?php echo $images[$a]['alt']; ?>" />
				</strong>
			<?php
				if(isset($images[$a]['nom']) && $images[$a]['nom'] != ''){
			?>
				<em>Mod.: <?php echo $images[$a]['nom']; ?></em>
			<?php
				}
			?>
			</li>
		<?php
			}
		?>
		 </ul>
	  </div>
	  <div id="carousel" class="flexslider">
		 <ul class="slides">
		<?php
			$image='';
			for($a=0;$a<$cant;$a++){
	  			$image="imgs/".$carpeta."/".$images[$a]['src'].".jpg";
		?>
    		<li>
        		<p><img src="<?php echo $image; ?>" alt="Thumbnail <?php echo $images[$a]['alt']; ?>" /></p>
        		<span><?php echo $a; ?>/<strong><?php echo $cant; ?></strong></span>
    		</li>
		<?php
			}
		?>
		 </ul>
	  </div>
	  <!-- Fin Slide -->
	  <?php
	  	if(isset($linkBlog[$n])){
	  		echo '<a href="'.$linkBlog[$n].'" target="_blank" title="Ver más imágenes" class="vermas">Ver más imágenes</a>';	  	
	  	}
	  ?>

 </div>
