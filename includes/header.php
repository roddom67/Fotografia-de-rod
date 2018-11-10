<?php
	$page = $pagina[$n];
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css?v=1.1.1">
	<link rel="stylesheet" href="css/flexslider.css?v=1.1.1" type="text/css" media="screen" />
	
	<title><?php if($page != ''){ echo $page.' - '; }?>Fotografía de Rod</title>
    
	<meta name="description" content="<?php echo $desc[$n];?>">
    
	<meta name="keywords" content="fotografia, rod,<?php echo $keywords[$n];?>">
	<meta property="og:title" content="Fotografía de Rod" />
	<meta property="og:url" content="http://fotografiaderod.com.ar/" />
	<meta property="og:site_name" content="Fotografía de Rod"/>
	<meta property="og:description" content="<?php echo $desc[$n];?>" />
	<meta property="og:image" content="http://fotografiaderod.com.ar/imgs/logo_Rod.fw.png" />
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W9KVKXQ');</script>
<!-- End Google Tag Manager -->
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9KVKXQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="contenedor">
	<header>
		<?php include 'botonera.php'; ?>
	</header>