# ✈️ Fetch API with cURL in PHP

This project demonstrates how to fetch live or simulated flight data using PHP and the cURL library. It connects to a public API to retrieve information such as arrival and departure flights, flight origins, destinations, and flight names.

---

## 🧰 Requirements

- PHP 7.0 or higher  
- Internet connection  
- cURL enabled in your PHP installation  

---

## 📦 Installation

1. Clone the repository or download the PHP file:

    ```bash
    git clone https://github.com/your-username/your-repo-name.git
    ```

2. Navigate into the project directory:

    ```bash
    cd your-repo-name
    ```

3. Run the PHP script using a local server (e.g., XAMPP, MAMP, or PHP’s built-in web server):

    ```bash
    php -S localhost:8000
    ```

4. Visit `http://localhost:8000/index.php` (or your file name) in a web browser.

---

## 💡 Example Code

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
```
## Parameter types & options

There are two parameters **types** and **options**. The "option" parameter is optional hehe😆 unless you want to fetch a specific data from the flights data .

### types 
`arrivals` : Fetch the data for the arrival flights.

`departures` : Fetch the data for the arrival flights.

### options

`flights` : Fetch only the **flight** data from the arrival or departure flights.

`destination` : Fetch only the **destination** data the from arrival or departure flights.

`origin` : Fetch only the **origin** data the from arrival or departure flights.

`scheduled` : Fetch only the **scheduled** data the from arrival or departure flights.

`estimate` : Fetch only the **estimate** data the from arrival or departure flights.

`status` : Fetch only the **status** data the from arrival or departure flights.

