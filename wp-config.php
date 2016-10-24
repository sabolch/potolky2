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
define('DB_NAME', 'potolky');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'os<[@n|Z;R:]Lx]n3Ry5-5;HI$q;1;`~)qN6 y=[WQ;,nLO`7N:SyfQ-^sAW8KW?');
define('SECURE_AUTH_KEY',  'W(XHC .kC4;LuVLDw!dTqN%J |E3#y|?#F3.k+E%Ox6>MOy;] 4$Z-xBj[=-6iGT');
define('LOGGED_IN_KEY',    'G9!.!FMnaH-=OxfB&7bQjka0P~YkZX%o_yWHpj=r =$]4?k=YFt#4&[S>C~ya8Iu');
define('NONCE_KEY',        'L3w2e2E-wL42|PV^sl+?`lwfm1wy2tmac_ l:sw_MD.?#NHcWq8prTXY!Dyx:nj)');
define('AUTH_SALT',        '>D:1};M%,jz>A9U~Fyb:tJLqrgc[hs]{2`}Lo,Wgc [#EVjclptj:]N-1CeGTZ};');
define('SECURE_AUTH_SALT', '2:YEe$ExM-;0{[N<g3@R.F[VP.]$b]FswlXx6(ThRYp;P#/GPd;R.O0u }fk)rk9');
define('LOGGED_IN_SALT',   'Z0.pW`l93;FUQev#ER!k]>~q5#5n=|7LTMFHQOS2]64T3WTkq6]:fDw ,q,[FP v');
define('NONCE_SALT',       'U95B,Q_J{>yCo4}VW)i7kv{|=?G)au1R${`tT{kqj0plS]!TDcm14zhRHmEH:s[z');

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
