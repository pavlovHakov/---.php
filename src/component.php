<?php


$today = getdate();

$arrwday = [
   "понедельник",
   "вторник",
   "среда",
   "четверг",
   "пятница",
   "суббота",
   "воскресение",
];


function currentData($arrayDay, $currentDay, $hours, $minutes)
{
   foreach ($arrayDay as $item => $key) {

      if ($currentDay == $item + 1) {

         echo $key . ' ' . $hours . ':' . $minutes;
      }
   }
}
