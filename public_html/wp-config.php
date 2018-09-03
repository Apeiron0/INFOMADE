<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u298096047_aluzu');

/** MySQL database username */
define('DB_USER', 'u298096047_aruba');

/** MySQL database password */
define('DB_PASSWORD', 'eGudedebuP');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XzJ9CGgTKbf8JIozfa5R5gJ95MGTRVuzSdOqeNVTzAopSvVc9W1oaOECwKXCAosq');
define('SECURE_AUTH_KEY',  '8qS167G0u9dNtRrWhHCuH6pkkORSq6MwKpyV9TmUvSYObbw2qpY1P6jqVd1XbyzR');
define('LOGGED_IN_KEY',    'm5wKVbHipwLMheNxZVg2SQObGU5ymHVbSRKyPMxB8E1lLiw2MErCtR1SOIXQ4zyr');
define('NONCE_KEY',        'tmAk6ZhXGmYXTJ1c49yxoLWZ7zwsGMgzo7KTuG1N16qx8HjZKHss4kjGn7sTff4i');
define('AUTH_SALT',        '3GUz6ajcD0N85WswYlHUI3YDlW0EDQrcUP2t0JSHjMcAwUm44clxTgDIvLxw6ClN');
define('SECURE_AUTH_SALT', '4Mo95klS3huVgO7xDSDWeFQr1tG2CKxnKXmRBqY7IcwPCH1TPLJ8ZfCbHKtPw4pV');
define('LOGGED_IN_SALT',   'co8DMrRLAuUC4naqj9VpHl0ME4ScWGchLFRfezgD7evC8itQQBXhu9AQ4NaqVtlt');
define('NONCE_SALT',       'NyD18WH6rtMAPfF3ecrqGGv92XHQwbyndh5p1yVpRjbqtRnCdj5U4l7ecjUTzQlQ');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'r87y_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
