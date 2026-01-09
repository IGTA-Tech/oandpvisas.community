Full wordpress website setup :: https://oandpvisas.community
Database file :: database.sql.zip

Error :: Max memory size
Solution:: 
Insert below code in wp-config.php before define( 'FS_METHOD', 'direct' );
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');
set_time_limit(300);

Important Update All path/url's from database tables