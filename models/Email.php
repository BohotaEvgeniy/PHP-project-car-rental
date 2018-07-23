<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
class Email
{
    public $messasge;
    public $subject;
    public $email;

    public function genirationDataSMS($email)
    {
        $this->email = $email;
        $this->subject = "Авто прокат";
        $this->messasge = "<div style='text-align: center;font-size: 24px'>Позлравляем,вы успешно зарегистрированы!</div>";

        mail($email, $this->subject, $this->messasge);




        // Import PHPMailer classes into the global namespace
        // These must be at the top of your script, not inside a function
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// PHPMailer

        //Load Composer's autoloader
//        require './vendor/autoload.php';
//
//        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
//        try {
//            //Server settings
//            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
//            $mail->isSMTP();                                      // Set mailer to use SMTP
//            $mail->Host = ' smtp.gmail.com';  // Specify main and backup SMTP servers
//            $mail->SMTPAuth = true;                               // Enable SMTP authentication
//            $mail->Username = ;                 // SMTP username
//            $mail->Password = '*************';                           // SMTP password  <---------------------------------------------------------------вписать ваш пароль
//            $mail->SMTPSecure = 'ssl'/*tls*/;                            // Enable TLS encryption, `ssl` also accepted
//            $mail->Port = 465/*587*/;                                    // TCP port to connect to
//
//            //Recipients
//            $mail->setFrom($this->email, 'Mailer');
//            $mail->addAddress($this->email, 'Joe User');     // Add a recipient
//
//            //Content
//            $mail->isHTML(true);                                  // Set email format to HTML
//            $mail->Subject = $this->subject;
//            $mail->Body    = $this->message;
//            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//
//            $mail->send();
//            echo 'Message has been sent';
//        } catch (Exception $e) {
//            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
//        }
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  API eSputnik
        /*$user = 'eSputnik login';
        $password = 'eSputnik password';
        $send_email_url = 'https://esputnik.com/api/v1/message/email';

        $from = '"test" <От кого письмо>'; // отправитель в формате "Имя" <email@mail.com>
        $subject = $this->subject;
        $htmlText = $this->message;
        $plainText = 'Простой текст сообщения'; // вариант письма в виде простого текста
        $emails = array($this->email, ); // Кому отправляешь,можно больше одного email

        $json_value = new stdClass();
        $json_value->from = $from;
        $json_value->subject = $subject;
        $json_value->htmlText = $htmlText;
        $json_value->plainText = $plainText;
        $json_value->emails = $emails;

        $this->send_request($send_email_url, $json_value, $user, $password);
    }

    function send_request($url, $json_value, $user, $password) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json_value));
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_USERPWD, $user.':'.$password);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        echo($output);*/
    }

}