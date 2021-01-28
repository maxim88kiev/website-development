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
define( 'DB_NAME', 'rezba00_keisua' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'rezba00_keisua' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'lE086sUHDvm2' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'rezba00.mysql.tools' );

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
define( 'AUTH_KEY',         'jm@aWq0PF6OEHHl}}NL,<!>2X83twhbw)=kCw$*b#S<icVAriCG02[+Q(#dXbD@q' );
define( 'SECURE_AUTH_KEY',  'HH26.kA1YTJ[@50JDDx4@FY*J8:y7{D.s[k+p)2^j8 Vl13y2hM,BO?A6*;llE(y' );
define( 'LOGGED_IN_KEY',    '$[P7~fNLi;O,G,=a$+BxJ(72t#%[P)OwHZ<C%(+TrY20{uuF?y,{h.wI&q)!Bv?5' );
define( 'NONCE_KEY',        '{!|GE[<k,harE-:L$i9eoqxpNtG~ydf`0hHlS@N5#/pe9i,o*c3GZq5/C.ctF[?M' );
define( 'AUTH_SALT',        'd}(u(fFdA%{UWh{=xrdi9Z? ,F1V*)YIyW($Z:rO6@>?OuOZLpxdY1V8fDcrc#yg' );
define( 'SECURE_AUTH_SALT', '%;p 0.]Ypg!.GgqonNL=$>|/(M_dj+.7&u3}d%=[n=xS!E|zNtbBBJ:f]?LqUc>(' );
define( 'LOGGED_IN_SALT',   'X/kh+EM1h_q?L/l%W1e-#C7`>l.ODIytpJJ^tlh<8(lQts6bO8%PF>0IRJ8f|=/1' );
define( 'NONCE_SALT',       'NOt^L/00dVTz:h+(,t:sX<GHtgfwaY?kS#Xk92I0`<:-W34zNh,E*=1Gr:edll3<' );

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
