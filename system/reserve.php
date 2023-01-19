<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

if(isset($_POST)){

    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $guests_no = $_POST["guests_no"];
    $time = $_POST["time"];
    $date = $_POST["date"];
    $occasion = $_POST["occasion"];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            
        $mail->Host       = 'mail.therootsrestaurant.ug';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'mail@therootsrestaurant.ug';                    
        $mail->Password   = 'theroots@2023#';                             
        $mail->SMTPSecure = 'ssl';            
        $mail->Port       = 465;                                    

        //Recipients
        $mail->setFrom('mail@therootsrestaurant.ug', 'Roots Reservation');
        $mail->addAddress('samuelepodoi@gmail.com');    
        $mail->addAddress('mail@therootsrestaurant.ug'); 
        $mail->addReplyTo($email);
        
        $body = '

        <!-- © 2023 The Roots Restaurant -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#f9f9f9" id="bodyTable">
	<tbody>
		<tr>
			<td style="padding-right:10px;padding-left:10px;" align="center" valign="top" id="bodyCell">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
									<tbody>
										<tr>
											<td style="background-color:#d3a971;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
										</tr>
										<tr>
											<td style="padding-top: 60px; padding-bottom: 20px;" align="center" valign="middle" class="emailLogo">
												<a href="#" style="text-decoration:none" target="_blank">
													<img alt="" border="0" src="https://therootsrestaurant.ug/static/images/logo/footer-logo.png" style="width:100%;max-width:150px;height:auto;display:block" width="150">
												</a>
											</td>
										</tr>
										<tr>
											<td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="mainTitle">
												<h3 class="text" style="color:#000;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">'. $occasion .' Reservation <br> from '. $name .'</h3>
											</td>
										</tr>
										<tr>
											<td style="padding-bottom: 30px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="subTitle">
												<h4 class="text" style="color:#999;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:24px;text-transform:none;text-align:center;padding:0;margin:0">'. $email .'</h4>
                                                <h4 class="text" style="color:#999;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:24px;text-transform:none;text-align:center;padding:0;margin:0">'. $tel .'</h4>
											</td>
										</tr>
										<tr>
											<td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
													<tbody>
														<tr>
															<td style="padding-bottom: 20px;" align="center" valign="top" class="description">
                                                                <hr>
                                                                <h2 style="font-family:Open Sans,Helvetica,Arial,sans-serif;"><u><b>RESERVATION DETAILS<b></u></h2>
																<p class="text" style="color:#666;font-family:Open Sans,Helvetica,Arial,sans-serif;font-size:17px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0"><b>Occasion:</b> '. $occasion .'</p>
                                                                <p class="text" style="color:#666;font-family:Open Sans,Helvetica,Arial,sans-serif;font-size:17px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0"><b>Number of Guests:</b> '. $guests_no .'</p>
                                                                <p class="text" style="color:#666;font-family:Open Sans,Helvetica,Arial,sans-serif;font-size:17px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0"><b>Date:</b> '. $date .'</p>
                                                                <p class="text" style="color:#666;font-family:Open Sans,Helvetica,Arial,sans-serif;font-size:17px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0"><b>Time:</b> '. $time .'</p>
                                                                <br>
                                                                <table border="0" cellpadding="0" cellspacing="0" align="center">
																	<tbody>
																		<tr>
																			<td style="background-color: #d3a971; padding: 12px 35px; border-radius: 50px;" align="center" class="ctaButton"> <a href="tel:'. $tel .'" style="color:#fff;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:13px;font-weight:600;font-style:normal;letter-spacing:1px;line-height:20px;text-transform:uppercase;text-decoration:none;display:block" target="_blank" class="text">Call Customer</a>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
												
											</td>
										</tr>
										<tr>
											<td style="font-size:1px;line-height:1px" height="20">&nbsp;</td>
										</tr>
										
									</tbody>
								</table>
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="space">
									<tbody>
										<tr>
											<td style="font-size:1px;line-height:1px" height="200">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
        
        
        ';
        


        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = $occasion . ' Reservation from ' . $name;
        $mail->Body    = $body;
        $mail->AltBody = $body;

        $mail->send();
        header("location: ../reservation?status=success");
    } catch (Exception $e) {
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("location: ../reservation?status=error");
    }


}
