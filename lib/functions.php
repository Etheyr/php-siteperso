<?php


function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} else {
		include "../pages/" . $_GET["page"].".php";
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData(){

	$json_url = "../data/user.json";
	$json = file_get_contents($json_url);
	$data = json_decode($json,true);
	var_dump($data);
}