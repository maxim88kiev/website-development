<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'keis2_endosphere' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'keis2_endosphere' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'jrm92LPm8Z5L' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'keis2.mysql.ukraine.com.ua' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A~duT0aR#IPv>>`=L]<}oB)Jfn{jSvq2)|7Nk^q4W3~`ot_u}4@GRH_EsQ3JYU+X' );
define( 'SECURE_AUTH_KEY',  'tj#(Tn0y5blTy7M>H-suQ9bKefgQNG`-/fDZp,!iL9o7jN IjeOi3*+YFRGJW#fQ' );
define( 'LOGGED_IN_KEY',    'uK[/,kT=(N,h9$0,nQ3;O&m,y4P.@#*p<erHej#(`<obVdhpheNMf~bdj92iqLWe' );
define( 'NONCE_KEY',        '3J,;LO1Xmg<=vsQ.*<y?|<4d2D+NT%(L^uX;v`gTta;A0|J1D``pLE#4cUdw]sTA' );
define( 'AUTH_SALT',        'qKwd;V<:>,j<0qeI|U^*5[dB}([$`M?[YPi cd+Qh7$LW*;|ycR1I^.K#muO$NC8' );
define( 'SECURE_AUTH_SALT', 'M._T.7xn$GO$aS+u&;U3jFfb5hwZdjJrMq@O#321SW6SaD;k56@N1Dvj+hVFMceE' );
define( 'LOGGED_IN_SALT',   '7X@#reiJ8uo$8^aU1>:vC%ni#c Maf7Wjl^0OH2!)~P2JS2lmFm^aF9E`Ua89Vr~' );
define( 'NONCE_SALT',       'w,q/] rka+-Hv|(9Bxk*)Bk.]TZUd+{[3kMovO{uD84Vu]&rcBTYfhn2=``:Gj;[' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
