<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Configure JSON response
$response = [
    'top_err' => '',
    'top_success' => '',
    'name_err' => '',
    'email_err' => '',
    'tel_err' => '',
    'message_err' => ''
];
try{
    $mail = new PHPMailer();
    $mail->isSMTP();                                          
    $mail->Host       = $_SERVER['HTTP_PHP_MAILER_HOST'];                   
    $mail->SMTPAuth   = true; 
    $mail->Port   = $_SERVER['HTTP_PHP_MAILER_HOST'];                                 
    $mail->Username   = $_SERVER['HTTP_PHP_MAILER_USERNAME'];                    
    $mail->Password   = $_SERVER['HTTP_PHP_MAILER_PASSWORD'];  
}catch(Exception $e){

    $response['top_err'] = 'Sorry. There was a problem sending your message';
    exit(json_encode($response));

}                       

    $contentType = isset($_SERVER['CONTENT_TYPE']) ? trim($_SERVER['CONTENT_TYPE']) :
    '';


    if ($contentType == 'application/json') {
        $content = trim(file_get_contents(('php://input')));
        //Convert Content into PHP Array
        $decoded = json_decode($content, true);
        if(is_array($decoded)){
            //Sanitize Input Data
            foreach($decoded as $name => $value){
                $decoded[$name] = trim(filter_var($value, FILTER_SANITIZE_STRING));
            }
            //Error Checking
            if(empty($decoded['name'])){
                $response['name_err'] = 'Error. This input cannot be empty';
            }else if(!filter_var($decoded['email'], FILTER_VALIDATE_EMAIL)){
                $response['email_err'] = 'Error. Input must be a valid email';
            }
            if(empty($decoded['tel'])){
                $response['tel_err'] = 'Error. This input cannot be empty';
            }
            if(empty($decoded['message'])){
                $response['message_err'] = 'Error. This input cannot be empty';
            }
            //Can't send the email if we already have a response to show
            foreach($response as $type => $message){
                if(!empty($response[$type])){
                    exit(json_encode($response));
                }
            }
            //ACTUALLY SEND EMAIL
            try{
                $mail->setFrom('mail@therootsrestaurant.ug');
                $mail->Subject = "New Message from Roots Website";
                $mail->isHTML(true);
                $mail->Body = '<p>'.$decoded['message'].'</p>';
                $mail->addAddress($decoded['email']);

                $mail->send();
            }catch(Exception $e){
                $response['top_err'] = 'Sorry. There was a problem sending your message';
                exit(json_encode($response));
            }
            //Success Response
            $response['top_success'] = 'Success. Your message has been submitted, we shall be in touch shortly!';
            exit(json_encode($response));

        }
    }

$response['top_err'] = 'Sorry. There was a problem sending your message';
exit(json_encode($response));

?>