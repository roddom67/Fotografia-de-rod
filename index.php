<?php
	include 'includes/diccionario.php';
	$n = 0;
	
	include 'includes/header.php';
?>

	<section id="home">
		<ul>
		<?php
			$li = '';
			for($a=0; $a < count($home);$a++){
				$li .= '<li class="'.$home[$a]['class'].'" >';
				$li .= '<a href="'.$home[$a]['href'].'" title="'.$home[$a]['title'].'">';
				$li .= '<img src="'.$home[$a]['img'].'" alt="'.$home[$a]['title'].'" >';
				$li .= '</a>';
				$li .=  '</li>';
			}
			echo $li;
		?>
		</ul>
	</section>

<?php
	include 'includes/footer.php';
?>