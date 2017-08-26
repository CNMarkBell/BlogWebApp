<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'markbell');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'MXQloveLC1314.');

/** MySQL主机 */
define('DB_HOST', '139.162.109.194');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r%6p>)tww3/hEoh{L@2#]r=%t3}6*r#:)~qI>V9i0vnX=gH|8K {a}Gxj9w%lt1b');
define('SECURE_AUTH_KEY',  'MAg}{FHk}_u`3d/t;9xt4Xot:w<4My81E!h~BEcJ kDm({Mq8A)8#0ZVpHT82t/6');
define('LOGGED_IN_KEY',    'nd!pPA,n@ ;[bsX5A3!)@W ;N8Z.#W!ng{]Qm.c&@R{dt0^Onn/~*]YXAWFeAL[.');
define('NONCE_KEY',        'U[9tW@&}+25w_#9(c>G&v;^R6,Cm!DvT1Xj@(}zomu;xdpt:f*Y8yM&w4N}vj%~G');
define('AUTH_SALT',        'p $jb3343>B>f?TzopgQCu~:+vp}JP]ugMycz99#oHO+c;b@:jA6(</G,izD5efK');
define('SECURE_AUTH_SALT', 'bB@bf]caD%S@wv2[t/+HBk(}:N-SE1.YA8=7i S0e%q`i[M2_rgF@4Ht_c;%VaT.');
define('LOGGED_IN_SALT',   'QhSrp!,2cP]7FS< vkDML}eG?K3/n$:}kmYGB/(?:w@B-BQ~+(GR4 FbpY}ag@iW');
define('NONCE_SALT',       'Byd&-;a1`oLDZIle{uLZ$ci30ER/M))[HMYH`o_sf$gk1qHfUlh.RYZ8Bt$!6;ez');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
