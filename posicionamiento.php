<?php
$abs_path = $_SERVER['DOCUMENT_ROOT'];
include("$abs_path/includes/config.php");
$page_class="Posicionamiento en buscadores ";
$city=" en Puebla";
$city_keyword=strtolower($city);
$is_keywords_city=false;
if(!$is_keywords_city){
	$city='';
}
$page_title="$brand_name | $page_class";
$page_desc="Los desarrolladores se encargan de programar funcionalidades a la medida, el nivel de expertise del equipo permite encontrar soluciones viables para cada empresa.";
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
</section>
<section class="services-info">
	<h1 class="text-center">Posicionamiento en buscadores</h1>
	<p class="services-desc">Somos una agencia que brinda gran importancia al SEO, al diseñar cada proyecto web es relevante implementar estrategias y técnicas para mejorar la posición y visibilidad orgánica de los sitios, esto quiere decir que a través de esta estrategia, se incurrirá en menores costos publicitarios, porque los esfuerzos en SEO permitirán lograr el ranking deseado en los buscadores.</p>
	<p class="services-desc">Lo realizamos a través de técnicas como son optimización de carga, buen uso de las palabra clave y tres pilares que se explican a continuación.</p>
	<p class="services-desc">Para lograr el posicionamiento SEO de tu sitio web, nos centramos en tres pilares:</p>
	<h3 class="services-desc">1.- La experiencia del usuario</h3>
	<p class="services-desc">Es uno de los factores más importantes con gran peso con el paso del tiempo, consiste en que los usuarios pasen tiempo en la web, al interactuar con el contenido, tu sitio web convierte, google lo toma muy en cuenta para posicionar un sitio.</p>
	<h3 class="services-desc">2.- Optimización Web</h3>
	<p class="services-desc">Es uno de los factores más importantes con gran peso con el paso del tiempo, consiste en que los usuarios pasen tiempo en la web, al interactuar con el contenido, tu sitio web convierte, google lo toma muy en cuenta para posicionar un sitio.</p>
	<h3 class="services-desc">3.- Autoridad de la página</h3>
	<p class="services-desc">El contenido creado debe aportar valor que los usuarios compartan de manera natural.</p>
	<p class="services-desc">En resumen, hay dos formas de posicionar un sitio web, uno es a través del SEO y otra forma mucho más rápida y orientada al mercado meta, es a través de Google Ads, estrategia publicitaria efectiva de resultados casi inmediatos. Administramos campañas de Google Ads, logramos posicionar un sitio web sin importar el tiempo que lleve en línea, con la finalidad de atraer, cautivar y convertir visitantes en prospectos reales. </p>
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
</body>
</html>