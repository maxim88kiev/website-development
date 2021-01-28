<?php
require_once( 'wp-load.php' );
session_start();
$upload_photo = '';

if (isset($_POST['dopinfo'])) $dopinfo = clean($_POST['dopinfo']);
if (isset($_POST['dopinfo_id'])) $dopinfo_id = clean($_POST['dopinfo_id']);
if (isset($_POST['video'])) $video = clean($_POST['video']);
if (isset($_POST['salon'])) $salon = clean($_POST["salon"]);
if (isset($_POST['telephone'])) $telephone = clean($_POST["telephone"]);
if (isset($_POST['city'])) $city = clean($_POST["city"]);
if (isset($_POST['address'])) $address = clean($_POST["address"]);
if (isset($_POST['site'])) $site = clean($_POST["site"]);
if (isset($_POST['metro'])) $metro = clean($_POST["metro"]);
if (isset($_POST['area'])) $area = clean($_POST["area"]);
if (isset($_POST['form'])) $form = clean($_POST["form"]);
if (isset($_POST['email'])) $email = clean($_POST["email"]);
if (isset($_POST['name'])) $name = clean($_POST["name"]);
if (isset($_POST['salon_number'])) $salon_number = clean($_POST["salon_number"]);






function files_unload_procedure($images, $upload_photo_procedure){
    $count = count($images);
    if ($count) {
        $dirs = scandir($upload_photo_procedure);
        $dirs = array_slice($dirs, 2);
        $d_count = count($dirs);
        $upload_photo_procedure .= ($d_count ? $dirs[$d_count - 1] + 1 : 1) . '/';
        mkdir($upload_photo_procedure);
        $upload_photo = $upload_photo_procedure;
        for ($i = 0; $i < $count; $i++) {
            $upload_file = $upload_photo_procedure . rand(0,9999999) . date('d_m_Y') . time() . basename($images[$i]['name']);
            if (move_uploaded_file($images[$i]['tmp_name'], $upload_file)) {
            } else {
            }
        }
        return $upload_photo_procedure;
    }return null;
}

function files_unload_salon($images, $upload_photo_salon){
    $count = count($images);
    if ($count) {
        $dirs = scandir($upload_photo_salon);
        $dirs = array_slice($dirs, 2);
        $d_count = count($dirs);
        $upload_photo_salon .= ($d_count ? $dirs[$d_count - 1] + 1 : 1) . '/';
        mkdir($upload_photo_salon);
        $upload_photo = $upload_photo_salon;
        for ($i = 0; $i < $count; $i++) {
            $upload_file = $upload_photo_salon . rand(0,9999999) . date('d_m_Y') . time() . basename($images[$i]['name']);
            if (move_uploaded_file($images[$i]['tmp_name'], $upload_file)) {
            } else {
            }
        }
        return $upload_photo_salon;
    }return null;
}


if( isset( $_GET['uploadfiles_1'] ) ){
    $upload_photo_procedure = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/endosphere/catalog/view/img/upload_photo_procedure/';
    $upload_photo_number = files_unload_procedure($_FILES, $upload_photo_procedure);
}
if( isset( $_GET['uploadfiles_2'] ) ){
    $upload_photo_salon = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/endosphere/catalog/view/img/upload_photo_salon/';
    $upload_photo_salon = files_unload_salon($_FILES, $upload_photo_salon);
}

function clean($value = "")
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}

function check_length($value = "", $min, $max)
{
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}


// Формирование заголовка письма
$subject = "Сообщение с сайта Endosfera";
$headers = "From: {$subject}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
$headers .= "Content-Transfer-Encoding: base64";
$title_admin = "";

if ($form == 'form_1') {
    // Формирование тела письма
    $msg = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Форма 'Фото процедур'</h2>\r\n";
    $msg .= "<p><strong>Фото до и после: </strong>" . $upload_photo_number . "</p>\r\n";
    $msg .= "</body></html>";
    $title_admin = "Форма 'Фото процедур'";
} elseif ($form == 'form_2') {
    // Формирование тела письма
    $msg = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Форма 'Фото салона'</h2>\r\n";
    $msg .= "<p><strong>Название салона: </strong>" . $salon . "</p>\r\n";
    $msg .= "<p><strong>Номер телефона: </strong>" . $telephone . "</p>\r\n";
    $msg .= "<p><strong>Город: </strong>" . $city . "</p>\r\n";
    $msg .= "<p><strong>Адрес: </strong>" . $address . "</p>\r\n";
    $msg .= "<p><strong>Сайт салона: </strong>" . $site . "</p>\r\n";
    $msg .= "<p><strong>Станция метро: </strong>" . $metro . "</p>\r\n";
    $msg .= "<p><strong>Район города: </strong>" . $area . "</p>\r\n";
    $msg .= "<p><strong>Фото салона: </strong>" . $upload_photo_salon . "</p>\r\n";
    $msg .= "</body></html>";
    $title_admin = "Форма 'Фото салона'";
} elseif ($form == 'form_3') {
    // Формирование тела письма
    $msg = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Форма 'Видео'</h2>\r\n";
    $msg .= "<p><strong>Ссылка на видео: </strong>" . $video . "</p>\r\n";
    $msg .= "</body></html>";
    $title_admin = "Форма 'Видео'";
} elseif ($form == 'form_4') {
    // Формирование тела письма
    $msg = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Форма 'Жалоба'</h2>\r\n";
    $msg .= "<p><strong>Жалоба на коментарий: </strong>" . $dopinfo . "</p>\r\n";
    $msg .= "<p><strong>id: </strong>" . $dopinfo_id . "</p>\r\n";
    $msg .= "</body></html>";
    $title_admin = "Форма 'Жалоба'";
}elseif ($form == 'form_5') {
    // Формирование тела письма
    $msg = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Форма 'Получить консультацию'</h2>\r\n";
    $msg .= "<p><strong>Салон: </strong>" . $salon_number . "</p>\r\n";
    $msg .= "<p><strong>Номер телефона: </strong>" . $telephone . "</p>\r\n";
    $msg .= "<p><strong>Имя: </strong>" . $name . "</p>\r\n";
    $msg .= "<p><strong>Email: </strong>" . $email . "</p>\r\n";
    $msg .= "</body></html>";
    $title_admin = "Форма 'Получить консультацию' (".$salon_number.")";
}

// Ваш адрес и тема сообщения
//$sendto = "maxim88kiev@gmail.com";
$sendto = "lumenis11@ukr.net";

$from = "\r\n Endosphere: \r\n";



class Mail
{
    /**
     * От кого.
     */
    public $fromEmail = '';
    public $fromName = '';

    /**
     * Кому.
     */
    public $toEmail = '';
    public $toName = '';

    /**
     * Тема.
     */
    public $subject = '';

    /**
     * Текст.
     */


    public $body = '';

    /**
     * Массив заголовков файлов.
     */
    private $_files = array();

    /**
     * Управление дампированием.
     */
    public $dump = false;

    /**
     * Директория куда сохранять письма.
     */
    public $dumpPath = '';

    /**
     * CSS стили для тегов письма.
     */
    private $_styles = array(
        'body' => 'margin: 0 0 0 0; padding: 10px 10px 10px 10px; background: #ffffff; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'a' => 'color: #003399; text-decoration: underline; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'p' => 'margin: 0 0 20px 0; padding: 0 0 0 0; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'ul' => 'margin: 0 0 20px 20px; padding: 0 0 0 0; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'ol' => 'margin: 0 0 20px 20px; padding: 0 0 0 0; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'table' => 'margin: 0 0 20px 0; border: 1px solid #dddddd; border-collapse: collapse;',
        'th' => 'padding: 10px; border: 1px solid #dddddd; vertical-align: middle; background-color: #eeeeee; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'td' => 'padding: 10px; border: 1px solid #dddddd; vertical-align: middle; background-color: #ffffff; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'h1' => 'margin: 0 0 20px 0; padding: 0 0 0 0; color: #000000; font-size: 22px; font-family: Arial, Helvetica, sans-serif; line-height: 26px; font-weight: bold;',
        'h2' => 'margin: 0 0 20px 0; padding: 0 0 0 0; color: #000000; font-size: 20px; font-family: Arial, Helvetica, sans-serif; line-height: 24px; font-weight: bold;',
        'h3' => 'margin: 0 0 20px 0; padding: 0 0 0 0; color: #000000; font-size: 18px; font-family: Arial, Helvetica, sans-serif; line-height: 22px; font-weight: bold;',
        'h4' => 'margin: 0 0 20px 0; padding: 0 0 0 0; color: #000000; font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px; font-weight: bold;',
        'hr' => 'height: 1px; border: none; color: #dddddd; background: #dddddd; margin: 0 0 20px 0;'
    );

    /**
     * Проверка существования файла.
     * Если директория не существует - пытается её создать.
     * Если файл существует - к концу файла приписывает префикс.
     */
    private function safeFile($filename)
    {
        $dir = dirname($filename);
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $info = pathinfo($filename);
        $name = $dir . '/' . $info['filename'];
        $ext = (empty($info['extension'])) ? '' : '.' . $info['extension'];
        $prefix = '';

        if (is_file($name . $ext)) {
            $i = 1;
            $prefix = '_' . $i;

            while (is_file($name . $prefix . $ext)) {
                $prefix = '_' . ++$i;
            }
        }

        return $name . $prefix . $ext;
    }

    /**
     * От кого.
     */
    public function from($email, $name = null)
    {
        $this->fromEmail = $email;
        $this->fromName = $name;
    }

    /**
     * Кому.
     */
    public function to($email, $name = null)
    {
        $this->toEmail = $email;
        $this->toName = $name;
    }

    /**
     * Добавление файла к письму.
     */
    public function addFile($filename)
    {
        if (is_file($filename)) {
            $name = basename($filename);
            $fp = fopen($filename, 'rb');
            $file = fread($fp, filesize($filename));
            fclose($fp);
            $this->_files[] = array(
                'Content-Type: application/octet-stream; name="' . $name . '"',
                'Content-Transfer-Encoding: base64',
                'Content-Disposition: attachment; filename="' . $name . '"',
                '',
                chunk_split(base64_encode($file)),
            );
        }
    }

    /**
     * Добавление к тегам стили.
     */
    public function addHtmlStyle($html)
    {
        foreach ($this->_styles as $tag => $style) {
            preg_match_all('/<' . $tag . '([\s].*?)?>/i', $html, $matchs, PREG_SET_ORDER);
            foreach ($matchs as $match) {
                $attrs = array();
                if (!empty($match[1])) {
                    preg_match_all('/[ ]?(.*?)=[\"|\'](.*?)[\"|\'][ ]?/', $match[1], $chanks);
                    if (!empty($chanks[1]) && !empty($chanks[2])) {
                        $attrs = array_combine($chanks[1], $chanks[2]);
                    }
                }
                if (empty($attrs['style'])) {
                    $attrs['style'] = $style;
                } else {
                    $attrs['style'] = rtrim($attrs['style'], '; ') . '; ' . $style;
                }

                $compile = array();
                foreach ($attrs as $name => $value) {
                    $compile[] = $name . '="' . $value . '"';
                }

                $html = str_replace($match[0], '<' . $tag . ' ' . implode(' ', $compile) . '>', $html);
            }
        }

        return $html;
    }

    /**
     * Отправка.
     */
    public function send()
    {
        if (empty($this->toEmail)) {
            return false;
        }

        // От кого.
        $from = (empty($this->fromName)) ? $this->fromEmail : '=?UTF-8?B?' . base64_encode($this->fromName) . '?= <' . $this->fromEmail . '>';

        // Кому.
        $array_to = array();
        foreach (explode(',', $this->toEmail) as $row) {
            $row = trim($row);
            if (!empty($row)) {
                $array_to[] = (empty($this->toName)) ? $row : '=?UTF-8?B?' . base64_encode($this->toName) . '?= <' . $row . '>';
            }
        }

        // Тема письма.
        $subject = (empty($this->subject)) ? 'No subject' : $this->subject;

        // Текст письма.
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			</head>
			<body>
				' . $this->body . '
			</body>
		</html>';

        // Добавление стилей к тегам.
        $body = $this->addHtmlStyle($body);

        $boundary = md5(uniqid(time()));

        // Заголовок письма.
        $headers = array(
            'Content-Type: multipart/mixed; boundary="' . $boundary . '"',
            'Content-Transfer-Encoding: 7bit',
            'MIME-Version: 1.0',
            'From: ' . $from,
            'Date: ' . date('r')
        );

        // Тело письма.
        $message = array(
            '--' . $boundary,
            'Content-Type: text/html; charset=UTF-8',
            'Content-Transfer-Encoding: base64',
            '',
            chunk_split(base64_encode($body))
        );

        if (!empty($this->_files)) {
            foreach ($this->_files as $row) {
                $message = array_merge($message, array('', '--' . $boundary), $row);
            }
        }

        $message[] = '';
        $message[] = '--' . $boundary . '--';
        $res = array();

        foreach ($array_to as $to) {
            // Дамп письма в файл.
            if ($this->dump == true) {
                if (empty($this->dumpPath)) {
                    $this->dumpPath = dirname(__FILE__) . '/sendmail';
                }

                $dump = array_merge($headers, array('To: ' . $to, 'Subject: ' . $subject, ''), $message);
                $file = $this->safeFile($this->dumpPath . '/' . date('Y-m-d_H-i-s') . '.eml');
                file_put_contents($file, implode("\r\n", $dump));
            }
            $res[] = mb_send_mail($to, $subject, implode("\r\n", $message), implode("\r\n", $headers));
        }

        return $res;
    }
}

if ($_SESSION['form']) {
    echo 'Вы уже отправили заявку.';
} else {

//$mailSMTP = new Mail();
//$mailSMTP->body = $msg;
//$mailSMTP->subject = $subject;
//$mailSMTP->toEmail = $sendto;
//$mailSMTP->fromEmail = 'maxim88kiev@gmail.com';
//$mailSMTP->fromName = '';
//$mailSMTP->toName = 'test_name';
//$result = $mailSMTP->send();


$headers = "Content-type: text/html; charset=\"utf-8\"";


$result = wp_mail($sendto, $subject, $msg, $headers);
$post_data = array(
    'post_title'    => $title_admin,
    'post_content'  => $msg,
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type' => 'mail',
);
wp_insert_post( $post_data );

if ($result) {
    echo 'Заявка отправлена';
//        echo '<div class="send">
//	Спасибо за заявку!
//	</div>';
} else {
    echo 'Заявка не отправлена';
//        echo '<div class="send">
//	Заявка не отправлена.
//	</div>';
}
//    echo "<meta http-equiv=\"refresh\" content=\"4;url=" . $_SERVER['HTTP_REFERER'] . "\">";
}
$_SESSION['form'] = $form;

?>

