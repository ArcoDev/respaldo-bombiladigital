<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
// error_reporting(E_ALL);
$abs_path = $_SERVER['DOCUMENT_ROOT'];
include("$abs_path/includes/config.php");
$email_noreply  = 'info@'.$domain_plain;
$email_reply    = 'info@'.$domain_plain;
// $email_noreply  = 'mailer@cbr.bombilladigital.com';
// $email_reply    = 'mailer@cbr.bombilladigital.com';
$to             = 'ramiro.rgr@gmail.com';
$from           = $brand_name;
$c_primary      = '#72cdc2';
$c_text         = '#313233';
$bg             = '#f2f1f3';
$client_emails	= array(
	'info@'.$domain_plain,
);

////////////////////////////////CONTACTO////////////////////////////////
////////////////////////////////CONTACTO////////////////////////////////
////////////////////////////////CONTACTO////////////////////////////////
if(isset($_REQUEST['cmd']) && $_REQUEST['cmd'] == 'contact'){
if(stristr($_REQUEST['name'], '<a') === FALSE
    && stristr($_REQUEST['email'], '<a') === FALSE
    && stristr($_REQUEST['phone'], '<a') === FALSE
    && stristr($_REQUEST['comments'], '<a') === FALSE
    && stristr($_REQUEST['name'], '<script') === FALSE
    && stristr($_REQUEST['email'], '<script') === FALSE
    && stristr($_REQUEST['phone'], '<script') === FALSE
    && stristr($_REQUEST['comments'], '<script') === FALSE
    ) {
$subject        =   'Contacto | '.$brand_name;
ob_start();
?>
<table cellpadding="0" cellspacing="0" border="0" style="width:100%; background:<?=$bg?>; text-align:center;">
<tbody>
<tr>
<td>
<table align="center" cellpadding="0" cellspacing="0" border="0" style="width:90%; max-width:600px; background:#fff; font-family:Helvetica, Arial; padding:50px 15px; margin:30px auto 50px auto;">
<tbody>
    <tr>
        <td colspan="2" style="text-align: center;" align="center">
            <img src="<?=$http_s?>://<?=$domain?>/images/assets/logo.png" style="border:0;width:90%;max-width:200px;margin:auto;">
            <h1 style="font-family:Helvetica,Arial;color:<?=$c_primary?>;font-size:24px;text-align:left;">Nuevo formulario de contacto enviado</h1>
            <p style="font-family:Helvetica, Arial; color:<?=$c_text?>; font-size:14px;">Información enviada:</p>
        </td>
    </tr>
    <tr>
        <td style="text-align:right" width="40%"><strong>Nombre:</strong> </td>
        <td style="text-align:left" width="60%"> &nbsp; <?=$_REQUEST['name']?></td>
    </tr>
    <tr>
        <td style="text-align:right" width="40%"><strong>Email:</strong> </td>
        <td style="text-align:left" width="60%"> &nbsp; <?=$_REQUEST['email']?></td>
    </tr>
    <tr>
        <td style="text-align:right" width="40%"><strong>Teléfono:</strong> </td>
        <td style="text-align:left" width="60%"> &nbsp; <?=$_REQUEST['phone']?></td>
    </tr>
    <tr>
        <td style="text-align:right" width="40%"><strong>Comentarios:</strong> </td>
        <td style="text-align:left" width="60%"> &nbsp; <?=$_REQUEST['comments']?></td>
    </tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<?php
$html = ob_get_contents();
ob_end_clean();
$message = $html;
require 'PHPMailer/PHPMailerAutoload.php';
$email = new PHPMailer();

// $email->isSMTP();
// $email->Host        = 'fast.smtpok.com';
// $email->Port        = 80;
// $email->Username    = 's146016_0';
// $email->Password    = 'SeVyl.4ORu';
// $email->SMTPAuth    = true;
// $email->SMTPDebug   = 2;

$email->setLanguage('es', 'PHPMailer/language/');
$email->CharSet = 'UTF-8';
$email->setFrom($email_noreply, $from);

$TEST           = true;
if($TEST){
    $email->addAddress($to);
}else{
    // $email->addAddress($_REQUEST['email']);
    foreach($client_emails as $client_email){
    	$email->addAddress($client_email);
    }
    $email->addBCC('liliafernandezcoronel@gmail.com');
    $email->addBCC($to);
}
$email->addReplyTo($email_reply);
$email->isHTML(true);
$email->Subject   = $subject;
$email->Body      = $message;

if(!$email->send()) {
    $array = array(
        'error' => 1,
        'message' => '<p class="error">Error al enviar la información, favor de intentar nuevamente</p>'
    );
} else {
    $array = array(
        'error' => 0,
        'message' => '<div class="thanks text-center"><h2>¡Gracias por contactarnos!</h2><p class="thanks text-center">Nos pondremos en contacto contigo a la brevedad</p></div>',
        'code' => $code
    );
}
echo json_encode($array);
die;

}//End validate spam
}