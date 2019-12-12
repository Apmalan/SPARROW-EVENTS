<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    //templates:
    //https://foundation.zurb.com/emails/email-templates.html
    //https://www.dyspatch.io/resources/templates/airmail/
class EmailModel{
    public static function enviarEmailTexto(){
        $nome      = (isset($_POST['nome']) ? $_POST['nome'] : "");
        $remetente = (isset($_POST['email'])? $_POST['email']: "");
        $telefone  = (isset($_POST['telefone'])? $_POST['telefone']: "");
        $assunto   = (isset($_POST['assunto'])? $_POST['assunto']: "");
        $mensagem  = (isset($_POST['mensagem'])? $_POST['mensagem']: "");
        $mail = new PHPMailer(true);
        try {
            //Configurações do Servidor
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   // Habilita o output para debug do envio
            $mail->isSMTP();                                            // Envia o email usando Protocolo SMTP
            $mail->Host       = 'smtp.gmail.com';                       // Configuração do STMP fornecido pelo servidor
            $mail->SMTPAuth   = true;                                   // Habilita SMTP autenticação
            $mail->Username   = 'senaiprogramadorweb2019@gmail.com';    // SMTP usuario
            $mail->Password   = 'senai2019';                            // SMTP senha
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP porta to connect to
        
            //Recipients
            $mail->setFrom('senaiprogramadorweb2019@gmail.com', 'Contato - HTML');                           // De
            $mail->addAddress('weltoncastoldi1@gmail.com', 'Welton Castoldi');           // Para
            //$mail->addAddress('ellen@example.com');                               // Você adicionar vários paras e se nao tiver nome, passe apenas o email
            $mail->addReplyTo('senaiprogramadorweb2019@gmail.com', 'Sparrow');      // Responder para
            $mail->addCC($remetente, $nome);                                        // Com copia
            //$mail->addBCC('bcc@example.com');                                     // Com copia oculta
        
            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Adicionar anexos
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Opcional passar o nome do arquivo
        
            // Content
            $mail->isHTML(false);                    // Formato do email
            $mail->Subject = $assunto;               // Assunto do e-mail
            $mail->Body    = $mensagem; // Corpo de Email
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            $retorno = array('status'=>'enviado','mensagem' => 'Mensagem enviada com sucesso');
            echo json_encode($retorno,JSON_PRETTY_PRINT);
            exit();
            
        } catch (Exception $e) {
            $retorno = array('status'=>'erro','mensagem' => 'Mensagem não enviada', 'erro'=>'$mail->ErrorInfo');
            echo json_encode($retorno, JSON_PRETTY_PRINT);
            exit();
        }
    }
    public static function enviarEmailHtml(){
        $nome      = (isset($_POST['nome'])? $_POST['nome']: "");
        $remetente = (isset($_POST['email'])? $_POST['email']: "");
        $telefone  = (isset($_POST['telefone'])? $_POST['telefone']: "");
        $assunto   = (isset($_POST['assunto'])? $_POST['assunto']: "");
        $mensagem  = (isset($_POST['mensagem'])? $_POST['mensagem']: "");
        $mail = new PHPMailer(true);
        try {
            //Configurações do Servidor
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   // Habilita o output para debug do envio
            $mail->isSMTP();                                            // Envia o email usando Protocolo SMTP
            $mail->Host       = 'smtp.gmail.com';                       // Configuração do STMP fornecido pelo servidor
            $mail->SMTPAuth   = true;                                   // Habilita SMTP autenticação
            $mail->Username   = 'senaiprogramadorweb2019@gmail.com';    // SMTP usuario
            $mail->Password   = 'senai2019';                            // SMTP senha
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP porta to connect to
        
            //Recipients
            $mail->setFrom('senaiprogramadorweb2019@gmail.com', 'Contato - Sparrow');                           // De
            $mail->addAddress('welton@faceli.edu.br', 'Welton Castoldi');           // Para
            //$mail->addAddress('ellen@example.com');                               // Você adicionar vários paras e se nao tiver nome, passe apenas o email
            $mail->addReplyTo('senaiprogramadorweb2019@gmail.com', 'Sparrow');      // Responder para
            $mail->addCC($remetente, $nome);                                        // Com copia
            //$mail->addBCC('bcc@example.com');                                     // Com copia oculta
        
            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Adicionar anexos
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Opcional passar o nome do arquivo
        
            // Content
            $mail->isHTML(true);                    // Formato do email
            $mail->Subject = $assunto;               // Assunto do e-mail
            
            $template = file_get_contents('templates/template_contato.html');
            $campos = ['{{NOME}}','{{TELEFONE}}', '{{ASSUNTO}}', '{{MENSAGEM}}'];
            $valores = [$nome, $telefone, $assunto, $mensagem];
            $corpo = str_replace($campos, $valores, $template);
            $mail->Body = $corpo;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            $retorno = array('status'=>'enviado','mensagem' => 'Mensagem enviada com sucesso');
            echo json_encode($retorno,JSON_PRETTY_PRINT);
            exit();
            
        } catch (Exception $e) {
            $retorno = array('status'=>'erro','mensagem' => 'Mensagem não enviada', 'erro'=>'$mail->ErrorInfo');
            echo json_encode($retorno, JSON_PRETTY_PRINT);
            exit();
        }
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $form = (isset($_POST['formContato']) ? $_POST['formContato'] : "");
     if($form == "contato"){         
         EmailModel::enviarEmailHtml();
     }
}