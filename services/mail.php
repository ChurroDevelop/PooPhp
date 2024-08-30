<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';
    
    class Mail {

        public $email;
        public $asunto;
        public $mensaje;
        public $cuerpo;

        public function __construct($email, $asunto, $mensaje, $cuerpo)
        {
            $this->email = $email;
            $this->asunto = $asunto;
            $this->mensaje = $mensaje;
            $this->cuerpo = $cuerpo;
        }

        public function enviarMail(){
            try {
                $phpmailer = new PHPMailer();
                $phpmailer->isSMTP();
                $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
                $phpmailer->SMTPAuth = true;
                $phpmailer->Port = 2525;
                $phpmailer->Username = 'fac9c78d99b6a9';
                $phpmailer->Password = 'ea4ea16d3879ff';
        
                $phpmailer->setFrom('from@example.com', 'Mailer');
                $phpmailer->addAddress($this->email, 'Joe User');
                $phpmailer->addAddress('ellen@example.com');
                $phpmailer->addReplyTo('info@example.com', 'Information');
                $phpmailer->addCC('cc@example.com');
                $phpmailer->addBCC('bcc@example.com');
        
                // $phpmailer->addAttachment('/var/tmp/file.tar.gz');
                // $phpmailer->addAttachment('/tmp/image.jpg', 'new.jpg');
        
                $phpmailer->isHTML(true);
                $phpmailer->Subject = $this->asunto;
                $phpmailer->Body    = $this->cuerpo;
                $phpmailer->AltBody = $this->mensaje;
                
                $phpmailer->send();
                echo 'El correo se ha enviado con exito';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
            }
        }

    }
