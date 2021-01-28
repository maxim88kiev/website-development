<?php
/**
 * Автор: 2z.dizayn@gmail.com
 * Дата создание: 24.10.2018
 *///error_reporting('E_ALL');
//phpinfo();


$email   =  htmlspecialchars($_POST['email']);
$name = htmlspecialchars($_POST['name']);
$mess  = htmlspecialchars($_POST['mess']);
$phone  = htmlspecialchars($_POST['phone']);

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}


// Формирование заголовка письма
$subject = "Сообщение с формы 'Задать вопрос'";
$headers = "From: {$subject}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
$headers .= "Content-Transfer-Encoding: base64";


// Формирование тела письма
$msg = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта: sto.keis.com.ua</h2>\r\n";
$msg .= "<p><strong>Email: </strong>{$email}</p>\r\n";
$msg .= "<p><strong>Имя: </strong>{$name}</p>\r\n";
$msg .= "<p><strong>Номер телефона: </strong>{$phone}</p>\r\n";
$msg .= "<p><strong>Сообщение: </strong>{$mess}</p>\r\n";

$msg .= "</body></html>";


// Ваш адрес и тема сообщения
$sendto = "maxim88kiev@gmail.com";


$from = "$name\r\n";




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
        'body'  => 'margin: 0 0 0 0; padding: 10px 10px 10px 10px; background: #ffffff; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'a'     => 'color: #003399; text-decoration: underline; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'p'     => 'margin: 0 0 20px 0; padding: 0 0 0 0; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'ul'    => 'margin: 0 0 20px 20px; padding: 0 0 0 0; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'ol'    => 'margin: 0 0 20px 20px; padding: 0 0 0 0; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'table' => 'margin: 0 0 20px 0; border: 1px solid #dddddd; border-collapse: collapse;',
        'th'    => 'padding: 10px; border: 1px solid #dddddd; vertical-align: middle; background-color: #eeeeee; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'td'    => 'padding: 10px; border: 1px solid #dddddd; vertical-align: middle; background-color: #ffffff; color: #000000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; line-height: 18px;',
        'h1'    => 'margin: 0 0 20px 0; padding: 0 0 0 0; color: #000000; font-size: 22px; font-family: Arial, Helvetica, sans-serif; line-height: 26px; font-weight: bold;',
        'h2'    => 'margin: 0 0 20px 0; padding: 0 0 0 0; color: #000000; font-size: 20px; font-family: Arial, Helvetica, sans-serif; line-height: 24px; font-weight: bold;',
        'h3'    => 'margin: 0 0 20px 0; padding: 0 0 0 0; color: #000000; font-size: 18px; font-family: Arial, Helvetica, sans-serif; line-height: 22px; font-weight: bold;',
        'h4'    => 'margin: 0 0 20px 0; padding: 0 0 0 0; color: #000000; font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px; font-weight: bold;',
        'hr'    => 'height: 1px; border: none; color: #dddddd; background: #dddddd; margin: 0 0 20px 0;'
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

        $info   = pathinfo($filename);
        $name   = $dir . '/' . $info['filename'];
        $ext    = (empty($info['extension'])) ? '' : '.' . $info['extension'];
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
            $fp   = fopen($filename, 'rb');
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

$mailSMTP = new Mail();
$mailSMTP->body = $msg;
$mailSMTP->subject = $subject;
$mailSMTP->toEmail = $sendto;
$mailSMTP->fromEmail = 'maxim88kiev@gmail.com';
$mailSMTP->fromName = $name;
$mailSMTP->toName = 'test_name';
$result =  $mailSMTP->send();
if ($result) {
    echo '<div class="send">
	Сообщение отправлено!
	</div>';
} else {
    echo '<div class="send">
	Сообщение не отправлено.
	</div>';
}

?>

<style>
    .send{
        text-align: center;
        font-size: 20px;
        color: #000;
        position: absolute;
        top: 107px;
        left: 0px;
        right: 0px;
    }
    @media (max-width: 768px) {
        .send{
            font-size: 27px;
        }
    }
</style>
<script type="text/javascript">
    // setTimeout(function(){ history.back() }, 6000);
</script>



<!-- Event snippet for Обратный звонок conversion page -->
<script>
    gtag('event', 'conversion', {'send_to': 'AW-873216596/wyxiCO6Fz30Q1PSwoAM'});
</script>

