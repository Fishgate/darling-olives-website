<?php 
// Local server settings
 
// Local Database
define('DB_NAME', 'your');
define('DB_USER', 'settings');
define('DB_PASSWORD', 'go');
define('DB_HOST', 'here!');
 
// Overwrites the database to save keep edeting the DB
define('WP_HOME','http://192.168.1.11/ACORN/website/htdocs/');
define('WP_SITEURL','http://192.168.1.11/ACORN/website/htdocs/');
 
// Turn on debug for local environment
define('WP_DEBUG', true);

?>