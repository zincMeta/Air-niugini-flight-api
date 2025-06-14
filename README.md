## Fetch API With curl PHP

<?php

$curl = curl_init();
$url = "https://sweb2.com/SWEB2/web-scraping-php/web-scrapper-api.php?type=arrivals";

curl_setopt_array($curl, [
    CURLOPT_URL => $url,  
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false
]);

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    echo "CURL error : $err";
} else {
    echo "<script>console.table($response)</script>";
}
?>
curl_close($curl);

## Parametre Types"

`arrivals`    : fetch data for all the arrival flights
`departures`  : fetch data for all the departure flights
`origin`      : fetch data for Origin the flights
`destination` : fetch data for Destination of the flights
`flight`      : fetch data/name of all the flights
