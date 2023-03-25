<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once ('../../vendor/autoload.php');

class PHPMailerController{
    public $mail_host;
    public $mail_port;
    public $mail_username;
    public $mail_password;
    public function __construct(){
        // Ingresa tus credenciales
        $this->mail_host = "sandbox.smtp.mailtrap.io";
        $this->mail_port = 587;
        $this->mail_username = "9217907b968b9f";
        $this->mail_password = "6da62ac90bd9e8";
    }
}