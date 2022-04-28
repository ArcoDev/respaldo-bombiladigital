<!--

<svg class="svg-icon item"><use xlink:href="#svg-icon-item"></use></svg>

-->

<header class="site-header">

	<div class="topbar">

		<div class="container">

			<ul class="topbar__list">

				<li class="topbar__item">

					<a
						href="<?=$contact_phone_1['link']?>"><?=$contact_phone_1['icon']?><?=$contact_phone_1['html']?></a>

				</li>

				<li class="topbar__item">

					<a
						href="<?=$contact_email_1['link']?>"><?=$contact_email_1['icon']?><?=$contact_email_1['html']?></a>

				</li>

			</ul>

		</div>

	</div>

	<div class="mainnav__trigger">

		<span class="close"></span>

	</div>

	<div class="overlay"></div>

	<div class="mainnav__wrapper">

		<div class="container">

			<div class="site-brand"><a href="/"><img src="/images/assets/logo-white.svg" alt="<?=$brand_name?>"></a>
			</div>

			<nav class="mainnav">

				<ul class="mainnav__list site">

					<?php foreach($mainnav as $nav){ ?>

					<li class="mainnav__item <?=$nav['class']?>">

						<a href="<?=$nav['link']?>" target="<?=$nav['target']?>"><?=$nav['html']?></a>

						<?php if($nav['subnav']){ ?>

						<div class="submenu__trigger"><svg class="svg-icon arrow">
								<use xlink:href="#svg-icon-arrow"></use>
							</svg></div>

						<ul class="submenu">

							<?php foreach($nav['nav'] as $subnav){ ?>

							<li class="submenu__item"><a href="<?=$subnav['link']?>"
									target="<?=$subnav['target']?>"><?=$subnav['html']?></a></li>

							<?php } ?>

						</ul>

						<?php } ?>

					</li>

					<?php } ?>

					<li class="mainnav__item-contact first hidden-lg-up">

						<a href="<?=$contact_phone_1['link']?>"
							class="num"><?=$contact_phone_1['icon']?><?=$contact_phone_1['html']?></a>

					</li>

					<li class="mainnav__item-contact last hidden-lg-up">

						<a
							href="<?=$contact_email_1['link']?>"><?=$contact_email_1['icon']?><?=$contact_email_1['html']?></a>

					</li>

					<li class="mainnav__item-sm hidden-lg-up">

						<?php if($fb['link']!=''){ ?>

						<a href="<?=$fb['link']?>" target="_blank"><?=$fb['icon']?></a>

						<?php } ?>

						<?php if($ig['link']!=''){ ?>

						<a href="<?=$ig['link']?>" target="_blank"><?=$ig['icon']?></a>

						<?php } ?>

						<?php if($tw['link']!=''){ ?>

						<a href="<?=$tw['link']?>" target="_blank"><?=$tw['icon']?></a>

						<?php } ?>

					</li>

					<li class="mainnav__item-copyright hidden-lg-up">

						Copyright © <?=date("Y")?>

					</li>

				</ul>

			</nav>

		</div>

	</div>

</header>