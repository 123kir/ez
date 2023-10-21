<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'na4IxxN!{;wNJg$Wtjss-%?%m/tPy1J!QUpCzX)Tb6P=EeazA.pIbX/Z8pd[k%/m' );
define( 'SECURE_AUTH_KEY',  '$Cj?8{OHI;J3a<-?>7zlamhW@Zv*X{}(xI] QHSndAK+F7EV2@]hrqhVwaH.[T10' );
define( 'LOGGED_IN_KEY',    'SMS,p]EA?wJoP_*OP>vsna[3K8!eo/zX;!GB>{hz?$VzT)4/lPx;jnil/ra<aH5j' );
define( 'NONCE_KEY',        'DzFB}70p25cyscR2>q7U5{0nU;40PgWZa4_b.`mepw%LZ/MEk` |Qw=VQ0{8m<Y$' );
define( 'AUTH_SALT',        'x*5cvdZi-o<C?4*XQ?ugJSc>3_/X>w6Z::9{nZDd&IN<_q>jZKI^{,Xhh6+4%(kL' );
define( 'SECURE_AUTH_SALT', 'dQ]36!HBU>NlU2sn*z[e-;ZyU=r-WJEhUkVR=B>`IEyZ?SfgC4TmO~x$[CpO~wpE' );
define( 'LOGGED_IN_SALT',   '#c8!-`K-:;UZ|? H^SIy^<!Bm%)x]aqZ[?!U,`Vm$&T @S^T5v;,3)nH|z,/b~2U' );
define( 'NONCE_SALT',       '6hl%.#E~={=3w$VBhiNb5#ND6D0QtwNpz^<i@kQlW1Yydd/d2iLgEPy4Ihh=wTTt' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
