<?php
//localpc
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "merajut_nusantara";

//server
$servername = "localhost";
$username = "merd6715";
$password = "5pGa98Bk9B6B54";
$database = "merd6715_nusantara";
 
// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

function base_url($var)
{
    // $url = "http://localhost/merajut-nusantara/".$var;
    // $url = "http://merajutnusantara2020.com/".$var;
    // return $url;
    $url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
    $url .= "://" . $_SERVER['SERVER_NAME'];
    $url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
    $url .= $var;
    return $url;
}


function limit_words($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit)).' ...';
}	
?>