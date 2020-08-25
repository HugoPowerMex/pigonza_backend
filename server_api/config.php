<?php
/* BASE DE DATOS LOCAL
define('DB_NAME', 'ionic4login');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
*/

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
header('Content-Type: application/json; charset=UTF-8');

/*BASE DE DATOS ONLINE */
define ('DB_NAME', 'sql9358147');
define ('DB_USER', 'sql9358147');
define('DB_PASSWORD', 'Su2mnsiuYr');
define ('DB_HOST','sql9.freemysqlhosting.net');

$mysqli =  new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>