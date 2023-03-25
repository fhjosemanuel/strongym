<?php
require_once "../../controllers/UserController.php";
require_once "../../controllers/PHPMailerController.php";
$html = '';
//Datos
$name = $_POST['name'];
$correo = $_POST['email'];
$pass = $_POST['password'];
$subject = "Confirmación de correo electrónico";

$myAccount = new UserController();
$account = $myAccount->email($correo);
if( empty( $account ) ) {
    //Generar código de verificación
    $generarCode = new PHPMailerController();
    $verification_code = $generarCode->generateVerificationCode($correo);
    
    // Crear cuenta
    $info = [
        $name,
        $correo,
        $pass,
        $verification_code
    ];
    $myAccount = new UserController();
    $account = $myAccount->create($info);

    $url_confirmation = "http://strongym.test/views/auth/confirm.php?email=" . urlencode($correo) . "&token=" . urlencode($verification_code);

    //Enviar correo
    $email = new PHPMailerController();
    $send = $email->sendEmail( $name, $correo, $subject, $url_confirmation, 'registro' );    
} else {
    $html .= '
    <div class="alert alert-info" role="alert">
        El correo electrónico ya se encuentra registrado. <a href="/views/auth/login.php">Iniciar sesión</a>
    </div>
    ';
}
echo $html;