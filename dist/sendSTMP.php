<?php
// Using the ini_set()
ini_set("SMTP", "smtp.gmail.com");
ini_set("sendmail_from", "sendphp@lockdoor.ru.com");
//ini_set("smtp_port", "25");

// The message
  $user_Name = filter_var($_POST["polz_name"], FILTER_SANITIZE_STRING);
 $user_Phone = filter_var($_POST["polz_tel"], FILTER_SANITIZE_STRING);
 $user_Mail = filter_var($_POST["polz_mail"], FILTER_SANITIZE_STRING);
 $user_Comp = filter_var($_POST["polz_comp"], FILTER_SANITIZE_STRING);


$message = /*"Имя: ".$user_Name.".\r\n Телефон: ".$user_Phone. ". \r\n Mail: ".$user_Mail. ". \r\n Comp: ".$user_Comp*/
"<html ' style=‘width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;’>
 <head> 
  <meta charset=‘UTF-8’> 
  <meta content=‘width=device-width, initial-scale=1’ name=‘viewport’> 
  <meta name=‘x-apple-disable-message-reformatting’> 
  <meta http-equiv=‘X-UA-Compatible’ content=‘IE=edge’> 
  <meta content=‘telephone=no’ name=‘format-detection’> 
  <!--[if (mso 16)]>
    <style type=‘text/css’>
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
 <style type=‘text/css’>

#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
table {
    background-color:#FFFFFF;
}
</style> 
 </head> 
 <body style=‘width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;’> 
  <div class=‘es-wrapper-color’ style=‘background-color:#F6F6F6;’> 
   <!--[if gte mso 9]>
			<v:background xmlns:v=‘urn:schemas-microsoft-com:vml’ fill=‘t’>
				<v:fill type=‘tile’ color=‘#f6f6f6’></v:fill>
			</v:background>
		<![endif]--> 
   <table class=‘es-wrapper’ width=‘100%’ cellspacing=‘0’ cellpadding=‘0’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;’> 
     <tr style=‘border-collapse:collapse;’> 
      <td valign=‘top’ style=‘padding:0;Margin:0;’> 
       <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-content’ align=‘center’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;’> 
         <tr style=‘border-collapse:collapse;’> 
          <td align=‘center’ style=‘padding:0;Margin:0;’> 
           <table  bgcolor=‘#ffffff’ class=‘es-content-body’ align=‘center’ cellpadding=‘0’ cellspacing=‘0’ min-width='600' width=‘600’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;’> 
             <tr style=‘border-collapse:collapse;’> 
              <td align=‘left’ style=‘padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;’> 
               <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                 <tr style=‘border-collapse:collapse;’> 
                  <td width=‘560’ align=‘center’ valign=‘top’ style=‘padding:0;Margin:0;’> 
                   <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                     <tr style=‘border-collapse:collapse;’> 
                      <td align=‘center’ style=‘padding:0;Margin:0;’><p style=‘Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;’><strong>Заявка на обратный звонок</strong></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style=‘border-collapse:collapse;’> 
              <td align=‘left’ style=‘padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;’> 
               <!--[if mso]><table width=‘560’ cellpadding=‘0’ cellspacing=‘0’><tr><td width=‘180’ valign=‘top’><![endif]--> 
               <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;’> 
                 <tr style=‘border-collapse:collapse;’> 
                  <td width=‘180’ class=‘es-m-p0r es-m-p20b’ valign=‘top’ align=‘center’ style=‘padding:0;Margin:0;’> 
                   <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                     <tr style=‘border-collapse:collapse;’> 
                      <td align=‘left’ style=‘padding:0;Margin:0;’><p style=‘Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;’>Имя (как обращаться):</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td width=‘20’></td><td width=‘360’ valign=‘top’><![endif]--> 
               <table cellpadding=‘0’ cellspacing=‘0’ align=‘right’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                 <tr style=‘border-collapse:collapse;’> 
                  <td width=‘360’ align=‘left’ style=‘padding:0;Margin:0;’> 
                   <table cellpadding=‘0’ cellspaFcing=‘0’ width=‘100%’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                     <tr style=‘border-collapse:collapse;’> 
                      <td align=‘left’ style=‘padding:0;Margin:0;’><p style=‘Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;’><strong>$user_Name</strong></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
             <tr style=‘border-collapse:collapse;’> 
              <td align=‘left’ style=‘padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;’> 
               <!--[if mso]><table width=‘560’ cellpadding=‘0’ cellspacing=‘0’><tr><td width=‘180’ valign=‘top’><![endif]--> 
               <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;’> 
                 <tr style=‘border-collapse:collapse;’> 
                  <td width=‘180’ class=‘es-m-p0r es-m-p20b’ valign=‘top’ align=‘center’ style=‘padding:0;Margin:0;’> 
                   <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                     <tr style=‘border-collapse:collapse;’> 
                      <td align=‘left’ style=‘padding:0;Margin:0;’><p style=‘Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;’>Email:</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td width=‘20’></td><td width=‘360’ valign=‘top’><![endif]--> 
               <table cellpadding=‘0’ cellspacing=‘0’ align=‘right’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                 <tr style=‘border-collapse:collapse;’> 
                  <td width=‘360’ align=‘left’ style=‘padding:0;Margin:0;’> 
                   <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                     <tr style=‘border-collapse:collapse;’> 
                      <td align=‘left’ style=‘padding:0;Margin:0;’><p style=‘Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;’><strong>$user_Mail</strong></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
             <tr style=‘border-collapse:collapse;’> 
              <td align=‘left’ style=‘padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;’> 
               <!--[if mso]><table width=‘560’ cellpadding=‘0’ cellspacing=‘0’><tr><td width=‘180’ valign=‘top’><![endif]--> 
               <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;’> 
                 <tr style=‘border-collapse:collapse;’> 
                  <td width=‘180’ class=‘es-m-p0r es-m-p20b’ valign=‘top’ align=‘center’ style=‘padding:0;Margin:0;’> 
                   <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                     <tr style=‘border-collapse:collapse;’> 
                      <td align=‘left’ style=‘padding:0;Margin:0;’><p style=‘Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;’>Телефон для связи:</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td width=‘20’></td><td width=‘360’ valign=‘top’><![endif]--> 
               <table cellpadding=‘0’ cellspacing=‘0’ align=‘right’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                 <tr style=‘border-collapse:collapse;’> 
                  <td width=‘360’ align=‘left’ style=‘padding:0;Margin:0;’> 
                   <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                     <tr style=‘border-collapse:collapse;’> 
                      <td align=‘left’ style=‘padding:0;Margin:0;’><p style=‘Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;’><strong>$user_Phone</strong></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
             <tr style=‘border-collapse:collapse;’> 
              <td align=‘left’ style=‘padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;’> 
               <!--[if mso]><table width=‘560’ cellpadding=‘0’ cellspacing=‘0’><tr><td width=‘180’ valign=‘top’><![endif]--> 
               <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;’> 
                 <tr style=‘border-collapse:collapse;’> 
                  <td width=‘180’ class=‘es-m-p0r es-m-p20b’ valign=‘top’ align=‘center’ style=‘padding:0;Margin:0;’> 
                   <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                     <tr style=‘border-collapse:collapse;’> 
                      <td align=‘left’ style=‘padding:0;Margin:0;’><p style=‘Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;’>Компания:</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td width=‘20’></td><td width=‘360’ valign=‘top’><![endif]--> 
               <table cellpadding=‘0’ cellspacing=‘0’ align=‘right’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                 <tr style=‘border-collapse:collapse;’> 
                  <td width=‘360’ align=‘left’ style=‘padding:0;Margin:0;’> 
                   <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;’> 
                     <tr style=‘border-collapse:collapse;’> 
                      <td align=‘left’ style=‘padding:0;Margin:0;’><p style=‘Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;’><strong>$user_Comp</strong></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table></td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>";

    
// Send

$headers = "From: sendphp@lockdoor.ru.com";

/*mail('matvej.novik@gmail.com', 'My Subject', $message, $headers);*/
mail(
    'matvej.novik@gmail.com',
    'Заявка на обратный звонок',
    $message,
    "From: sendphp@lockdoor.ru.com\r\n"
    ."Content-type: text/html; charset=utf-8\r\n"
    ."X-Mailer: PHP mail script"
);

?>
