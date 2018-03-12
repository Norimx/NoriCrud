<?
/**
 * @package 
 * by nodws.com follow me @nodws
 */

//db details
$dbHost = 'localhost';
$dbUsername = 'user';
$dbPassword = 'pass';
$dbName = 'db_name;

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error)
    die("Connection failed: " . $db->connect_error);

$db->set_charset("utf8");
mb_internal_encoding('UTF-8');

//Site Details
define('ROOT', __DIR__);

//Routes
/*
Turns  /user/{user_id}/page/{page_id}
In to $p[user] = user_id, $p[page] = page_id
*/

$arg = explode('/', trim(preg_replace("/[^a-zA-Z0-9_\/-]+/", "",$_SERVER[QUERY_STRING]),'/'));
 $i = 0;
 foreach ($arg as $k => $v):
     $i++;
     if($i%2 == 0)
       $p[$arg[$i - 2]] = $v;      
 endforeach;
 
 //Dev
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
ini_set('error_reporting',E_ALL & ~E_NOTICE & ~E_STRICT);
