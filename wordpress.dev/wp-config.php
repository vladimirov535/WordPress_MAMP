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
define( 'DB_NAME', 'wp_dev' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         '70n.?U2jSkKSlf]6(CS~My6;vzPrp(MKI,_e@jX,R*.-JX4{]&=<=xD=aE4sdI69' );
define( 'SECURE_AUTH_KEY',  'RekMsJ7iFjQOddo*))^&C1LSHoCFX><+6qkGi_n/BIIYU#Q[eQ[g( &Yf;pl2(PY' );
define( 'LOGGED_IN_KEY',    '2 A-u9[S.rToaI-:ax`d)kVbzG1!G[3[>Yont]b&Pu-qFbJ:5JNyi>2+E3-R&?7{' );
define( 'NONCE_KEY',        'amgwS;j-ZxR2*|eP>[co^8;YZt!U>A+%%F@JHT}Iz[O-%,gQ*L{(?_:B1t,fDcCK' );
define( 'AUTH_SALT',        'a!j+AWhu^*oVeq45x@d4FK6e{E)Ku5Eh/ArJnt6V47EI!Snaes-AU[Q-&D3Lc`gS' );
define( 'SECURE_AUTH_SALT', 'ZGj~{OMK]mUey7uf6{Oo(b+N6i{:#;U~Q-tIoCY@{r)+B8!eZpq6aPVDXfFf:LlZ' );
define( 'LOGGED_IN_SALT',   'Z7)MEGD/!:%Ga$|0DeDbJEA x}ozV-1*6(K&zvSVtA*}e<G.(#WiQzo.@hjOP7Mf' );
define( 'NONCE_SALT',       'H+j!Of;`c:q&#FAd(uIN[r4#/___?JJjiCcy+/!]:EiU)p`;Q0iD+GbN{vVrXi.p' );

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
