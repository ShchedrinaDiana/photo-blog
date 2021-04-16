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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'phblog' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '^EVV#v/[DI@CStVa9? #%d:qf_JaWmZ9} 2+4|RfAXlBxP#Y[T4Y3q^;bLuw3HQ:' );
define( 'SECURE_AUTH_KEY',  't#<}s%`/NDvZqCkmHOSl8J{S9|$Fp<k+4`yE,WZz2uF4IL,!6|@HvXH4mMcFOVia' );
define( 'LOGGED_IN_KEY',    'StB0Tsc8u|=mg/5wBPqt,W2I7#)k7*-wfc<EOIHFUsWt5q_c2a.jF/MpwO*bX#_o' );
define( 'NONCE_KEY',        '|ZprwGe?z9SxMv/Yo/(4=e4bUI}w[pM?r2S%.S@AQO/uB&5y4;rwj>Wl.YiQnbiP' );
define( 'AUTH_SALT',        ' (b_Mq4:_KOJyn9zbo5%-W{QaUy#MFRN?iCxC>oWW7;-VWo8EfU;V2=7IJ?F=7ZF' );
define( 'SECURE_AUTH_SALT', 'S27><^m&o<< kxp5y60`kiw}mAdU{O*6odA?W2=|54L(c,Uu%+?VK)]cY8sp^GMr' );
define( 'LOGGED_IN_SALT',   'VKJS*.Y+H[Atjw7C7Qb@fP?yF.5!iji)iGW9eHi2fma7JN^l=OnVn(yLFFLj;uNT' );
define( 'NONCE_SALT',       'f<Eq]]_L[zg3kL{P2Fze=zP)LNPCRL[/Bv<_-%[ov~Y;3<Ef.@6ka]eCy</KP-j%' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
