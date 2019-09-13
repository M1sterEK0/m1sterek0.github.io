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
define('DB_NAME', 'eko');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'PoLy()2319');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hSXE|6-E{Yma*c*dZm`m-B<ECZd~/n#(HIR2:Pi,5 yHT%Y5a [I}M;fmSls3WTW');
define('SECURE_AUTH_KEY',  'L~p7Qz3mMA{*Y!74<`9Sh-}vR-3U(kG`_pn[meJg8hwAU;%g<oKk+U1k=k`)Bpv~');
define('LOGGED_IN_KEY',    '%`?=7Taec7%1[yM#-hNsD`B,F1dVd3-rl_ocSq./Y-yv!`(kw:M33Cm!F[1!o=:K');
define('NONCE_KEY',        'E=@Zvmc:`s){X[*.ulu)[i6T34s8W@_$c80.`aNq1g9I/5qL49v,;pL=(;LfT}1)');
define('AUTH_SALT',        '.]/I8n^%HjUsAwni@R]yq(2Ui&3iy$Ud2:GD(6SVYUieR)0Fa&V9u.@W$4#TQ~9(');
define('SECURE_AUTH_SALT', 'qxd^_F3z^is|y.n|?p/K4i[EsSdwwV(or/0+ cK`0Q`9[SXbKv81.1o/`O@Z,c<:');
define('LOGGED_IN_SALT',   'iniYZjo^+=G1r>mb2(%0FV^Vf/%H-;83tWnU <<=OL2gi<h/0L?=&l(a*io]VCrO');
define('NONCE_SALT',       '%r)ih<NM[eQ~8,qd]iUu*tX&=8A05..6_U! d#G/G}ChX{n~11]*nai)siBW^d(U');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
