<?php 
	for($a=0;$a<count($menu_art);$a++){
		$sel = "";
		if( $menu_art[$a]['num'] == $n ){ 
			$sel = ' class="selected"';
		}
?>
		<li<?php echo $sel; ?>>
			<a href="<?php echo $menu_art[$a]['href']; ?>" title="<?php echo $menu_art[$a]['titulo']; ?>">
				<?php echo $menu_art[$a]['titulo']; ?>
			</a>
		</li>
<?php
	}
?>
