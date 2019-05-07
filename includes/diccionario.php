<?php

	$pagina = array();
	$desc = array();
	$keywords = array();
	$folder = array();
	$menu_art = array();
	$files = array();
	
	// HOME - 0
	
	$pagina[0]= "";
	$cantidad[0] = "";
	$desc[0] = 'Fotografía de Rod. Fotos artísticas de desnudo, retratos, macro y naturaleza. WhatsApp: +54 9 11 4087 3213. Books, Sesiones artísticas.';
	$keywords[0] = 'nude, desnudo, art, arte, macro, photography, books, sesiones, sesión, ';
	$folder[0] = '';
	$parrafo[0] = '<strong>Fotografía de Rod</strong>. Muestra fotográfica de los trabajos realizados por <strong>Rodolfo Dominguez</strong>. <br>
	Rodolfo se destaca por realizar <em>fotografías de desnudo femenino y masculino</em>, teniendo en cuenta la iluminación y el tipo de cuerpo y así encontrar la belleza en cada uno de ellos.<br>
	Se inspira en la <em>naturaleza</em> para crear las imágenes de <em>macro fotografía</em>, o en elementos que le llame la atención y para crear un universo distinto al que vemos.<br>
	En los talleres de <em>Arte y Fotografía</em> dictados en Ada Sacchi Cursos, genera imágenes que deslumbran al ojo con su particular mirada.<br>
	En sus <em>retratos</em> podrás descubrir a la persona que hay detrás de cada mirada.';
		
	// Contacto - 1
	$pagina[1]= "Contacto";
	$cantidad[1] = '';
	$desc[1] = 'Contacto > Fotografía de Rod. Contactate para hacerte una sesión de fotos, por teléfono o WhtasApp. Respondo a la brevedad posible.';
	$keywords[1] = 'contact, contacto, sesiones, sesión, books, fotos, photos, whatsapp';
	$folder[1] = '';
	$parrafo[1] = '<strong>Fotografía de Rod</strong>. Contactate para hacerte una <em>sesión de fotos de book</em> o de <em>desnudo artístico</em>. Podés comunicarte por teléfono o Whatsapp y coordinamos día y horario para poder realizarla. También doy <strong>clases de fototrafía básica</strong>. Si estás interesado, podemos arreglar horarios. Tené en cuenta que son 12 clases de hora y media cada una. Teóricas prácticas. Tu pregunta es bienvenida.';
	
	// Sobre - 2
	$pagina[2]= "Sobre Rod";
	$cantidad[2] = '';
	$desc[2] = 'Sobre Rod > Fotografía de Rod. Conocé la experiencia de Rod en la fotografía. Exposiciones, Cursos, Talleres, Enseñanzas.';
	$keywords[2] = 'fotografía, photography, teaching, enseñanza, cursos, talleres, exposiciones, expositions';
	$folder[2] = '';
	$parrafo[2] = '';
	
	// Menu Arte
	
	$menu_art = array(
		array(
			'num' => '101',
			'href' => 'arte1.php',
			'titulo' => 'Afrodita'
		),
		array(
			'num' => '102',
			'href' => 'arte2.php',
			'titulo' => 'Rotari'
		),
		array(
			'num' => '103',
			'href' => 'arte3.php',
			'titulo' => 'Desnudología'
		),
		array(
			'num' => '104',
			'href' => 'arte4.php',
			'titulo' => 'La isla bajo el mar'
		),
		array(
			'num' => '105',
			'href' => 'arte5.php',
			'titulo' => 'Sin rostro'
		)
	);
	
	
	$home = array();
	
	$home = array(
		array(
			'class' => '',
			'href' => 'retratos.php',
			'title' => 'Retratos',
			'img' => 'imgs/home/01.jpg'
		),
		array(
			'class' => '',
			'href' => 'naturaleza.php',
			'title' => 'Naturaleza y Arquitectura',
			'img' => 'imgs/home/02.jpg'
		),
		array(
			'class' => '',
			'href' => 'arte1.php',
			'title' => 'Arte y Fotografía - Afrdota',
			'img' => 'imgs/home/03.jpg'
		),
		array(
			'class' => '',
			'href' => 'desnudo_masculino.php',
			'title' => 'Desnudo Masculino',
			'img' => 'imgs/home/04.jpg'
		),
		array(
			'class' => '',
			'href' => 'desnudo_femenino.php',
			'title' => 'Desnudo Femenino',
			'img' => 'imgs/home/05.jpg'
		),
		array(
			'class' => 'hide480',
			'href' => 'arte2.php',
			'title' => 'Arte y Fotografía - Rotari',
			'img' => 'imgs/home/06.jpg'
		),
		array(
			'class' => 'hide480',
			'href' => 'macro.php',
			'title' => 'Macro',
			'img' => 'imgs/home/07.jpg'
		),
		array(
			'class' => 'hide320',
			'href' => 'arte3.php',
			'title' => 'Arte y Fotografía - Desnudología',
			'img' => 'imgs/home/08.jpg'
		),
		array(
			'class' => 'show2',
			'href' => 'arte4.php',
			'title' => 'Arte y Fotografía - La isla bajo el mar',
			'img' => 'imgs/home/09.jpg'
		),
		array(
			'class' => 'show3',
			'href' => 'arte5.php',
			'title' => 'Arte y Fotografía - Sin rostro',
			'img' => 'imgs/home/10.jpg'
		),
		array(
			'class' => 'show3',
			'href' => 'retratos.php',
			'title' => 'Retratos',
			'img' => 'imgs/home/11.jpg'
		),
		array(
			'class' => 'show3',
			'href' => 'desnudo_femenino.php',
			'title' => 'Desnudo Femenino',
			'img' => 'imgs/home/12.jpg'
		),
		array(
			'class' => 'show3',
			'href' => 'arte2.php',
			'title' => 'Arte y Fotografía - Rotari',
			'img' => 'imgs/home/13.jpg'
		),
		array(
			'class' => 'show2',
			'href' => 'desnudo_masculino.php',
			'title' => 'Desnudo Masculino',
			'img' => 'imgs/home/14.jpg'
		),
		array(
			'class' => 'show2',
			'href' => 'arte1.php',
			'title' => 'Arte y Fotografía - Afrodita',
			'img' => 'imgs/home/15.jpg'
		),
		array(
			'class' => 'show2',
			'href' => 'macro.php',
			'title' => 'Macro',
			'img' => 'imgs/home/16.jpg'
		)
	);
	
		
	
				
?>

