<?php
// ...
 
// Replace everywhere that says "changeme".
// Adapted from https://gist.github.com/phillipadsmith/4112169
 
if ($_SERVER['REMOTE_ADDR']=='127.0.0.1') {
    define('WP_ENV', 'local');
} elseif ($_SERVER['HTTP_HOST']=='changeme.com') {
    define('WP_ENV', 'production');
} else {
    define('WP_ENV', 'staging');
}
 
$server  = preg_replace ('/:.*/',"", $_SERVER['HTTP_HOST']);
 
if ( WP_ENV == 'staging' ) {
    define('DB_NAME', 'changeme');
    define('DB_USER', 'changeme');
    define('DB_PASSWORD', 'changeme');
    define('DB_HOST', 'changeme');
    define('WP_SITEURL', "http://$server");
    define('WP_HOME', "http://$server");
    define('DISALLOW_FILE_MODS',true);
} elseif ( WP_ENV == 'production' ) {
    define('DB_NAME', 'changeme');
    define('DB_USER', 'changeme');
    define('DB_PASSWORD', 'changeme');
    define('DB_HOST', 'changeme');
    define('DISALLOW_FILE_MODS',true);
} elseif ( WP_ENV == 'local' ) {
    define('WP_SITEURL', "http://$server");
    define('WP_HOME', "http://$server");
    define('DB_NAME', 'changeme');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
}
 
// ...
?>
