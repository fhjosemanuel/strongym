<?php
require_once "../../controllers/UserController.php";
require_once "../../controllers/PHPMailerController.php";
$html = '';
//Datos
$name = $_POST['name'];
$correo = $_POST['email'];
$pass = $_POST['password'];
$subject = "Confirmación de correo electrónico";
