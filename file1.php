<?php

$url = "http://developer.goibibo.com/api/search/?app_id=6af20a8a&app_key=450d6678c0847b5d5a78c62f5485d1c8&format=json&source=DEL&destination=GOI&dateofdeparture=20170510&seatingclass=B&adults=1&children=0&infants=0&counter=100";

$result = file_get_contents($url);
// Will dump a beauty json :3
var_dump(json_decode($result, true));
echo json_decode($result, true);
?>