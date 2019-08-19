<?php
function getBillets()
{
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=blog_post;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date FROM posts ORDER BY date_creation' );

	return $req;
}
