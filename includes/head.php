<!-- Google Tag Manager -->

<?php if($GTM!=''){ ?>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','<?=$GTM?>');</script>

<?php } ?>

<!-- End Google Tag Manager -->

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<title><?=$page_title?></title>

<meta name="description" content="<?=$page_desc?>">

<meta name="keywords" content="<?=$page_keywords?>">

<link rel="canonical" href="<?=$page_url?>">

<meta property="og:locale" content="<?=$locale?>">

<meta property="og:type" content="website">

<meta property="og:title" content="<?=$page_title?>">

<meta property="og:description" content="<?=$page_desc?>">

<meta property="og:url" content="<?=$page_url?>">

<meta property="og:image" content="<?=$page_img?>" />

<? if($tw){ ?>

<meta name="twitter:card" content="summary">

<meta name="twitter:title" content="<?=$page_title?>">

<meta name="twitter:description" content="<?=$page_desc?>">

<meta name="twitter:site" content="@<?=$tw_user?>">

<meta name="twitter:creator" content="@<?=$tw_user?>">

<? } ?>

<link rel="icon" type="image/png" href="/images/assets/favicon.png" />

<link rel="icon" type="image/x-icon" href="/images/assets/favicon.ico" />

<link rel="stylesheet" type="text/css" href="/css/custom-styles.min.css?v=1434">
<link rel="stylesheet" type="text/css" href="/sass/app.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->