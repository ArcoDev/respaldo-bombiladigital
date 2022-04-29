<?php
$abs_path = $_SERVER['DOCUMENT_ROOT'];
include("$abs_path/includes/config.php");
$page_class="home loading";
$city=" en Puebla";
$city_keyword=strtolower($city);
$is_keywords_city=false;
if(!$is_keywords_city){
	$city='';
}
$page_title="Desarrollo de Páginas Web Profesionales$city | Marketing Digital | E-commerce | $brand_name";
$page_desc="Bombilla Digital es una agencia creativa formada por un equipo de profesionales con más de 8 años de experiencia, ayudamos a nuestros clientes a ser relevantes en el mundo digital y a tener presencia online para lograr sus objetivos comerciales.";
$keywords_city=array(
	'paginas web',
	'paginas web profesionales',
	'desarrollo web',
	'agencia de diseño web',
	'agencia de marketing',
	'marketing digital',
	'pagina web',
	'diseño de paginas web',
	'diseño web',
	'programacion de paginas web',
	'seo',
	'posicionamiento web',
	'ecommerce',
	'administracion de google ads',
	'google ads',
);
$page_keywords="bombilla digital, bombilladigital, agencia bombilla digital, agencia digital, ";
$page_keywords.=implode(", ",$keywords_city);
if($is_keywords_city){
	$page_keywords.=", ";
	$page_keywords.=implode(" $city_keyword, ",$keywords_city);
	$page_keywords.=$city_keyword;
}
$page_url="$http_s://$domain";
$page_img="$http_s://$domain/images/assets/share/share-home.png";
$lang="es";
$locale="es_ES";
$animation_type="";
$animation_time="";
if($is_mobile){
	$animation_type="wow fadeInUp";
	$animation_time="2s";
}
?>
<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>
<?php include("$abs_path/includes/head.php");?>
</head>
<body class="<?=$page_class?>" id="skrollr-body-tmp">
<?php include("$abs_path/includes/tags-init-body.php");?>
<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "WebPage",
	"name": "Bombilla Digital",
	"image": "https://www.bombilladigital.com/images/assets/share/share-home.png",
	"description": "Bombilla Digital es una agencia creativa formada por un equipo de profesionales",
	"author": {
		"@type": "Corporation",
		"name": "Bombilla Digital",
		"description": "Bombilla Digital es una agencia creativa formada por un equipo de profesionales",
		"url": "https://www.bombilladigital.com",
		"contactPoint": [
			{
				"@type": "ContactPoint",
				"telephone": "+52 (221) 229 4940",
				"contactType": "customer service"
			}
		],
		"Brand": {
			"@type": "Brand",
			"name": "Bombilla Digital",
			"url": "https://www.bombilladigital.com",
			"logo": "https://www.bombilladigital.com/images/assets/logo.png"
		}
	}
}
</script>
<div itemscope="" itemtype="http://schema.org/WebPage" style="display:none">
	<span itemprop="description">Bombilla Digital es una agencia creativa formada por un equipo de profesionales</span>
	<span itemprop="image">https://www.bombilladigital.com/images/assets/share/share-home.png</span>
	<span itemprop="name">Bombilla Digital</span>
	<span itemprop="url">https://www.bombilladigital.com</span>
	<div itemprop="author" itemscope="" itemtype="http://schema.org/Corporation" >
		<span itemprop="description">Bombilla Digital es una agencia creativa formada por un equipo de profesionales</span>
		<span itemprop="image">https://www.bombilladigital.com/images/assets/share/share-home.png</span>
		<a itemprop="url" href="https://www.bombilladigital.com"><span itemprop="name">Bombilla Digital</span></a>
		<div itemprop="contactPoint" itemscope="" itemtype="http://schema.org/ContactPoint">
			<span itemprop="telephone">+52 (221) 229 4940</span>
			<span itemprop="contactType">customer service</span>
		</div>
		<div itemprop="Brand" itemscope="" itemtype="http://www.schema.org/Brand">
			<span itemprop="name">Bombilla Digital</span>
			<span itemprop="url">https://www.bombilladigital.com</span>
			<span itemprop="logo">https://www.bombilladigital.com/images/assets/logo.png</span>
		</div>
	</div><!--Corporation-->
</div><!--Web Page-->
<!-- Header -->
<?php include("$abs_path/includes/$lang/header-second.php");?>
<!-- / End Header -->
<section class="services">
    <div class="circle">
        <p>
            Bombilla<span>Digital</span>
        </p>
    </div>
    <div class="title-services">
        <h2>Nuestros Servicios</h2>
        <div class="icon-flex">
            <svg>
                <use xlink:href="#svg-icon-web"></use>
            </svg>
            <h3>Diseño</h3>
        </div>
        <p>Tu tienda online con un diseño personalizado, alineado a tu marca e identidad corporativa.</p>
    </div>
    <div class="footer-services">
        <div class="icon-flex">
            <svg>
                <use xlink:href="#svg-icon-web"></use>
            </svg>
            <h3>Programación</h3>
        </div>
        <p>Tu tienda online alineada a tus objetivos comerciakes. Cada compañia es diferente, no hay un estándar,
            programamos la funcionalidad a la medida.</p>
    </div>
</section>

<!-- Footer -->
<?php include("$abs_path/includes/$lang/footer.php");?>
<!-- / End Footer -->

<!-- SVG Sprite -->
<?php include("$abs_path/includes/svg-sprite.php");?>
<!-- / End SVG Sprite -->
<script type="text/javascript">
var main_slider = document.getElementById("main-slider");
main_slider.style.height = window.innerHeight + 'px';
</script>
<script type="text/javascript" src="/js/general-scripts.min.js?v=1435"></script>
<script type="text/javascript" src="/js/home.min.js?v=1435"></script>
<?php if($is_mobile){ ?>
<script type="text/javascript" src="/js/animation-mobile.min.js?v=1435"></script>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
	var typedTitle = new Typed('.animaTitle', {
		strings: [
			"Tu pagina web",
			"Estrategía Digítal",
			"Programacíon y soluciones a la medida",
			"Creamos tu tienda online"
		],
		typeSpeed: 80,
		backSpeed: 20,
		// loop: true
	});
	// var typedDesc = new Typed('.animaDesc', {
	// 	strings: [
	// 		"Estás a un paso de tener la herramienta de presencia online y de ventas más importante.",
	// 		"Un plan ideado para lograr tus objetivos comerciales.",
	// 		"Para empresas",
	// 		"Llega a un mercado más amplio."
	// 	],
	// 	typeSpeed: 10,
	// 	backSpeed: 5,
	// 	loop: true
	// });
</script>
</body>
</html>