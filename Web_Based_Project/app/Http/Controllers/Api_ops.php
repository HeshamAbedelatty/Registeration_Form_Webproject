<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Api_ops extends Controller
{
    public function callapi(){
        $month=$_GET['month'];
$day=$_GET['day'];

$Api1='https://imdb8.p.rapidapi.com/actors/list-born-today?month='.$month.'&day='.$day;




//$cityId = $_REQUEST['CityID'];

$ch = curl_init();

curl_setopt_array($ch, [
	CURLOPT_URL => $Api1,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
		"X-RapidAPI-Key: c2d804862fmshaecea8a8728f0fbp1e0545jsncacd7f229c11"
	],
]);

$actors_List=curl_exec($ch);
$actors_List=json_decode($actors_List);
curl_close($ch);






foreach($actors_List as $actor)
{
$actor=str_replace('/name/', "", $actor);
$actor=str_replace('/', "", $actor);
$Api2="https://imdb8.p.rapidapi.com/actors/get-bio?nconst=".$actor;
$ch2 = curl_init();

curl_setopt_array($ch2, [
	CURLOPT_URL => $Api2,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
		"X-RapidAPI-Key: c2d804862fmshaecea8a8728f0fbp1e0545jsncacd7f229c11"
	],
]);

$details=curl_exec($ch2);
$details=json_decode($details);
curl_close($ch2);
echo $details->{'name'}."<br>";
// $image = $details->{'image'}->{'url'};
// $imageData = base64_encode(file_get_contents($image));
// echo '<img src="data:image/jpeg;base64,'.$imageData.'"> ';

echo "------------------------------------------------------------ <br>";

}
    }


}
