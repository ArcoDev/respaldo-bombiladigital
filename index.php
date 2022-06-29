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
	<style>
		span.typed-cursor {
			display: none !important;
		}
	</style>
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
	<?php include("$abs_path/includes/$lang/header.php");?>
	<!-- / End Header -->

	<div id="wrapper">
		<main>
			<section class="main-slider">
				<div id="main-slider">
					<div class="canvas-wrap">
						<div class="container">
							<div class="canvas-content">
								<h2 class="animaTitle"></h2>
								<p class="animaDesc">Estás a un paso de tener la herramienta de presencia online y de
									ventas más importante.</p>
								<a href="#contacto" class="go-to btn-flat secondary">Contáctanos</a>
							</div>
							<div class="canvas-img">
								<picture>
									<source srcset="/images/content/main-slider/bombilla-digital-01.webp"
										type="image/webp">
									<source srcset="/images/content/main-slider/bombilla-digital-01.png"
										type="image/png">
									<img src="/images/content/main-slider/bombilla-digital-01.webp"
										alt="<?=$brand_name?>">
								</picture>
							</div>
						</div>
						<div id="canvas" class="gradient"></div>
					</div>
				</div>
			</section>

			<!-- <section class="home__services">
				<div class="anchor" id="servicios"></div>
				<div class="container">
					<div class="<?=$animation_type?>" data-200="transform:translateY(50px);opacity:0"
						data-700="transform:translateY(0px);opacity:1">
						<h1>Servicios para empresas</h1>
					</div>
					<div class="service--wrapper">
						<div class="row-flex vc">
							<div class="col-lg-6 img">
								<div class="service__img <?=$animation_type?>">
									<picture>
										<source srcset="/images/content/services/web.webp" type="image/webp">
										<source srcset="/images/content/services/web.jpg" type="image/jpeg">
										<img src="/images/content/services/web.webp"
											alt="Diseño y Desarrollo Web | <?=$brand_name?>">
									</picture>
								</div>
							</div>
							<div class="col-lg-5 offset-lg-1">
								<div class="service__text--wrapper <?=$animation_type?>" data-text="right">
									<svg class="service__icon">
										<use xlink:href="#svg-icon-web"></use>
									</svg>
									<h2 class="service__title">Diseño y<br>Desarrollo Web</h2>
									<div class="service__text">
										<p>Se trata de hacer un sitio Web con un diseño atractivo, que sea entendible
											para Google y a la vez amigable e interesante para el usuario.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="service--wrapper">
						<div class="row-flex vc">
							<div class="col-lg-5 service__text-right">
								<div class="service__text--wrapper <?=$animation_type?>" data-text="left">
									<svg class="service__icon">
										<use xlink:href="#svg-icon-seo"></use>
									</svg>
									<h2 class="service__title">Posicionamiento<br>en Buscadores</h2>
									<div class="service__text">
										<p>Nos especializamos en la administración de Campañas de posicionamiento con
											Google Ads, siendo esta estrategia una de las más eficaces en publicidad
											digital para conseguir nuevos clientes y prospectos.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 offset-lg-1 img">
								<div class="service__img <?=$animation_type?>">
									<picture>
										<source srcset="/images/content/services/seo.webp" type="image/webp">
										<source srcset="/images/content/services/seo.jpg" type="image/jpeg">
										<img src="/images/content/services/seo.webp"
											alt="Posicionamiento en Buscadores | <?=$brand_name?>">
									</picture>
								</div>
							</div>
						</div>
					</div>
					<div class="service--wrapper">
						<div class="row-flex vc">
							<div class="col-lg-5 img">
								<div class="service__img <?=$animation_type?>">
									<picture>
										<source srcset="/images/content/services/hosting.webp" type="image/webp">
										<source srcset="/images/content/services/hosting.jpg" type="image/jpeg">
										<img src="/images/content/services/hosting.webp"
											alt="Dominio y Hospedaje Web | <?=$brand_name?>">
									</picture>
								</div>
							</div>
							<div class="col-lg-6 offset-lg-1">
								<div class="service__text--wrapper <?=$animation_type?>" data-text="right">
									<svg class="service__icon">
										<use xlink:href="#svg-icon-hosting"></use>
									</svg>
									<h2 class="service__title">Dominio y <br>Hospedaje Web</h2>
									<div class="service__text">
										<p>Nos aseguramos de que tu sitio web siempre funcione adecuadamente, mantente
											online.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="service--wrapper">
						<div class="row-flex vc">
							<div class="col-lg-7 service__text-right">
								<div class="service__text--wrapper <?=$animation_type?>" data-text="left">
									<svg class="service__icon">
										<use xlink:href="#svg-icon-consultoria"></use>
									</svg>
									<h2 class="service__title">Consultoría</h2>
									<div class="service__text">
										<p>Partimos de un diagnóstico para diseñar la estrategia más adecuada y
											necesaria para tu negocio o empresa, implementamos acciones que agregan
											valor.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 offset-lg-1 img">
								<div class="service__img <?=$animation_type?>">
									<picture>
										<source srcset="/images/content/services/consultoria.webp" type="image/webp">
										<source srcset="/images/content/services/consultoria.jpg" type="image/jpeg">
										<img src="/images/content/services/consultoria.webp"
											alt="Consultoría | <?=$brand_name?>">
									</picture>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="callout callout01">
				<div class="container--wide">
					<h2 class="quote">
						<svg>
							<use xlink:href="#svg-icon-quote-open"></use>
						</svg>
						Te acompañamos en tu proceso de innovación
						<svg>
							<use xlink:href="#svg-icon-quote-close"></use>
						</svg>
					</h2>
				</div>
			</section> -->
			<section class="home__how">
				<div class="container">
					<h2 class="animation-scroll-text <?=$animation_type?>"
						data-init-animation="transform:translateX(-50px);opacity:0"
						data-end-animation="transform:translateX(0px);opacity:1">¿Cómo lo hacemos?</h2>
					<div class="how--wrapper">
						<div class="how__item--wrapper <?=$animation_type?>"
							data-init-animation="transform:translate(-250px, 250px);opacity:0"
							data-end-animation="transform:translate(0px, 0px);opacity:1">
							<div class="how__item">
								<svg class="how__icon" alt="Asesoría | <?=$brand_name?>">
									<use xlink:href="#svg-icon-asesoria"></use>
								</svg>
								<h3 class="how__title">Asesoría</h3>
								<p>Tes escuchamos y asesoramos para brindarte la solución más adecuada.</p>
							</div>
						</div>
						<div class="how__item--wrapper <?=$animation_type?>"
							data-init-animation="transform:translate(0px, 250px);opacity:0"
							data-end-animation="transform:translate(0px, 0px);opacity:1">
							<div class="how__item active">
								<svg class="how__icon" alt="Empresa en línea | <?=$brand_name?>">
									<use xlink:href="#svg-icon-online"></use>
								</svg>
								<h3 class="how__title">Empresa en línea</h3>
								<p>Comunicación virtual y ágil para desarrollar tu página web.</p>
							</div>
						</div>
						<div class="how__item--wrapper <?=$animation_type?>"
							data-init-animation="transform:translate(250px, 250px);opacity:0"
							data-end-animation="transform:translate(0px, 0px);opacity:1">
							<div class="how__item">
								<svg class="how__icon" alt="SEO | <?=$brand_name?>">
									<use xlink:href="#svg-icon-seo"></use>
								</svg>
								<h3 class="how__title">TE POSICIONAMOS EN BUSCADORES</h3>
								<p>Generarás prospectos desde el inicio</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="home__plans">
				<div class="anchor" id="planes"></div>
				<div class="home__plans-bg">
					<div id="canvas2"></div>
				</div>
				<div class="container">
					<h2 class="animation-scroll-text <?=$animation_type?>"
						data-init-animation="transform:translateY(50px);opacity:0"
						data-end-animation="transform:translateY(0px);opacity:1">Nuestros<br>planes estratégicos</h2>
					<div class="plan--wrapper">
						<div class="plan__item--wrapper <?=$animation_type?>"
							data-init-animation="transform:translate(-250px, 250px);opacity:0"
							data-end-animation="transform:translate(0px, 0px);opacity:1">
							<div class="plan__item">
								<h3 class="plan__title">Página de aterrizaje</h3>
								<ul class="plan__list">
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Dominio anual .com o .mx</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Hospedaje anual.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Certificado de seguridad.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>3 cuentas de correo electrónico.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Diseño y producción de una sola sección informativa.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Formulario de contacto.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Sitio web móvil (responsivo o adaptable).</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Burbuja de chat whastApp business.</li>
								</ul>
								<div class="plan__samples">
									<p><svg>
											<use xlink:href="#svg-icon-star"></use>
										</svg>Ejemplo de algunos proyectos</p>
									<ul class="plan__sample-list">
										<li><a href="#" target="_blank">www.brans.com.mx</a></li>
										<li><a href="#" target="_blank">Capacitación en bienes raíces</a></li>
										<li><a href="#" target="_blank">www.kalisal.com</a></li>
									</ul>
								</div>
								<div class="plan__cta">
									<a href="<?=$wp['link']?>" class="btn-flat secondary" target="_blank">Hablar con un
										asesor</a>
								</div>
							</div>
						</div>
						<div class="plan__item--wrapper <?=$animation_type?>"
							data-init-animation="transform:translate(0px, 250px);opacity:0"
							data-end-animation="transform:translate(0px, 0px);opacity:1">
							<div class="plan__item">
								<h3 class="plan__title c-primary">Página corporativa</h3>
								<ul class="plan__list">
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Dominio anual .com o .com.mx</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Hospedaje anual.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Certificado de seguridad.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>15 cuentas de correo electrónico empresarial.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Diseño y producción de hasta 5 secciones.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Formulario de contacto.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Sitio web responsivo.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Burbuja de chat WhatsApp Business.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Chat en línea.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Geolocalización.</li>
								</ul>
								<div class="plan__samples">
									<p><svg>
											<use xlink:href="#svg-icon-star"></use>
										</svg>Ejemplo de algunos proyectos</p>
									<ul class="plan__sample-list">
										<li><a href="#" target="_blank">www.avantiviajes.com.mx</a></li>
										<li><a href="#" target="_blank">www.solog.com.mx</a></li>
										<li><a href="#" target="_blank">www.htecnoseg.com</a></li>
									</ul>
								</div>
								<div class="plan__cta">
									<a href="<?=$wp['link']?>" class="btn-flat primary" target="_blank">Hablar con un
										asesor</a>
								</div>
							</div>
						</div>
						<div class="plan__item--wrapper <?=$animation_type?>"
							data-init-animation="transform:translate(250px, 250px);opacity:0"
							data-end-animation="transform:translate(0px, 0px);opacity:1">
							<div class="plan__item">
								<h3 class="plan__title">Catálogo/Ecommerce</h3>
								<ul class="plan__list">
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Dominio anual .com o .com.mx</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Hospedaje anual.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Diseño y producción de hasta 5 secciones.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Certificado de seguridad.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Catalogo autoadministrable.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Formulario de contacto.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Sitio web responsivo.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Burbuja de chat Whatsapp Business.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Chat en línea.</li>
									<li class="plan__list-item"><svg>
											<use xlink:href="#svg-icon-tick"></use>
										</svg>Geolocalización.</li>
								</ul>
								<div class="plan__samples">
									<p><svg>
											<use xlink:href="#svg-icon-star"></use>
										</svg>Ejemplo de algunos proyectos</p>
									<ul class="plan__sample-list">
										<li><a href="#" target="_blank">www.sergiosilver.com.mx</a></li>
										<li><a href="#" target="_blank">www.interconmutel.com.mx</a></li>
										<li><a href="#" target="_blank">www.naturalleather.mx</a></li>
									</ul>
								</div>
								<div class="plan__cta">
									<a href="<?=$wp['link']?>" class="btn-flat secondary" target="_blank">Hablar con un
										asesor</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<div class="anchor" id="portafolio"></div>
			<h2 class="text-center">Portafolio</h2>
			<section class="portafolio">
				<div class="container-portafolio">
					<div class="box-portafolio" >
						<a href="./jyctech.php" target="_blank" rel="noopener">
							<div class="header-portafolio">J&C Technology</div>
							<div class="footer-portafolio">
								<h2><span>J&C Technology</span><br> Mantenimiento</h2>
								<a href="https://www.jyctech.net/" rel="noopener">
									<img class="icon-url" src="./images/content/portafolio/icon-url.svg"
										alt="Icon Cadena">
									<p>www.jyctech.net</p>
								</a>
							</div>
						</a>
					</div>
					<div class="box-portafolio">
						<a href="./turborienta.php" target="_blank" rel="noopener">
							<div class="header-portafolio">Turborienta</div>
							<div class="footer-portafolio">
								<h2><span>Turborienta</span><br>Orientación vocacional</h2>
								<a href="https://www.jyctech.net/" rel="noopener">
									<img class="icon-url" src="./images/content/portafolio/icon-url.svg"
										alt="Icon Cadena">
									<p>www.turborienta.com</p>
								</a>
							</div>
						</a>
					</div>
					<div class="box-portafolio">
						<a href="centro-calma.php" target="_blank" rel="noopener">
							<div class="header-portafolio">Centro en calma</div>
							<div class="footer-portafolio">
								<h2><span>Centro en calma</span><br>Masajes a domicilio</h2>
								<a href="https://www.centroencalma.com" rel="noopener">
									<img class="icon-url" src="./images/content/portafolio/icon-url.svg"
										alt="Icon Cadena">
									<p>www.centroencalma.com</p>
								</a>
							</div>
						</a>
					</div>
					<div class="box-portafolio">
						<a href="silver.php" target="_blank" rel="noopener">
							<div class="header-portafolio">Sergio SIlver</div>
							<div class="footer-portafolio">
								<h2><span>Sergio silver</span><br> Joyería</h2>
								<a href="https://www.sergiosilver.com.mx" rel="noopener">
									<img class="icon-url" src="./images/content/portafolio/icon-url.svg"
										alt="Icon Cadena">
									<p>www.sergiosilver.com.mx</p>
								</a>
							</div>
						</a>
					</div>
					<div class="box-portafolio">
						<a href="winbu.php" target="_blank" rel="noopener">
							<div class="header-portafolio">Winbu</div>
							<div class="footer-portafolio">
								<h2><span>Winbu</span><br> Educación y desarrollo</h2>
								<a href="https://www.winbu.mx/" rel="noopener">
									<img class="icon-url" src="./images/content/portafolio/icon-url.svg"
										alt="Icon Cadena">
									<p>www.winbu.mx</p>
								</a>
							</div>
						</a>
					</div>
					<div class="box-portafolio">
						<a href="solog.php" target="_blank" rel="noopener">
							<div class="header-portafolio">Solog</div>
							<div class="footer-portafolio">
								<h2><span>Solog</span><br> Soluciones logisticas y de empaque</h2>
								<a href="https://www.solog.com.mx/" rel="noopener">
									<img class="icon-url" src="./images/content/portafolio/icon-url.svg"
										alt="Icon Cadena">
									<p>www.solog.com.mx</p>
								</a>
							</div>
						</a>
					</div>
					<div class="box-portafolio">
						<a href="interconmutel.php" target="_blank"="noopener">
							<div class="header-portafolio">Interconmutel</div>
							<div class="footer-portafolio">
								<h2><span>Interconmutel</span><br> Empresa de seguridad</h2>
								<a href="https://www.interconmutel.com.mx/" rel="noopener">
									<img class="icon-url" src="./images/content/portafolio/icon-url.svg"
										alt="Icon Cadena">
									<p>www.interconmutel.com.mx</p>
								</a>
							</div>
						</a>
					</div>
					<div class="box-portafolio">
						<a href="kalisal.php" target="_blank" rel="noopener">
							<div class="header-portafolio">Kalisal</div>
							<div class="footer-portafolio">
								<h2><span>Kalisal</span><br> Distribudor de sal</h2>
								<a href="https://www.kalisal.com/" rel="noopener">
									<img class="icon-url" src="./images/content/portafolio/icon-url.svg"
										alt="Icon Cadena">
									<p>www.kalisal.com</p>
								</a>
							</div>
						</a>
					</div>
					<div class="box-portafolio">
						<a href="brans.php" target="_blank" rel="noopener">
							<div class="header-portafolio">Brans</div>
							<div class="footer-portafolio">
								<h2><span>Brans</span><br> Fabricación de playeras</h2>
								<a href="https://https://www.brans.com.mx/" rel="noopener">
									<img class="icon-url" src="./images/content/portafolio/icon-url.svg"
										alt="Icon Cadena">
									<p>https://www.brans.com.mx</p>
								</a>
							</div>
						</a>
					</div>
				</div>
			</section>

			<section class="home__comments">
				<div class="container">
					<h2 class="animation-scroll-text <?=$animation_type?>"
						data-init-animation="transform:translateY(50px);opacity:0"
						data-end-animation="transform:translateY(0px);opacity:1">Nuestros<br>clientes opinan</h2>
					<div class="comments__slider--wrapper">
						<div id="comments__slider" class="comments__slider">
							<div class="comment__item">
								<img class="comment__icon" src="/images/assets/icon-comment.svg" alt="Comentario">
								<div class="comment__text">Profesionalismo, calidad y creatividad son las palabras con
									las que defino Bombilla Digital. Gracias totales por la creación de
									centroencalma.com nos encanto y los recomendamos totalmente.</div>
								<div class="comment__author">
									<h3 class="comment__name">Tere C.</h3>
									<p class="comment__project">Co-Founder Centro en Calma</p>
								</div>
							</div>
							<div class="comment__item">
								<img class="comment__icon" src="/images/assets/icon-comment.svg" alt="Comentario">
								<div class="comment__text">Profesionalismo, excelente diseño y entrega en tiempo.
									Entendieron lo que quería</div>
								<div class="comment__author">
									<h3 class="comment__name">Cecilia J.</h3>
									<p class="comment__project">kalisal.com</p>
								</div>
							</div>
							<div class="comment__item">
								<img class="comment__icon" src="/images/assets/icon-comment.svg" alt="Comentario">
								<div class="comment__text">Infinitas Gracias Equipo Bombilla Digital, gracias por
									escuchar, por Leerme y por conectar, Gracias por todo lo que me han dado y he
									recibido de su labor congruente en tiempo, forma, estilo.</div>
								<div class="comment__author">
									<h3 class="comment__name">Dra. Argüelles</h3>
									<p class="comment__project">manikbyindira.com</p>
								</div>
							</div>
							<div class="comment__item">
								<img class="comment__icon" src="/images/assets/icon-comment.svg" alt="Comentario">
								<div class="comment__text">Considerando que uso sus servicios desde hace varios años los
									felicito por su nuevo sitio web y por el excelente servicio que brindan! ¡Muy
									recomendables!</div>
								<div class="comment__author">
									<h3 class="comment__name">Alejandro G.</h3>
									<p class="comment__project">turborienta.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Callout -->
			<section class="callout callout02">
				<div class="container">
					<p>
						"EL éxito comercial es resultado de una buena estrategia"
					</p>
					<div class="text-center">
						<a class="btn-flat secondary" href="<?=$wp['link']?>" target="_blank">CONTÁCTANOS</a>
					</div>
				</div>
			</section>
		</main>
	</div><!-- /#wrapper -->

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
	</script>
</body>

</html>