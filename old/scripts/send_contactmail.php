<?php
include_once("class.phpmailer.php");

				$name			     = $_REQUEST['name']; 
				$comp_name			 = $_REQUEST['comp_name']; 
				$email			     = $_REQUEST['email']; 
				$phone 			     = $_REQUEST['phone'];
				$comments 			 = $_REQUEST['comments'];
				
			$mail_body="<style type='text/css'>
							.sub-title {
							font-size: 18px;
							font-family: Arial, Helvetica, sans-serif;
							}
							.form-titles {
							font-family: Arial, Helvetica, sans-serif;
							font-size: 12px;
							font-weight: bold;
							}
							.intro-copy {
							font-family: Arial, Helvetica, sans-serif;
							}
							.disclaimer-bold {
							font-weight: bold;
							font-family: Arial, Helvetica, sans-serif;
							color: #666;
							}
							a:link {
							color: #666;
							font-weight: bold;
							text-decoration: none;
							}
							a:visited {
							text-decoration: none;
							}
							a:hover {
							text-decoration: none;
							}
							a:active {
							text-decoration: none;
							}
							.answers {
							font-size: 13px;
							line-height: 14px;
							}
							</style>
							</head>
							
							<body>
							
						
<table width='600' border='0' cellspacing='0' cellpadding='0'>
                              <tr>
                                <td style='background-color:#76181b; padding:10px 10px 10px 15px; color:#FFFFFF; font-size:26px; font-family:; font-family: Arial, Helvetica, sans-serif;Trebuchet MS'>Aeongrapix</td>
                              </tr>
                              <tr>
                                <td style='background-color:#FFFFFF; padding:15px 10px 10px 0px; color:#FFFFFF; font-size:14px; color:#666666;font-family: Arial, Helvetica, sans-serif;Trebuchet MS'><p> &nbsp;&nbsp;</p></td>
                              </tr>
                            </table>
<table width='600' border='1' cellpadding='10' cellspacing='3'>
                              <tr>
                                <td width='185' height='20' align='left' valign='top' class='form-titles' style='background-color:#FFFFFF; font-family:; font-family: Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; Trebuchet MS; font-size:14px; color:#000; padding:10px 10px 5px 15px'> Name</td>
                                <td width='360' align='left' valign='top' class='answers' style='background-color:#FFFFFF; font-family: Georgia, Times New Roman, Times, serif; font-size:13px; color:#666666; padding:10px 10px 5px 15px'>".$name."</td>
                              </tr>
                              <tr>
                                <td height='20' align='left' valign='top' class='form-titles' style='background-color:#EBEBEB; font-family:; font-family: Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; Trebuchet MS; font-size:14px; color:#000; padding:10px 10px 5px 15px'>Company Name</td>
                                <td align='left' valign='top' class='answers' style='background-color:#EBEBEB; font-family: Georgia, Times New Roman, Times, serif; font-size:13px; color:#666666; padding:10px 10px 5px 15px'>".$comp_name."</td>
                              </tr>
                              <tr>
                                <td height='20' align='left' valign='top' class='form-titles' style='background-color:#FFFFFF; font-family:; font-family: Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; Trebuchet MS; font-size:14px; color:#000; padding:10px 10px 5px 15px'>Email Address</td>
                                <td align='left' valign='top' class='answers' style='background-color:#FFFFFF; font-family: Georgia, Times New Roman, Times, serif; font-size:13px; color:#666666; padding:10px 10px 5px 15px'>".$email."</td>
                              </tr>
                              <tr>
                                <td height='20' align='left' valign='top' class='form-titles' style='background-color:#EBEBEB; font-family:; font-family: Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; Trebuchet MS; font-size:14px; color:#000; padding:10px 10px 5px 15px'>Phone</td>
                                <td align='left' valign='top' class='answers' style='background-color:#EBEBEB; font-family: Georgia, Times New Roman, Times, serif; font-size:13px; color:#666666; padding:10px 10px 5px 15px'>".$phone."</td>
                              </tr>
                              <tr>
                                <td height='20' align='left' valign='top' class='form-titles' style='background-color:#FFFFFF; font-family:; font-family: Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; Trebuchet MS; font-size:14px; color:#000; padding:10px 10px 5px 15px'>Comments</td>
                                <td align='left' valign='top' class='answers' style='background-color:#FFFFFF; font-family: Georgia, Times New Roman, Times, serif; font-size:13px; color:#666666; padding:10px 10px 5px 15px'>".$comments."</td>
                              </tr>
                            </table>
                            <br />
							</body>
							</html>";
		
				
			$objMail = new PHPMailer();
			$objMail->From = $_REQUEST['email']; 
			$objMail->FromName =  $_REQUEST['name']; // 
			$objMail->Subject = "Aeongrapix.com [ Contact Us ]";
			$objMail->IsHtml(true);
			$objMail->Body = $mail_body;	 
			$objMail->AddAddress("ayan26@gmail.com"); // Client's mail id
		//	$objMail->AddAddress($from); // Client's mail id
			$objMail->Send();
			
		    header('Location:../contact/index.php?stat=1');


?>