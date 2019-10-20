<?php
 if($_POST)
 {
 $to_Email = "matvej.novik@gmail.com"; 
 $subject = 'Запрос обратного звонка '.$_POST["polz_name"]; 

 if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

 $otvet_serv = json_encode(
 array( 
 'text' => 'Возникла ошибка при отправке данных'
 ));

 die($otvet_serv);
 } 

 if(!isset($_POST["polz_name"]) || !isset($_POST["polz_tel"]))
 {
 $otvet_serv = json_encode(array('type'=>'error', 'text' => 'Заполните форму'));
 die($otvet_serv);
 }

 $user_Name = filter_var($_POST["polz_name"], FILTER_SANITIZE_STRING);
 $user_Phone = filter_var($_POST["polz_tel"], FILTER_SANITIZE_STRING);

 if(strlen($user_Name)<3)
 {
 $otvet_serv = json_encode(array('text' => 'Поле Имя слишком короткое или пустое'));
 die($otvet_serv);
 }
 if(!is_numeric($user_Phone))
 {
 $otvet_serv = json_encode(array('text' => 'Номер телефона может состоять только из цифр'));
 die($otvet_serv);
 }






 $message = "<head>
    <meta charset='UTF-8'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <meta name='x-apple-disable-message-reformatting'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta content='telephone=no' name='format-detection'>
    <title></title>
    <!--[if (mso 16)]>
    <style type='text/css'>
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
    <!--[if !mso]><!-- -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i' rel='stylesheet'>
    <!--<![endif]-->
</head>

<body>
    <div class=‘es-wrapper-color’>
        <!--[if gte mso 9]>
			<v:background xmlns:v=‘urn:schemas-microsoft-com:vml’ fill=‘t’>
				<v:fill type=‘tile’ color=‘#f6f6f6’></v:fill>
			</v:background>
		<![endif]-->
        <table class=‘es-wrapper’ width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
            <tbody>
                <tr>
                    <td class=‘esd-email-paddings st-br’ valign=‘top’>
                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-header esd-header-popover’ align=‘center’>
                            <tbody>
                                <tr>
                                    <td class=‘esd-stripe esd-checked’ align=‘center’ style=‘background-image:url(https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/20841560930387653.jpg);background-color: transparent; background-position: center bottom; background-repeat: no-repeat;’ bgcolor=‘transparent’ background=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/20841560930387653.jpg’>
                                        <!--[if gte mso 9]> <v:rect xmlns:v=‘urn:schemas-microsoft-com:vml’ fill=‘true’ stroke=‘false’ style=‘mso-width-percent:1000;height:204px;’> <v:fill type=‘tile’ src=‘https://pics.esputnik.com/repository/home/17278/common/images/1546958148946.jpg’ color=‘#343434’ origin=‘0.5, 0’ position=‘0.5,0’ ></v:fill> <v:textbox inset=‘0,0,0,0’> <![endif]-->
                                        <div>
                                            <table bgcolor=‘transparent’ class=‘es-header-body’ align=‘center’ cellpadding=‘0’ cellspacing=‘0’ width=‘600’ style=‘background-color: transparent;’>
                                                <tbody>
                                                    <tr>
                                                        <td class=‘esd-structure es-p20t es-p20r es-p20l’ align=‘left’>
                                                            <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width=‘560’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                            <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’ href=‘https://stripo.email’><img src=‘https://pics.esputnik.com/repository/home/17278/common/images/1546957986307.png’ alt=‘online редактор писем нового поколения’ style=‘display: block; width: 126px; height: 117px;’ width=‘126’ title=‘online редактор писем нового поколения’></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align=‘center’ class=‘esd-block-spacer’ height=‘65’></td>
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
                                        <!--[if gte mso 9]> </v:textbox> </v:rect> <![endif]-->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-content’ align=‘center’>
                            <tbody>
                                <tr>
                                    <td class=‘esd-stripe’ align=‘center’ bgcolor=‘transparent’ style=‘background-color: transparent;’>
                                        <table bgcolor=‘transparent’ class=‘es-content-body’ align=‘center’ cellpadding=‘0’ cellspacing=‘0’ width=‘600’ style=‘background-color: transparent;’>
                                            <tbody>
                                                <tr>
                                                    <td class=‘esd-structure es-p10t es-p10b es-p20r es-p20l’ align=‘left’ style=‘background-position: left bottom;’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘560’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-menu’>
                                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ class=‘es-menu’>
                                                                                            <tbody>
                                                                                                <tr class=‘links’>
                                                                                                    <td align=‘center’ valign=‘top’ width=‘33.33%’ class=‘es-p10t es-p10b es-p5r es-p5l’ style=‘padding-bottom: 10px; padding-top: 10px; ‘ bgcolor=‘transparent’><a target=‘_blank’ href=‘https://stripo.email/ru/blog/’ style=‘ font-weight: bold; font-size: 16px;’>Блог</a></td>
                                                                                                    <td align=‘center’ valign=‘top’ width=‘33.33%’ class=‘es-p10t es-p10b es-p5r es-p5l’ style=‘padding-bottom: 10px; padding-top: 10px; ‘ bgcolor=‘transparent’><a target=‘_blank’ href=‘https://stripo.email/ru/pricing/’ style=‘ font-weight: bold; font-size: 16px;’>Цены</a></td>
                                                                                                    <td align=‘center’ valign=‘top’ width=‘33.33%’ class=‘es-p10t es-p10b es-p5r es-p5l’ style=‘padding-bottom: 10px; padding-top: 10px; ‘ bgcolor=‘transparent’><a target=‘_blank’ href=‘mailto:contact@stripo.email’ style=‘ font-weight: bold; font-size: 16px;’>Контакты</a></td>
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
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=‘esd-structure es-p30t es-p30r es-p30l’ align=‘left’ style=‘border-radius: 10px 10px 0px 0px; background-color: rgb(255, 255, 255); background-position: left bottom;’ bgcolor=‘#ffffff’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘background-position: left bottom;’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-text’>
                                                                                        <h1>Добро пожаловать в демо шаблон Stripo!</h1>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-text es-p20t’>
                                                                                        <p>Используйте Drag-n-Drop и HTML конструкторы&nbsp;писем: два редактора в одном.</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-p10t’>
                                                                                        <h2>Немного о Stripo:</h2>
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
                                                    <td class=‘esd-structure es-p5t es-p5b es-p30r es-p30l’ align=‘left’ style=‘border-radius: 0px 0px 10px 10px; background-position: left top; background-color: rgb(255, 255, 255);’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <ul>
                                                                                            <li>Пользователи из&nbsp;80 стран предпочитают наш редактор;</li>
                                                                                            <li>Интеграция с&nbsp;лучшими ESP и почтовыми клиентами;</li>
                                                                                            <li>Создавайте АМР письма и экспортируйте в 1-клик;</li>
                                                                                            <li>Используйте 300 бесплатных шаблонов и тысячи модулей.</li>
                                                                                        </ul>
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
                                                    <td class=‘esd-structure es-p20t es-p20b es-p20r es-p20l’ align=‘left’ style=‘background-position: left bottom;’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘560’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-text’>
                                                                                        <h3 style=‘line-height: 150%;’>С помощью этого шаблона мы продемонстрируем вам принцип работы в нашем редакторе писем</h3>
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-content’ align=‘center’>
                            <tbody>
                                <tr>
                                    <td class=‘esd-stripe’ align=‘center’>
                                        <table bgcolor=‘transparent’ class=‘es-content-body’ align=‘center’ cellpadding=‘0’ cellspacing=‘0’ width=‘600’ style=‘background-color: transparent;’>
                                            <tbody>
                                                <tr>
                                                    <td class=‘esd-structure es-p30t es-p10b es-p30r es-p30l’ align=‘left’ style=‘border-radius: 10px 10px 0px 0px; background-position: left bottom; background-color: rgb(255, 255, 255);’ bgcolor=‘#ffffff’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <h1 style=‘text-align: center;’>Полосы</h1>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-text es-p10t’>
                                                                                        <p>Полосами называют внешние структуры письма, которые задают фон и стили за границами письма.</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-p10t’>
                                                                                        <h2 style=‘text-align: center;’>Для чего использовать полосы?</h2>
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
                                                    <td class=‘esd-structure es-p5t es-p5b es-p30r es-p30l’ align=‘left’ style=‘border-radius: 0px 0px 10px 10px; background-position: left top; background-color: rgb(255, 255, 255);’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <ul>
                                                                                            <li>Задать общий фон письму;</li>
                                                                                            <li>Сделать продолжение баннера;</li>
                                                                                            <li>Выделить контент с помощью цвета полосы.</li>
                                                                                        </ul>
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
                                                    <td class=‘esd-structure es-p20r es-p20l’ align=‘left’ style=‘background-position: left bottom;’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘560’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-spacer’ height=‘40’></td>
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
                                                    <td class=‘esd-structure es-p30t es-p10b es-p30r es-p30l’ align=‘left’ style=‘border-radius: 10px 10px 0px 0px; background-position: left bottom; background-color: rgb(255, 255, 255);’ bgcolor=‘#ffffff’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <h1 style=‘text-align: center;’>Структуры</h1>
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
                                                    <td class=‘esd-structure es-p5t es-p20b es-p30r es-p30l’ align=‘left’ style=‘border-radius: 0px 0px 10px 10px; background-position: left bottom; background-color: rgb(255, 255, 255);’ bgcolor=‘#ffffff’>
                                                        <!--[if mso]><table width=‘540’ cellpadding=‘0’ cellspacing=‘0’><tr><td width=‘260’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘260’ class=‘esd-container-frame es-m-p20b’ align=‘left’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img class=‘adapt-img’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/19371561551719815.png’ alt style=‘display: block;’ width=‘260’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘20’></td><td width=‘260’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-right’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘260’ align=‘left’ class=‘esd-container-frame’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr class=‘es-mobile-hidden’>
                                                                                    <td align=‘center’ class=‘esd-block-spacer’ height=‘50’></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-m-txt-c’>
                                                                                        <p style=‘font-size: 16px;’>Структура&nbsp;— это область полосы, где вы размещаете контент. Она расположена между боковыми границами письма.</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-p20t es-m-txt-c’>
                                                                                        <p style=‘font-size: 16px;’>Используйте готовые структуру или создавайте кастомные прямо в настройках.</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-p20t es-m-txt-c’>
                                                                                        <p style=‘font-size: 16px;’>Сохраняйте структуру в собственной библиотеке модулей и используй ее в любом письме просто перетащив из библиотеки.</p>
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
                                                    <td class=‘esd-structure’ align=‘left’ style=‘background-position: left bottom;’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘600’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘background-position: left bottom;’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-spacer’ height=‘40’></td>
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
                                                    <td class=‘esd-structure es-p30t es-p10b es-p30r es-p30l’ align=‘left’ style=‘border-radius: 10px 10px 0px 0px; background-position: left bottom; background-color: rgb(255, 255, 255);’ bgcolor=‘#ffffff’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <h1 style=‘text-align: center;’>Блоки</h1>
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
                                                    <td class=‘esd-structure es-p20t es-p30r es-p30l’ align=‘left’ style=‘background-position: left bottom; background-color: rgb(255, 255, 255);’ bgcolor=‘#ffffff’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-m-txt-c’>
                                                                                        <p style=‘font-size: 16px;’>С помощью блоков можно наполнять контент письма. Помимо базовых, в Stripo доступны&nbsp;интерактивные блоки: таймер обратного отсчета, блок HTML и даже AMP-карусель.</p>
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
                                                    <td class=‘esd-structure es-p10t es-p20b es-p30r es-p30l’ align=‘left’ style=‘background-position: left bottom; background-color: rgb(255, 255, 255);’ bgcolor=‘#ffffff’>
                                                        <!--[if mso]><table dir=‘rtl’ width=‘540’ cellpadding=‘0’ cellspacing=‘0’><tr><td dir=‘ltr’ width=‘320’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘320’ align=‘left’ class=‘esd-container-frame es-m-p20b’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img class=‘adapt-img’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/53741561647530300.png’ alt style=‘display: block;’ width=‘316’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td dir=‘ltr’ width=‘20’></td><td dir=‘ltr’ width=‘200’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘200’ class=‘es-m-p0r esd-container-frame’ valign=‘top’ align=‘center’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-spacer’ height=‘30’></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-m-txt-c’>
                                                                                        <p style=‘font-size: 16px;’>&nbsp;Благодаря HTML блоку&nbsp;вы легко встраиваете в письмо кастомные и интерактивные элементы, которые создали с помощью стороннего инструмента.</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-p20t es-m-txt-c’>
                                                                                        <p style=‘font-size: 16px;’>Использование и сочетание блоков ограничено только вашей фантазией 😏</p>
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
                                                    <td class=‘esd-structure es-p30t es-p30b es-p30r es-p30l’ align=‘left’ style=‘background-position: left bottom; background-color: rgb(250, 250, 250);’ bgcolor=‘#fafafa’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <h2 style=‘text-align: center;’>Как использовать блоки?</h2>
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
                                                    <td style=‘border-radius: 0px 0px 6px 6px; background-position: left bottom; background-color: rgb(250, 250, 250);’ class=‘esd-structure es-p5t’ align=‘left’ bgcolor=‘#fafafa’>
                                                        <!--[if mso]><table width=‘600’ cellpadding=‘0’ cellspacing=‘0’><tr><td width=‘344’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘344’ class=‘es-m-p20b esd-container-frame’ align=‘left’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img class=‘adapt-img’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_ab7a5cf633955872c878a638bb1ba596/images/96071556175528209.jpg’ alt style=‘display: block;’ width=‘344’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘10’></td><td width=‘246’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-right’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘246’ align=‘left’ class=‘esd-container-frame’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-m-txt-c es-p10r es-p10l’>
                                                                                        <h3 style=‘color: #909090; font-size: 24px;’>Добавьте название товара</h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-m-txt-c es-p15t es-p10r es-p10l’>
                                                                                        <p style=‘color: #b5b5b5;’>Сделайте привлекательное описание</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-p15t es-p20b es-p15r es-p10l es-m-txt-c’>
                                                                                        <p style=‘color: #909090; font-size: 12px;’><strong>Укажите цену</strong></p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-button es-p10’><span class=‘es-button-border’><a href=‘https://my.stripo.email/cabinet/’ class=‘es-button’ target=‘_blank’>СОЗДАТЬ</a></span></td>
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
                                                    <td class=‘esd-structure’ align=‘left’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘600’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-spacer’ height=‘20’ bgcolor=‘#fafafa’></td>
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
                                                    <td style=‘border-radius: 6px; background-position: left bottom;’ class=‘esd-structure’ align=‘left’ bgcolor=‘#fafafa’>
                                                        <!--[if mso]><table dir=‘rtl’ width=‘600’ cellpadding=‘0’ cellspacing=‘0’><tr><td dir=‘ltr’ width=‘340’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-right’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘340’ align=‘left’ class=‘esd-container-frame es-m-p20b’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-image’><a target=‘_blank’><img class=‘adapt-img’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_ab7a5cf633955872c878a638bb1ba596/images/9831556175812408.jpg’ alt style=‘display: block;’ height=‘240’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td dir=‘ltr’ width=‘20’></td><td dir=‘ltr’ width=‘240’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘240’ class=‘esd-container-frame’ align=‘left’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-m-txt-c es-p10r es-p30l’>
                                                                                        <h3 style=‘color: #909090; font-size: 24px;’>Добавьте название товара</h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-m-txt-c es-p15t es-p10r es-p30l’>
                                                                                        <p style=‘color: #b5b5b5;’>Сделайте привлекательное описание</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-m-txt-c es-p15t es-p20b es-p10r es-p30l’>
                                                                                        <h3 style=‘color: #909090; font-size: 12px;’><strong>Укажите цену</strong></h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-button es-p10t es-p10b es-p10r es-p30l’><span class=‘es-button-border’><a href=‘https://my.stripo.email/cabinet/’ class=‘es-button’ target=‘_blank’ style=‘border-width: 10px 20px;’>СОЗДАТЬ</a></span></td>
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
                                                    <td class=‘esd-structure es-p30t es-p30b es-p30r es-p30l’ align=‘left’ style=‘background-position: left bottom; background-color: rgb(250, 250, 250);’ bgcolor=‘#fafafa’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-m-txt-c’>
                                                                                        <h2 style=‘text-align: center;’>Покажите товар со всех ракурсов с помощью роловер эффекта</h2>
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
                                                    <td class=‘esd-structure es-p20t es-p20b es-p30r es-p30l’ align=‘left’ style=‘background-position: left bottom; background-color: rgb(250, 250, 250);’ bgcolor=‘#fafafa’>
                                                        <!--[if mso]><table width=‘540’ cellpadding=‘0’ cellspacing=‘0’><tr><td width=‘186’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘166’ class=‘es-m-p0r es-m-p20b esd-container-frame’ align=‘center’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’ class=‘rollover’><img class=‘adapt-img rollover-first’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/86271560867004678.jpg’ alt style=‘display: block;’ width=‘166’>
                                                                                            <div style=‘mso-hide:all;’><img width=‘166’ class=‘adapt-img rollover-second’ style=‘max-height: 0px;’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/84361560867023906.jpg’ alt></div>
                                                                                        </a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class=‘es-hidden’ width=‘20’></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘165’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘165’ class=‘es-m-p20b esd-container-frame’ align=‘center’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’ class=‘rollover’><img class=‘adapt-img rollover-first’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/41471560867102067.jpg’ alt style=‘display: block;’ width=‘165’>
                                                                                            <div style=‘mso-hide:all;’><img width=‘165’ class=‘adapt-img rollover-second’ style=‘max-height: 0px;’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/4071560867108616.jpg’ alt></div>
                                                                                        </a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘20’></td><td width=‘169’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-right’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘169’ align=‘center’ class=‘esd-container-frame’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’ class=‘rollover’><img class=‘adapt-img rollover-first’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/70451560867276711.jpg’ alt style=‘display: block;’ width=‘169’>
                                                                                            <div style=‘mso-hide:all;’><img width=‘169’ class=‘adapt-img rollover-second’ style=‘max-height: 0px;’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/22621560867300508.jpg’ alt></div>
                                                                                        </a></td>
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
                                                    <td class=‘esd-structure es-p20t es-p20b es-p30r es-p30l’ align=‘left’ style=‘background-position: left bottom; background-color: rgb(250, 250, 250);’ bgcolor=‘#fafafa’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text es-m-txt-c’>
                                                                                        <h2 style=‘text-align: center;’>Создавайте баннер прямо в письме</h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-text es-m-txt-c’>
                                                                                        <p>Возьмите подходящую картинку, добавьте текст и баннер готов:</p>
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
                                                    <td class=‘esd-structure es-p20t es-p20b es-p30r es-p30l’ align=‘left’ style=‘background-position: left bottom; background-color: rgb(250, 250, 250);’ bgcolor=‘#fafafa’>
                                                        <!--[if mso]><table width=‘540’ cellpadding=‘0’ cellspacing=‘0’><tr><td width=‘260’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘260’ class=‘es-m-p20b esd-container-frame’ align=‘left’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-banner’ style=‘position: relative;’ esdev-config=‘h7’><a target=‘_blank’><img class=‘adapt-img esdev-stretch-width esdev-banner-rendered’ src=‘https://hpy.stripocdn.email/content/guids/bannerImgGuid/images/29501562762209587.png’ alt title width=‘100%’ style=‘display: block;’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘20’></td><td width=‘260’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-right’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘260’ align=‘left’ class=‘esd-container-frame’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-banner’ style=‘position: relative;’ esdev-config=‘h8’><a target=‘_blank’><img class=‘adapt-img esdev-stretch-width esdev-banner-rendered’ src=‘https://hpy.stripocdn.email/content/guids/bannerImgGuid/images/88921560863758089.png’ alt title width=‘260’ style=‘display: block;’></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-banner’ style=‘position: relative;’ esdev-config=‘h9’><a target=‘_blank’><img class=‘adapt-img esdev-stretch-width esdev-banner-rendered’ src=‘https://hpy.stripocdn.email/content/guids/bannerImgGuid/images/16671561552001471.png’ alt title width=‘260’ style=‘display: block;’></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-banner’ style=‘position: relative;’ esdev-config=‘h10’><a target=‘_blank’><img class=‘adapt-img esdev-stretch-width esdev-banner-rendered’ src=‘https://hpy.stripocdn.email/content/guids/bannerImgGuid/images/98521560863764870.png’ alt title width=‘260’ style=‘display: block;’></a></td>
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
                                                    <td class=‘esd-structure es-p20r es-p20l’ align=‘left’ style=‘background-color: rgb(250, 250, 250);’ bgcolor=‘#fafafa’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘560’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-button es-p10’><span class=‘es-button-border’><a href=‘https://my.stripo.email/cabinet/’ class=‘es-button’ target=‘_blank’>ПОПРОБОВАТЬ</a></span></td>
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
                                                    <td class=‘esd-structure es-p20t es-p30b es-p30r es-p30l’ align=‘left’ style=‘background-position: left bottom; background-color: rgb(250, 250, 250);’ bgcolor=‘#fafafa’>
                                                        <!--[if mso]><table width=‘540’ cellpadding=‘0’ 
                        cellspacing=‘0’><tr><td width=‘218’ valign=‘top’><![endif]-->
                                                        <table class=‘es-left’ cellspacing=‘0’ cellpadding=‘0’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td class=‘es-m-p20b esd-container-frame’ width=‘218’ align=‘left’>
                                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-p10b’ align=‘left’>
                                                                                        <h2>Видео с сайтов Vimeo и Youtube</h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text’ align=‘left’>
                                                                                        <p>Добавьте видео, чтоб поздравить клиентов с праздником или же наглядно показать, как пользоваться вашим&nbsp;сервисом</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘20’></td><td width=‘302’ valign=‘top’><![endif]-->
                                                        <table class=‘es-right’ cellspacing=‘0’ cellpadding=‘0’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td class=‘esd-container-frame’ width=‘302’ align=‘left’>
                                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-video’ align=‘center’><a target=‘_blank’ href=‘https://www.youtube.com/watch?v=ryqOEPk51Lg’><img class=‘adapt-img esdev-stretch-width’ src=‘https://hpy.stripocdn.email/content/guids/videoImgGuid/images/98431554472643793.png’ alt=‘Stripo.email editor’ esdev-video-origin=‘https://hpy.stripocdn.email/content/guids/videoImgGuid/images/85841554472642499’ title=‘Stripo.email editor’ width=‘302’></a></td>
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
                                                    <td class=‘esd-structure es-p20r es-p20l’ align=‘left’ style=‘background-position: left bottom;’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘560’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘background-position: left bottom;’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-spacer’ height=‘40’></td>
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-content’ align=‘center’>
                            <tbody>
                                <tr>
                                    <td class=‘esd-stripe’ esd-custom-block-id=‘27516’ style=‘background-color: transparent;’ bgcolor=‘transparent’ align=‘center’>
                                        <table class=‘es-content-body’ style=‘background-color: rgb(247, 247, 247);’ width=‘600’ cellspacing=‘0’ cellpadding=‘0’ bgcolor=‘transparent’ align=‘center’>
                                            <tbody>
                                                <tr>
                                                    <td class=‘esd-structure es-p40t es-p30r es-p30l’ style=‘background-position: left bottom; background-color: rgb(255, 255, 255);’ align=‘left’ bgcolor=‘#ffffff’>
                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                            <tbody>
                                                                <tr>
                                                                    <td class=‘esd-container-frame’ width=‘540’ valign=‘top’ align=‘center’>
                                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-p10b es-m-txt-c’ align=‘left’>
                                                                                        <h2>Автоматизируйте рутинные процессы&nbsp;(Smart - Элементы)</h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-p5b es-m-txt-c’ align=‘left’>
                                                                                        <p>Экономьте время на создании писем за счет автоматизации рутинных процессов. Smart-модули позволяют менят контент простой изменив ссылку. Пример с товарами на Amazon:</p>
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
                                                    <td class=‘esd-structure es-p20t es-p30r es-p30l’ esd-custom-block-id=‘24117’ style=‘background-color: rgb(255, 255, 255); background-position: left bottom;’ bgcolor=‘#ffffff’ align=‘left’>
                                                        <!--[if mso]><table width=‘540’ cellpadding=‘0’ 
                        cellspacing=‘0’><tr><td width=‘258’ valign=‘top’><![endif]-->
                                                        <table class=‘es-left’ cellspacing=‘0’ cellpadding=‘0’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td class=‘esd-container-frame’ width=‘258’ valign=‘top’ align=‘center’ esdev-config=‘h1’>
                                                                        <table style=‘background-color: transparent; background-position: left bottom;’ width=‘100%’ cellspacing=‘0’ cellpadding=‘0’ bgcolor=‘transparent’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-image es-p15b’ align=‘center’><a target=‘_blank’ href=‘https://www.amazon.com/Womens-Pockets-Buttons-Jumpsuit-Playsuit/dp/B07TDJN4Y5/ref=sr_1_10?brr=1&qid=1561544401&rd=1&s=apparel&sr=1-10’><img class=‘adapt-img’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/61101561544474753.jpg’ alt=‘Vetinee Women's Casual Button Down Blouse Shirts Cuffed Sleeve Loose T-Shirt Tops’ title=‘Vetinee Women's Casual Button Down Blouse Shirts Cuffed Sleeve Loose T-Shirt Tops’ style=‘width: 258px;’ height=‘321.06666666666666’></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-p10b es-m-txt-c’ align=‘left’>
                                                                                        <p class=‘product-name’>Vetinee Women's Casual Button Down Blouse Shirts Cuffed Sleeve Loose T-Shirt Tops</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-m-txt-c’ align=‘left’>
                                                                                        <p style=‘color: #999999;’><s class=‘old-price’>$34.99</s></p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-p5t es-m-txt-c’ align=‘left’>
                                                                                        <h2 class=‘price’ style=‘font-size: 18px; color: #0b5394;’>$59.95</h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-button es-p15t es-p15b’ align=‘left’><span class=‘es-button-border’><a href=‘https://www.amazon.com/Womens-Pockets-Buttons-Jumpsuit-Playsuit/dp/B07TDJN4Y5/ref=sr_1_10?brr=1&qid=1561544401&rd=1&s=apparel&sr=1-10’ class=‘es-button’ target=‘_blank’>Добавить в корзину</a></span></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘20’></td><td width=‘262’ valign=‘top’><![endif]-->
                                                        <table class=‘es-right’ cellspacing=‘0’ cellpadding=‘0’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td class=‘esd-container-frame’ width=‘262’ valign=‘top’ align=‘center’ esdev-config=‘h2’>
                                                                        <table style=‘background-color: transparent; background-position: left bottom;’ width=‘100%’ cellspacing=‘0’ cellpadding=‘0’ bgcolor=‘transparent’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-image es-p15b’ align=‘center’><a target=‘_blank’ href=‘https://www.amazon.com/Happy-Sailed-Rompert-Apricot-Playsuits/dp/B07SQ6X7KR/ref=sr_1_29?brr=1&qid=1561544562&rd=1&s=apparel&sr=1-29’><img class=‘adapt-img’ src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/11441561544765439.jpg’ alt=‘Happy Sailed Womens Casual Short Sleeve Belted Keyhole Back One Piece Jumpsuit Romper’ title=‘Happy Sailed Womens Casual Short Sleeve Belted Keyhole Back One Piece Jumpsuit Romper’ style=‘width: 260px;’ height=‘321’></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-p10b es-m-txt-c’ align=‘left’>
                                                                                        <p class=‘product-name’>Happy Sailed Womens Casual Short Sleeve Belted Keyhole Back One Piece Jumpsuit Romper</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-m-txt-c’ align=‘left’>
                                                                                        <p style=‘color: #999999;’><s class=‘old-price’>$119.95</s></p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-p5t es-m-txt-c’ align=‘left’>
                                                                                        <h2 class=‘price’ style=‘font-size: 18px; color: rgb(11, 83, 148);’>$59.95</h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-button es-p15t es-p15b’ align=‘left’><span class=‘es-button-border’><a href=‘https://www.amazon.com/Happy-Sailed-Rompert-Apricot-Playsuits/dp/B07SQ6X7KR/ref=sr_1_29?brr=1&qid=1561544562&rd=1&s=apparel&sr=1-29’ class=‘es-button’ target=‘_blank’>Добавить в корзину</a></span></td>
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
                                                    <td class=‘esd-structure’ align=‘left’ style=‘border-radius: 0px 0px 10px 10px; background-position: center bottom; background-color: rgb(255, 255, 255);’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘600’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-spacer’ height=‘15’></td>
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
                                                    <td class=‘esd-structure’ align=‘left’ style=‘background-position: left top;’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘600’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-spacer’ height=‘40’></td>
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-content’ align=‘center’>
                            <tbody>
                                <tr>
                                    <td class=‘esd-stripe’ align=‘center’>
                                        <table bgcolor=‘transparent’ class=‘es-content-body’ align=‘center’ cellpadding=‘0’ cellspacing=‘0’ width=‘600’>
                                            <tbody>
                                                <tr>
                                                    <td class=‘esd-structure es-p30r es-p30l’ align=‘left’ style=‘border-radius: 10px 10px 0px 0px; background-position: left top; background-color: rgb(255, 255, 255);’ bgcolor=‘#ffffff’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’ style=‘background-position: left top;’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-m-txt-c es-p30t es-p10b’ align=‘center’>
                                                                                        <h2>Интеграция с ESP&nbsp;</h2>
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
                                                    <td class=‘esd-structure es-p30r es-p30l’ align=‘left’ style=‘background-position: left top; background-color: rgb(255, 255, 255);’ bgcolor=‘#ffffff’>
                                                        <!--[if mso]><table width=‘540’ cellpadding=‘0’ cellspacing=‘0’><tr><td width=‘140’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘120’ class=‘esd-container-frame es-m-p20b’ align=‘left’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/37141561638298502.png’ alt style=‘display: block;’ width=‘120’></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/64991561638389239.png’ alt style=‘display: block;’ width=‘120’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class=‘es-hidden’ width=‘20’></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘140’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘120’ align=‘left’ class=‘esd-container-frame es-m-p20b’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/72761561638313659.png’ alt style=‘display: block;’ width=‘120’></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/301561638324977.png’ alt style=‘display: block;’ width=‘120’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class=‘es-hidden’ width=‘20’></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘120’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘120’ align=‘left’ class=‘esd-container-frame es-m-p20b’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/31721561638336092.png’ alt style=‘display: block;’ width=‘120’></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/31831561638345131.png’ alt style=‘display: block;’ width=‘120’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘20’></td><td width=‘120’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-right’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘120’ align=‘left’ class=‘esd-container-frame’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/93471561638488815.png’ alt style=‘display: block;’ width=‘120’></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/40721561638581854.png’ alt style=‘display: block;’ width=‘120’></a></td>
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
                                                    <td class=‘esd-structure es-p30r es-p30l’ align=‘left’ style=‘background-position: left top; background-color: rgb(255, 255, 255);’ bgcolor=‘#ffffff’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-m-txt-c es-p5t es-p5b’ align=‘left’>
                                                                                        <p>Экспортируйте ваши письмо в 1клик, к вашему выбору более 15&nbsp;ESP, включая: Mailchimp, Campaign Monitor, Constant Contact, Mailigen, Braze, SendGrid, eSputnik,&nbsp;GetResponse, Sales force MC и даже почтовиками&nbsp;GMail и Outlook. <br></p>
                                                                                        <p><br></p>
                                                                                        <p>Кроме того,&nbsp; письма можно сохранить как&nbsp;HTML- или&nbsp;PDF-файл, а также экспортировать как AMPHTML.</p>
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
                                                    <td class=‘esd-structure es-p10t es-p10b es-p30r es-p30l’ align=‘left’ style=‘border-radius: 0px 0px 10px 10px; background-position: left bottom; background-color: rgb(255, 255, 255);’>
                                                        <!--[if mso]><table width=‘540’ cellpadding=‘0’ cellspacing=‘0’><tr><td width=‘140’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘120’ class=‘esd-container-frame es-m-p20b’ align=‘left’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/31801561640721566.png’ alt style=‘display: block;’ width=‘120’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class=‘es-hidden’ width=‘20’></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘140’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘120’ align=‘left’ class=‘esd-container-frame es-m-p20b’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/63201561638733708.png’ alt style=‘display: block;’ width=‘120’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class=‘es-hidden’ width=‘20’></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘120’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-left’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘120’ align=‘left’ class=‘esd-container-frame es-m-p20b’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/10881561638741342.png’ alt style=‘display: block;’ height=‘120’></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘20’></td><td width=‘120’ valign=‘top’><![endif]-->
                                                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘es-right’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘120’ align=‘left’ class=‘esd-container-frame’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-image’><a target=‘_blank’><img src=‘https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/13041561638750685.png’ alt style=‘display: block;’ height=‘120’></a></td>
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
                                                    <td class=‘esd-structure’ align=‘left’ style=‘background-position: left top;’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘600’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-spacer’ height=‘40’ bgcolor=‘transparent’></td>
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding=‘0’ cellspacing=‘0’ class=‘esd-footer-popover es-footer’ align=‘center’>
                            <tbody>
                                <tr>
                                    <td class=‘esd-stripe esd-checked’ align=‘center’ style=‘background-image:url(https://hpy.stripocdn.email/content/guids/CABINET_10c8a4b90e25cfa9ce9c9396c9af24b6/images/31751560930679125.jpg);background-position: left bottom; background-repeat: no-repeat;’>
                                        <table bgcolor=‘#31cb4b’ class=‘es-footer-body’ align=‘center’ cellpadding=‘0’ cellspacing=‘0’ width=‘600’>
                                            <tbody>
                                                <tr>
                                                    <td class=‘esd-structure es-p20t es-p20b es-p30r es-p30l’ align=‘left’ style=‘background-position: left top; background-color: rgb(250, 250, 250); border-radius: 10px 10px 0px 0px;’ bgcolor=‘#fafafa’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘540’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘left’ class=‘esd-block-text’>
                                                                                        <h2 style=‘text-align: center; line-height: 150%;’>Не забудьте создать футер с контактной информацией для связи с подписчиками</h2>
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
                                                    <td class=‘esd-structure es-p10t es-p20b es-p30r es-p30l’ style=‘background-position: left top; background-color: rgb(250, 250, 250);’ align=‘left’ bgcolor=‘#fafafa’>
                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                            <tbody>
                                                                <tr>
                                                                    <td class=‘esd-container-frame’ width=‘540’ valign=‘top’ align=‘center’>
                                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-p10b’ align=‘left’>
                                                                                        <h2>Соц сети</h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text es-p5b’ align=‘left’>
                                                                                        <p>Добавьте&nbsp;иконки соц сетей в футер вашего письма, чтоб подписчики&nbsp;могли связаться с вами любым удобным им способом и чтоб дать им возможность отслеживать ваши новости в соц сетях.<br></p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class=‘esd-block-text’ align=‘left’>
                                                                                        <p>К тому же, использование двух каналов одновременно существенно повышает&nbsp;CTR.</p>
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
                                                    <td class=‘esd-structure es-p30t es-p30b es-p30r es-p30l’ style=‘border-radius: 0px 0px 10px 10px; background-position: left top; background-color: rgb(239, 239, 239);’ align=‘left’ bgcolor=‘#efefef’>
                                                        <!--[if mso]><table width=‘540’ cellpadding=‘0’ 
                            cellspacing=‘0’><tr><td width=‘186’ valign=‘top’><![endif]-->
                                                        <table class=‘es-left’ cellspacing=‘0’ cellpadding=‘0’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td class=‘es-m-p0r es-m-p20b esd-container-frame’ width=‘166’ align=‘center’>
                                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-social es-m-txt-c’ align=‘left’>
                                                                                        <table class=‘es-table-not-adapt es-social’ cellspacing=‘0’ cellpadding=‘0’>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class=‘es-p10r’ valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Facebook’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/circle-colored/facebook-circle-colored.png’ alt=‘Fb’ width=‘32’></a></td>
                                                                                                    <td class=‘es-p10r’ valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Twitter’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/circle-colored/twitter-circle-colored.png’ alt=‘Tw’ width=‘32’></a></td>
                                                                                                    <td class=‘es-p10r’ valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Instagram’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/circle-colored/instagram-circle-colored.png’ alt=‘Inst’ width=‘32’></a></td>
                                                                                                    <td valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Youtube’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/circle-colored/youtube-circle-colored.png’ alt=‘Yt’ width=‘32’></a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class=‘es-hidden’ width=‘20’></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width=‘165’ valign=‘top’><![endif]-->
                                                        <table class=‘es-left’ cellspacing=‘0’ cellpadding=‘0’ align=‘left’>
                                                            <tbody>
                                                                <tr>
                                                                    <td class=‘es-m-p20b esd-container-frame’ width=‘165’ align=‘center’>
                                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-social es-m-txt-c’ align=‘left’>
                                                                                        <table class=‘es-table-not-adapt es-social’ cellspacing=‘0’ cellpadding=‘0’>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class=‘es-p10r’ valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Facebook’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/rounded-gray-bordered/facebook-rounded-gray-bordered.png’ alt=‘Fb’ width=‘32’></a></td>
                                                                                                    <td class=‘es-p10r’ valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Twitter’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/rounded-gray-bordered/twitter-rounded-gray-bordered.png’ alt=‘Tw’ width=‘32’></a></td>
                                                                                                    <td class=‘es-p10r’ valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Instagram’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/rounded-gray-bordered/instagram-rounded-gray-bordered.png’ alt=‘Inst’ width=‘32’></a></td>
                                                                                                    <td valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Youtube’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/rounded-gray-bordered/youtube-rounded-gray-bordered.png’ alt=‘Yt’ width=‘32’></a></td>
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
                                                        <!--[if mso]></td><td width=‘20’></td><td width=‘169’ valign=‘top’><![endif]-->
                                                        <table class=‘es-right’ cellspacing=‘0’ cellpadding=‘0’ align=‘right’>
                                                            <tbody>
                                                                <tr>
                                                                    <td class=‘esd-container-frame’ width=‘169’ align=‘center’>
                                                                        <table width=‘100%’ cellspacing=‘0’ cellpadding=‘0’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class=‘esd-block-social es-m-txt-c’ align=‘left’>
                                                                                        <table class=‘es-table-not-adapt es-social’ cellspacing=‘0’ cellpadding=‘0’>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class=‘es-p10r’ valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Facebook’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png’ alt=‘Fb’ width=‘32’></a></td>
                                                                                                    <td class=‘es-p10r’ valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Twitter’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/logo-black/twitter-logo-black.png’ alt=‘Tw’ width=‘32’></a></td>
                                                                                                    <td class=‘es-p10r’ valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Instagram’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/logo-black/instagram-logo-black.png’ alt=‘Inst’ width=‘32’></a></td>
                                                                                                    <td valign=‘top’ align=‘center’><a target=‘_blank’ href><img title=‘Youtube’ src=‘https://hpy.stripocdn.email/content/assets/img/social-icons/logo-black/youtube-logo-black.png’ alt=‘Yt’ width=‘32’></a></td>
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
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=‘esd-structure’ align=‘left’ style=‘background-position: left top;’>
                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                            <tbody>
                                                                <tr>
                                                                    <td width=‘600’ class=‘esd-container-frame’ align=‘center’ valign=‘top’>
                                                                        <table cellpadding=‘0’ cellspacing=‘0’ width=‘100%’>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align=‘center’ class=‘esd-block-spacer’ height=‘40’></td>
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


mail($to_Email, $subject, $message, 'Content-type: text/html; charset=iso-8859-1' . "From: rcssend@lockdoor.ru.com\r\n" );

 }
 ?>