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

define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'db'); // именно db — это имя сервиса MySQL из docker-compose


define('WP_HOME','http://localhost');
define('WP_SITEURL','http://localhost');


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
define('AUTH_KEY',         '0hfYC]2*L4o)b.jbia1-!y/7MvduynN/pNmKoC2e?rrd.9SV0/bI!G3%ddo#Z`=-');
define('SECURE_AUTH_KEY',  '_Zn.V_^RO/VTp,-viN}MEhs-wsSf/<$l6p_gs9*U-H<J5rj0B5joTcA7|XUvL;|q');
define('LOGGED_IN_KEY',    '),F!*Rb:o_SG-7Z@587)_viNd0-_ascG,+5|BATMqR`Uru+`./Bb_zjUab5]v|:-');
define('NONCE_KEY',        'C;3{X|c3}.xTcOe-NU42A!,|}_NRiR@||`2cRiAXtr@-t7KplGLK%{AGXi>[P-^N');
define('AUTH_SALT',        'g/!i@`bQY`=1G]Fe%w_hP*=nNDLP8gcc+dP-i{Z>jyUJZ-fg^.LP$[/Xpu5y% U}');
define('SECURE_AUTH_SALT', 'q ;4Q/5oKq5-(>8AgLgZpxkA@u^{=-y<_Njh4,r$I+:]h[X%z6>Cvc+IglKwP|dc');
define('LOGGED_IN_SALT',   '=*G*GZeij!qDQyjFzmR&1DVgi+ml$SsJ>wyj,8R9ZgA8YF[?aySU0HsS+9Bri.}v');
define('NONCE_SALT',       '90k?dLG0-+F?-D+>zSt|7q4/lB[g]IpWc`ICaO4wlLm=zI+vm^ZwgldqlsHu2srT');
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
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
