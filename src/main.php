<?php
require_once './component.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['city'] == '' || $_SERVER["REQUEST_METHOD"] == "POST" && ctype_space($_POST['city'])) {
   header("Location: /index.php");
   exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['city'])) {
   $_SESSION['city'] = isset($_POST['city']) ? $_POST['city'] : null;

   header("Location: /index.php");
   exit;
}

$url = 'https://api.openweathermap.org/data/2.5/weather';
$options = array(
   'q' => $_SESSION['city'],
   'APPID' => '4c1eeba881a121aa63c779683f1dc4ca',
   'units' => 'metric',
   'lang' => 'ru',
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($options));

$response = curl_exec($ch);
$data = json_decode($response, true);


var_dump($_SESSION['city']);
curl_close($ch);