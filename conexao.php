<?php

$usuario = '';
$senha ='';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host,$usuario,$senha,$database);


if($mysqli-> error){
	die ("falha no banco de dados: ".$mysqli-> error);
}
