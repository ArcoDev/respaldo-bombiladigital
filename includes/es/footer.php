<footer class="site-footer footer">

	<div class="footer__primary">

		<div class="container">

			<div class="anchor" id="contacto"></div>

			<div class="row-flex">

				<div class="col-lg-6">

					<div class="contact__form--wrapper">

						<div class="anchor"></div>

						<form action="/" id="foo-form" class="contact__form">

							<div class="lds-spinner loading">
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
								<div></div>
							</div>

							<div class="anchor" id="contacto"></div>

							<h2 class="contact__form-title">¿Conversamos?</h2>

							<!-- <p class="contact__form-desc">Llene el siguiente formulario para cotizar o si desea que lo pongamos en contacto con nuestros distribuidores en su ciudad.</p> -->

							<input type="hidden" name="cmd" value="contact">

							<div class="row">

								<div class="col-lg-6">

									<div class="contact__form-input--wrapper">

										<label for="name">Nombre*</label>

										<input type="text" name="name" id="name" class="contact__form-input"
											placeholder="Nombre Completo">

									</div>

								</div>

								<div class="col-lg-6">

									<div class="contact__form-input--wrapper">

										<label for="phone">Teléfono*</label>

										<input type="text" name="phone" id="phone" class="contact__form-input"
											placeholder="8778451289">

									</div>

								</div>

							</div>

							<div class="contact__form-input--wrapper">

								<label for="email">Email*</label>

								<input type="text" name="email" id="email" class="contact__form-input" placeholder="ejemplo@ejemplo.com">

							</div>

							<div class="contact__form-input--wrapper">

								<label for="comments">Comentarios/Preguntas*</label>

								<textarea name="comments" id="comments" class="contact__form-textarea"
									placeholder="Háblanos de tu proyecto"></textarea>

							</div>

							<div class="text-right">

								<label for="privacy"><input type="checkbox" name="privacy" id="privacy"> He leido y
									acepto el <a href="/aviso-de-privacidad" target="_blank">aviso de
										privacidad</a></label>

								<input type="hidden" id="validate-privacy-policy">

							</div>

							<div class="text-right error-wrapper"></div>

							<div class="text-right contact__form-input--wrapper">

								<button class="btn-flat primary contact__form-button">Enviar</button>

							</div>

						</form>

					</div>

				</div>

				<div class="col-lg-6">
					<div class="row-flex" style="row-gap: 2.5rem;">
						<div class="col-lg-7">
							<h2 class="foo-contact__item" style="padding-bottom: 0;">Mapa de sitio</h2>
							<ul class="foo-contact__list">
								<li class="foo-contact__item">
									<a href="/#servicios">Servicios</a>
								</li>
								<li class="foo-contact__item">
									<a href="/#quienes-somos">Quines somos</a>
								</li>
								<li class="foo-contact__item">
									<a href="./portafolio.php" target="_blank">Portafolio</a>
								</li>
								<li class="foo-contact__item">
									<a href="/#planes">Planes</a>
								</li>
								<li class="foo-contact__item">
									<a href="/#contacto">Contacto</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-5">
							<h2 class="foo-contact__item" style="padding-bottom: 0;">Servicios</h2>
							<ul class="foo-contact__list">
								<li class="foo-contact__item">
									<a href="/#servicios">Diseño y desarrollo web</a>
								</li>
								<li class="foo-contact__item">
									<a href="/#quienes-somos" style="line-height: 20px;">posicionamiento en <br> buscadores</a>
								</li>
								<li class="foo-contact__item">
									<a href="/#portafolio">Dominio y hospedajes web</a>
								</li>
								<li class="foo-contact__item">
									<a href="/#planes">Consultoría</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-7">
							<h2 class="foo-contact__item" style="padding-bottom: 0;">Contacto</h2>
							<ul class="foo-contact__list">
								<li class="foo-contact__item">
									<a href="<?=$contact_phone_1['link']?>"
										class="num"><?=$contact_phone_1['icon']?><?=$contact_phone_1['html']?></a>
								</li>
								<li class="foo-contact__item">
									<a
										href="<?=$contact_email_1['link']?>"><?=$contact_email_1['icon']?><?=$contact_email_1['html']?></a>
								</li>
							</ul>
						</div>
						<div class="col-lg-5">
							<h2 class="foo-contact__item" style="padding-bottom: 0;">Siguenos</h2>
							<?php if($fb['link']!='' || $ig['link']!='' || $tw['link']!=''){ ?>
								<div class="foo-sm--wrapper">
									<ul class="foo-sm__list">
										<?php if($tw['link']!=''){ ?>
										<li class="foo-sm__item"><a href="<?=$tw['link']?>"
												target="_blank"><?=$tw['icon']?></a>
										</li>
										<?php } ?>
										<?php if($fb['link']!=''){ ?>
										<li class="foo-sm__item"><a href="<?=$fb['link']?>"
												target="_blank"><?=$fb['icon']?></a>
										</li>
										<?php } ?>
										<?php if($ig['link']!=''){ ?>
										<li class="foo-sm__item"><a href="<?=$ig['link']?>"
												target="_blank"><?=$ig['icon']?></a>
										</li>
										<?php } ?>
									</ul>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer__post">

		<div class="container">

			<div class="footer__legal">

				<ul class="footer__legal-list">

					<li class="footer__legal-item footer__copyright">

						Copyright © <?=date("Y")?>

					</li>

					<li class="footer__legal-item">

						<a href="/aviso-de-privacidad">Aviso de privacidad</a>

					</li>

				</ul>

			</div>

		</div>

	</div>

</footer>

<a id="fixed-whatsapp" href="<?=$wp['link']?>" target="_blank"><?=$wp['icon']?></a>

<!-- Fonts -->

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400&display=swap"
	rel="stylesheet">