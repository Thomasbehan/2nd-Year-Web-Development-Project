<?php
	$data = "movies.xml";
	$xml = simplexml_load_file($data);
	$movieAdd = $xml->addChild("movie");
	$title = $_POST["title"];
	$description = $_POST["description"];
	$shipW = $_POST["shipW"];
	$units = $_POST["units"];
	$price = $_POST["price"];
	$imglink = $_POST["img"];
	$details = $_POST["details"];
	$trailer = $_POST["trailer"];
	$movieAdd->addChild("title", $title);
	$movieAdd->addChild("description", $description);
	$movieAdd->addChild("shipW", $shipW);
	$movieAdd->addChild("units", $units);
	$movieAdd->addChild("price", $price);
	$movieAdd->addChild("img", $imglink);
	$movieAdd->addChild("details", $details);
	$movieAdd->addChild("trailer", $trailer);

	$xml->asXML("movies.xml");
	echo 'Congratulations, you have submitted your Movie you will now see it on the store for sale!!, go back to the home page to view your submission. <a href="index.php">Click here</a>' 


?>