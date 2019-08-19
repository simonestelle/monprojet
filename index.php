<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
require"controller/homepage.php";
require'libs/renderer_blog.php';
require'model/database.php';

$GLOBALS['HOST'] = "/tests/blog_ecrivain";



$path = str_replace($GLOBALS["HOST"], "", $_SERVER["REQUEST_URI"]) ?? "/";



if ($path === "/") {
    homepage();
}