# Fetch API with cURL in PHP

This example demonstrates how to use PHP's cURL functions to fetch data from a flight information API.

## Example Code

```php
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

if ($err) {
    echo "cURL Error: $err";
} else {
    echo "<script>console.table($response)</script>";
}

curl_close($curl);
?>
# ✈️ Fetch Flight Data Using cURL in PHP

This project demonstrates how to fetch live or simulated flight data using PHP and the cURL library. It connects to a public API to retrieve information such as arrival and departure flights, flight origins, destinations, and flight names.

---

## 🧰 Requirements

- PHP 7.0 or higher
- Internet connection
- cURL enabled on your PHP installation

---

## 📦 Installation

1. Clone the repository or download the PHP file:

```bash
git clone https://github.com/your-username/your-repo-name.git
