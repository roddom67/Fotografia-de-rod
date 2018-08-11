<?php
	$page = $pagina[$n];
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	
	<title><?php if($page != ''){ echo $page.' - '; }?>Fotografía de Rod</title>
    
	<meta name="description" content="<?php echo $desc[$n];?>">
    
	<meta name="keywords" content="fotografia, rod,<?php echo $keywords[$n];?>">
	<meta property="og:title" content="Fotografía de Rod" />
	<meta property="og:url" content="http://fotografiaderod.com.ar/" />
	<meta property="og:site_name" content="Fotografía de Rod"/>
	<meta property="og:description" content="<?php echo $desc[$n];?>" />
	<meta property="og:image" content="http://fotografiaderod.com.ar/imgs/logo_Rod.fw.png" />
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<div id="contenedor">
	<header>
		<?php include 'botonera.php'; ?>
	</header>