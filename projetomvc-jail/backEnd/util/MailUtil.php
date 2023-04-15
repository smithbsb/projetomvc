<?php
require_once(UTIL 				    . '/phpmailer/class.phpmailer.php');
require_once(UTIL				    . '/phpmailer/class.smtp.php');

class MailUtil {
    
	public static function sendMailAdmin($to_mail, $to_name, $dc_subject, $dc_body) {
	    /*
	    $mail = new PHPMailer();
	    $mail->IsSMTP();
	    $mail->SMTPSecure = "tls";
	    
	    $mail->Host = "mail.digaspare.net";
	    $mail->SMTPAuth = true;
	    $mail->Username = "admin@digaspare.net";
	    $mail->Password = 'Admin123@#';
	    $mail->From = "admin@digaspare.net";
	    
	    $mail->FromName = utf8_decode("Admin DiGaspare");
	    
	    //$mail->AddAddress(trim($to_mail), trim($to_warname));
	    
	    $mail->addAddress(trim($to_mail), trim($to_name));
	    //$mail->addReplyTo(trim($to_mail), trim($to_name));
	    
	    $mail->IsHTML(true);
	    $mail->CharSet = 'iso-8859-1';
	    
	    $mail->Subject  = utf8_decode(trim($dc_subject));
	    
	    $mail->Body = nl2br(trim($dc_body));
	    //$mail->AltBody = 'Este e o corpo.';
	    $enviado = $mail->Send();
	    $mail->ClearAllRecipients();
	    $mail->ClearAttachments();
	    
	    $msg_ret = '';
	    if ($enviado) {
	        $msg_ret = 0;
	    } else {
	        $msg_ret = $mail->ErrorInfo;
	        //self::execute("insert into tblerrorsendmail (dcerrorsendmail) values ('".$mail->ErrorInfo."');");
	    }
	    return $msg_ret;
	    */
	}
    
}
?>
