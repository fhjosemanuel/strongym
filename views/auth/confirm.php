<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Jquery -->
    <script src="/resources/js/jquery-3.6.4.min.js"></script>

    <!-- Alertify -->
		<link rel="stylesheet" href="/resources/js/alertifyjs/css/alertify.css">
		<link rel="stylesheet" href="/resources/js/alertifyjs/css/themes/default.css">
	    <script src="/resources/js/alertifyjs/alertify.js"></script>
	<!-- Alertify End-->
    <title>Confirmación de correo electrónico</title>
</head>
<body style="background-color: #000; color: #fff;">
<?php

require_once("../../ajax/auth/ConfirmRegister.php");

$email = $_GET['email'];
$token = $_GET['token'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "El email proporcionado es inválido.";
}

$usuario = obtenerUsuario($email);

if(!empty($usuario)) {
    $idUser = $usuario[0]['id'];
    $user = $usuario[0]['email'];
    $status = $usuario[0]['validated'];
    if(intval($status)) {
        echo "
        <script language='javascript'>
                alertify.alert('Strong Gym', 'El correo ya ha sido validado', function(){ $(location).attr('href','/views/auth/login.php'); });
        </script>";
    } else {
        
        $validaCorreo = actualizarEstatus($idUser);

        if($validaCorreo) {
            echo "
            <script language='javascript'>
                    alertify.alert('Strong Gym', 'El correo electrónico ha sido validado con éxito', function(){ $(location).attr('href','/views/auth/login.php'); });
            </script>";
        } else {
            echo "
            <script language='javascript'>
                    alertify.alert('Strong Gym', 'Error al confirmar el correo electrónico, inténtalo de nuevo más tarde.', function(){ $(location).attr('href','/'); });
            </script>";
        }
    }
} else {
    echo "
    <script language='javascript'>
            alertify.alert('Advertencia', 'El correo proporcionado no se encuentra registrado en Strong Gym', function(){ $(location).attr('href','/'); });
    </script>";
}
?>
</body>
</html>