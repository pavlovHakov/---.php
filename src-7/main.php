<?php
session_start();



if (isset($_POST['city'])) {


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
curl_close($ch);
