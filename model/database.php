<?php 
function dbConnect(): \PDO
{
	try
{
    $pdo = new PDO('mysql:host=localhost;dbname=blog_post;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

	return $pdo;
}