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
    public function sendEmail( $name, $email, $subject, $url_confirmation, $archivo ){
        $destinatary = $email;

        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $this->mail_host;                             //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Port       = $this->mail_port;                             //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->Username   = $this->mail_username;                         //SMTP username
            $mail->Password   = $this->mail_password;                         //SMTP password
            $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
            $mail->CharSet = 'UTF-8';                                   //Configura la codificación de caracteres
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Enable verbose debug output
        
            //Recipients
            $mail->setFrom('no-replay@strongym.com', 'Strong Gym');
            $mail->addAddress($destinatary, $name);                     //Add a recipient
        
            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = $subject;
            $html = file_get_contents('../../views/mail/'.$archivo.'.html');  //Asigna ruta a la plantilla base
            // Reemplazar los valores en la plantilla
            $html = str_replace('{user_name}', $name, $html);
            $html = str_replace('{url_confirmation}', $url_confirmation, $html);
            $mail->Body = $html;                                        // Asignar el HTML al cuerpo del correo electrónico
        
            //Enviar el mensaje
            $mail->send();
            echo '
            <div class="alert alert-success" role="alert">
                El registro ha sido exitoso confirme su registro con el mensaje enviado a su correo electrónico. <a href="/views/auth/login.php">Iniciar sesión</a>
            </div>
            ';
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    function generateVerificationCode($email){
        //Caracteres validos
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        for ($i = 0; $i < 13; $i++) {
          $code .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $code;
    }
}