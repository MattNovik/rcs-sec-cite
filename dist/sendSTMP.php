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
"<html>

<head>
    <meta charset=‘UTF-8’>
    <meta content=‘width=device-width, initial-scale=1’ name=‘viewport’>
    <meta name=‘x-apple-disable-message-reformatting’>
    <meta http-equiv=‘X-UA-Compatible’ content=‘IE=edge’>
    <meta content=‘telephone=no’ name=‘format-detection’>
    <title></title>
    <!--[if (mso 16)]>
    <style type=‘text/css’>
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
</head>

<body>
    <div class=‘es-wrapper-color’ >
        <!--[if gte mso 9]>
			<v:background xmlns:v=‘urn:schemas-microsoft-com:vml’ fill=‘t’>
				<v:fill type=‘tile’ color=‘#000000’></v:fill>
			</v:background>
		<![endif]-->
        <table class=‘es-wrapper’ width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
            <tbody>
                <tr>
                    <td class=‘esd-email-paddings’ valign=‘top’>
                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘esd-footer-popover es-content’ align=‘center’>
                            <tbody>
                                <tr>
                                    <td class=‘esd-stripe’ align=‘center’>
                                        <table bgcolor=‘#ffffff’ style='border:solid 1px black; background-color:black' class=‘es-content-body’ align=‘center’ cellpadding=‘0’ cellspacing=‘0’ width=‘600’>
                                            <tbody>
                                                <tr>
                                                    <td class=‘esd-structure es-p20t es-p20r es-p20l’ align=‘left’>
                                                        <!--[if mso]><table width=‘560’ cellpadding=‘0’
                            cellspacing=‘0’><tr><td width=‘180’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘180’ class=‘es-m-p0r es-m-p20b esd-container-frame’ valign=‘top’ align=‘center’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <p><br></p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘20’></td><td width=‘360’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘360’ align=‘left’ class=‘esd-container-frame’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <p>ИМЯ:'.$user_Name'</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=‘esd-structure es-p20t es-p20r es-p20l’ align=‘left’>
                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                            <tbody>
                                                                <tr>
                                                                    <td class=‘es-m-p0r es-m-p20b esd-container-frame’ width=‘560’ valign=‘top’ align=‘center’>
                                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <p>МЭЙЛ:'.$user_Phon'т</p>
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
                                                    <td class=‘esd-structure es-p20t es-p20b es-p20r es-p20l’ align=‘left’>
                                                        <!--[if mso]><table width=‘560’ cellpadding=‘0’ 
                        cellspacing=‘0’><tr><td width=‘270’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘270’ class=‘es-m-p20b esd-container-frame’ align=‘left’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <p>Вставьте текст</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘20’></td><td width=‘270’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-right’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘270’ align=‘left’ class=‘esd-container-frame’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <p>Вставьте текст</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
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
            </tbody>
        </table>
    </div>
</body>

</html>";

    
// Send

$headers = "From: sendphp@lockdoor.ru.com";

/*mail('matvej.novik@gmail.com', 'My Subject', $message, $headers);*/
mail(
    'matvej.novik@gmail.com',
    'Письмо из скрипта',
    $message,
    "From: sendphp@lockdoor.ru.com\r\n"
    ."Content-type: text/html; charset=utf-8\r\n"
    ."X-Mailer: PHP mail script"
);

?>