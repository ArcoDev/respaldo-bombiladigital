<?php
$abs_path = $_SERVER['DOCUMENT_ROOT'];
include("$abs_path/includes/config.php");
$page_class="Quienes Somos";
$city=" en Puebla";
$city_keyword=strtolower($city);
$is_keywords_city=false;
if(!$is_keywords_city){
	$city='';
}
$page_title="$brand_name | $page_class";
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
				"contactPoint": [{
					"@type": "ContactPoint",
					"telephone": "+52 (221) 229 4940",
					"contactType": "customer service"
				}],
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
		<span itemprop="description">Bombilla Digital es una agencia creativa formada por un equipo de
			profesionales</span>
		<span itemprop="image">https://www.bombilladigital.com/images/assets/share/share-home.png</span>
		<span itemprop="name">Bombilla Digital</span>
		<span itemprop="url">https://www.bombilladigital.com</span>
		<div itemprop="author" itemscope="" itemtype="http://schema.org/Corporation">
			<span itemprop="description">Bombilla Digital es una agencia creativa formada por un equipo de
				profesionales</span>
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
		</div>
		<!--Corporation-->
	</div>
	<!--Web Page-->
	<!-- Header -->
	<?php include("$abs_path/includes/$lang/header-second.php");?>
	<!-- / End Header -->

        
			<section class="home__about">
				<div class="anchor" id="quienes-somos"></div>
				<div class="container">
					<h2 class="animation-scroll-text <?=$animation_type?>"
						data-init-animation="transform:translateX(-50px);opacity:0"
						data-end-animation="transform:translateX(0px);opacity:1">¿Quiénes somos?</h2>
					<p class="animation-scroll-text <?=$animation_type?>"
						data-init-animation="transform:translateY(50px);opacity:0"
						data-end-animation="transform:translateY(0px);opacity:1">
						Bombilla Digital es una agencia creativa formada por un equipo de profesionales con más de 8
						años de experiencia, ayudamos a nuestros clientes a ser relevantes en el mundo digital y a tener
						presencia online para lograr sus objetivos comerciales.
					</p>
					<p class="animation-scroll-text <?=$animation_type?>"
						data-init-animation="transform:translateY(50px);opacity:0"
						data-end-animation="transform:translateY(0px);opacity:1">
						Nuestra metodología brinda la certeza de implementar proyectos con éxito.
					</p>
					<p class="animation-scroll-text <?=$animation_type?>"
						data-init-animation="transform:translateY(50px);opacity:0"
						data-end-animation="transform:translateY(0px);opacity:1">
						Nos apasiona desarrollar ideas disruptivas e innovadoras, contribuyendo a posicionar a México
						como líder tecnológico.
					</p>
					<div class="about--wrapper">
						<div class="about__item <?=$animation_type?>">
							<div class="about__img">
								<picture>
									<source srcset="/images/content/ramiro-bombilla.webp" type="image/webp">
									<source srcset="/images/content/ramiro-bombilla.jpg" type="image/jpeg">
									<img src="/images/content/ramiro-bombilla.webp" alt="Ramiro García">
								</picture>
								<span class="orbit">
									<span class="circle">
										<span class="circle2">
											<span class="circle3"></span>
										</span>
									</span>
								</span>
							</div>
							<h4 class="about__title">Ramiro García</h4>
						</div>
						<div class="about__item <?=$animation_type?> bttm">
							<div class="about__img">
								<picture>
									<source srcset="/images/content/lilia-bombilla.webp" type="image/webp">
									<source srcset="/images/content/lilia-bombilla.jpg" type="image/jpeg">
									<img src="/images/content/lilia-bombilla.webp" alt="Lilia Fernández">
								</picture>
								<span class="orbit reverse">
									<span class="circle reverse">
										<span class="circle2 reverse">
											<span class="circle3"></span>
										</span>
									</span>
								</span>
							</div>
							<h4 class="about__title">Lilia Fernández</h4>
						</div>
						<div class="about__item <?=$animation_type?>">
							<div class="about__img">
								<picture>
									<source srcset="/images/content/han-bombilla.webp" type="image/webp">
									<source srcset="/images/content/han-bombilla.jpg" type="image/jpeg">
									<img src="/images/content/han-bombilla.webp" alt="Han the Pug">
								</picture>
								<span class="orbit">
									<span class="circle">
										<span class="circle2">
											<span class="circle3"></span>
										</span>
									</span>
								</span>
							</div>
							<h4 class="about__title">Han the Pug</h4>
						</div>
						<div class="about__item <?=$animation_type?> bttm">
							<div class="about__img">
								<picture>
									<source srcset="/images/content/caro-bombilla.webp" type="image/webp">
									<source srcset="/images/content/caro-bombilla.jpg" type="image/jpeg">
									<img src="/images/content/caro-bombilla.webp" alt="Carolina">
								</picture>
								<span class="orbit orbit2">
									<span class="circle">
										<span class="circle2">
											<span class="circle3"></span>
										</span>
									</span>
								</span>
							</div>
							<h4 class="about__title">Carolina</h4>
						</div>
						<div class="about__item <?=$animation_type?>">
							<div class="about__img">
								<picture>
									<source srcset="/images/content/mario-bombilla.webp" type="image/webp">
									<source srcset="/images/content/mario-bombilla.jpg" type="image/jpeg">
									<img src="/images/content/mario-bombilla.webp" alt="Mario Olivares">
								</picture>
								<span class="orbit reverse">
									<span class="circle reverse">
										<span class="circle2 reverse">
											<span class="circle3"></span>
										</span>
									</span>
								</span>
							</div>
							<h4 class="about__title">Mario Olivares</h4>
						</div>
					</div>
					<div class="row-flex">
						<div class="col-lg-6">
							<h2 class="text-center">Misión</h2>
							<p>Contribuir con los objetivos de nuestros clientes ofreciendo soluciones tecnologicas y
								digitales a la medida que generen resultados.</p>
						</div>
						<div class="col-lg-6">
							<h2 class="text-center">Visión</h2>
							<p>Ser una empresa que destaque a nivel nacional por la eficacia de nuestros servicios, y
								por la innovación de nuevos desarrollo y plataformas digitales.</p>
						</div>
						<div class="col-lg-12">
							<h2 class="text-center">Hablidades del Equipo</h2>
							<div class="row-flex">
								<div class="col-lg-3">
									<h3>Lenguajes de programación</h3>
									<ul>
										<li>PHP</li>
										<li>JAVASCRIPT</li>
									</ul>
								</div>
								<div class="col-lg-3">
									<h3>Diseño gráfico UX/UI</h3>
								</div>
								<div class="col-lg-3">
									<h3>Diseño de software</h3>
								</div>
								<div class="col-lg-3">
									<h3>Plataformas que gestionamos</h3>
									<ul>
										<li>VTEX</li>
										<li>SHOPIFY</li>
										<li>MAGENTO</li>
										<li>OPENCART</li>
										<li>WOOCOMERCE</li>
										<li>WORDPRESS</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
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
		});
	</script>
</body>

</html>