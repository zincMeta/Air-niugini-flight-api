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
#### repsonse json
```bash
[{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX019","Origins":"HKG","Destinations":"POM","Scheduled":"5:10 am PGT","Estimate":"5:51 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX011","Origins":"MNL","Destinations":"POM","Scheduled":"6:05 am PGT","Estimate":"7:56 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX4154","Origins":"POM","Destinations":"GUR","Scheduled":"6:15 am PGT","Estimate":"6:31 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX110","Origins":"POM","Destinations":"MAG","Scheduled":"6:20 am PGT","Estimate":"6:16 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX852","Origins":"POM","Destinations":"PNP","Scheduled":"6:50 am PGT","Estimate":"6:57 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX7274","Origins":"POM","Destinations":"RAB","Scheduled":"6:55 am PGT","Estimate":"6:56 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX9607","Origins":"MXH","Destinations":"POM","Scheduled":"7:40 am PGT","Estimate":"7:41 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX4155","Origins":"GUR","Destinations":"POM","Scheduled":"7:45 am PGT","Estimate":"8:15 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX853","Origins":"PNP","Destinations":"POM","Scheduled":"7:50 am PGT","Estimate":"8:14 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX7274","Origins":"RAB","Destinations":"KVG","Scheduled":"7:55 am PGT","Estimate":"7:58 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX4131","Origins":"VAI","Destinations":"POM","Scheduled":"8:10 am PGT","Estimate":"8:02 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX275","Origins":"RAB","Destinations":"POM","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX100D","Origins":"POM","Destinations":"LAE","Scheduled":"9:20 am PGT","Estimate":"10:06 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX091","Origins":"CNS","Destinations":"POM","Scheduled":"9:30 am PGT","Estimate":"9:01 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX0160","Origins":"POM","Destinations":"GKA","Scheduled":"9:40 am PGT","Estimate":"10:17 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX4271","Origins":"KVG","Destinations":"POM","Scheduled":"9:55 am PGT","Estimate":"10:25 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX7864","Origins":"POM","Destinations":"TIZ","Scheduled":"10:00 am PGT","Estimate":"11:22 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX202","Origins":"POM","Destinations":"RAB","Scheduled":"10:05 am PGT","Estimate":"11:50 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX990","Origins":"POM","Destinations":"WBM","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX101D","Origins":"LAE","Destinations":"POM","Scheduled":"10:55 am PGT","Estimate":"11:45 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX090","Origins":"POM","Destinations":"CNS","Scheduled":"11:05 am PGT","Estimate":"11:08 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX0161","Origins":"GKA","Destinations":"POM","Scheduled":"11:15 am PGT","Estimate":"11:52 am PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX240","Origins":"POM","Destinations":"HKN","Scheduled":"11:20 am PGT","Estimate":"12:28 pm PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX181","Origins":"HGU","Destinations":"POM","Scheduled":"11:25 am PGT","Estimate":"11:35 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX002","Origins":"SYD","Destinations":"POM","Scheduled":"11:45 am PGT","Estimate":"11:52 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX7865","Origins":"TIZ","Destinations":"POM","Scheduled":"12:00 pm PGT","Estimate":"1:30 pm PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX991","Origins":"WBM","Destinations":"POM","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX241","Origins":"HKN","Destinations":"POM","Scheduled":"12:55 pm PGT","Estimate":"2:13 pm PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX182","Origins":"POM","Destinations":"HGU","Scheduled":"1:10 pm PGT","Estimate":"1:43 pm PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX184","Origins":"POM","Destinations":"HGU","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX253","Origins":"BUA","Destinations":"RAB","Scheduled":"1:25 pm PGT","Estimate":"2:00 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX856","Origins":"POM","Destinations":"PNP","Scheduled":"1:30 pm PGT","Estimate":"3:20 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX004","Origins":"BNE","Destinations":"POM","Scheduled":"1:50 pm PGT","Estimate":"2:18 pm PGT","Status":"ARRIVED LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX958","Origins":"POM","Destinations":"GUR","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX103D","Origins":"LAE","Destinations":"POM","Scheduled":"2:20 pm PGT","Estimate":"2:55 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX220","Origins":"POM","Destinations":"KVG","Scheduled":"2:25 pm PGT","Estimate":"4:24 am PGT","Status":"ARRIVED ON TIME","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX857","Origins":"PNP","Destinations":"POM","Scheduled":"2:30 pm PGT","Estimate":"4:20 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX183","Origins":"HGU","Destinations":"POM","Scheduled":"2:40 pm PGT","Estimate":"3:09 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX185","Origins":"HGU","Destinations":"POM","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX120","Origins":"POM","Destinations":"WWK","Scheduled":"3:00 pm PGT","Estimate":"3:45 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX104","Origins":"POM","Destinations":"LAE","Scheduled":"3:10 pm PGT","Estimate":"3:45 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX253","Origins":"RAB","Destinations":"POM","Scheduled":"3:15 pm PGT","Estimate":"3:50 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX959","Origins":"GUR","Destinations":"POM","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX220","Origins":"KVG","Destinations":"MAS","Scheduled":"3:40 pm PGT","Estimate":"4:24 am PGT","Status":"","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX164","Origins":"POM","Destinations":"GKA","Scheduled":"4:20 pm PGT","Estimate":"4:24 am PGT","Status":"","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX105","Origins":"LAE","Destinations":"POM","Scheduled":"4:25 pm PGT","Estimate":"5:00 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX4122","Origins":"POM","Destinations":"WWK","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX112","Origins":"POM","Destinations":"MAG","Scheduled":"4:45 pm PGT","Estimate":"6:00 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX121","Origins":"WWK","Destinations":"POM","Scheduled":"4:50 pm PGT","Estimate":"5:35 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX274","Origins":"POM","Destinations":"RAB","Scheduled":"4:55 pm PGT","Estimate":"6:00 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX186","Origins":"POM","Destinations":"HGU","Scheduled":"5:00 pm PGT","Estimate":"4:24 am PGT","Status":"","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX188","Origins":"POM","Destinations":"HGU","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX903","Origins":"UNG","Destinations":"POM","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX291","Origins":"MAS","Destinations":"POM","Scheduled":"5:35 pm PGT","Estimate":"4:24 am PGT","Status":"","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX244","Origins":"POM","Destinations":"HKN","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX165","Origins":"GKA","Destinations":"POM","Scheduled":"5:55 pm PGT","Estimate":"4:24 am PGT","Status":"","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX274","Origins":"RAB","Destinations":"KVG","Scheduled":"6:00 pm PGT","Estimate":"7:05 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX082","Origins":"HIR","Destinations":"VLI","Scheduled":"6:05 pm PGT","Estimate":"7:20 pm PGT","Status":"LATE","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX187","Origins":"HGU","Destinations":"POM","Scheduled":"6:30 pm PGT","Estimate":"4:24 am PGT","Status":"","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX189","Origins":"HGU","Destinations":"POM","Scheduled":"","Estimate":"","Status":"CANCELLED","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX107","Origins":"LAE","Destinations":"POM","Scheduled":"7:10 pm PGT","Estimate":"4:24 am PGT","Status":"","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null},{"Type":"arrivals","Date":"14\/06\/2025","Flights":"PX392","Origins":"POM","Destinations":"SIN","Scheduled":"7:30 pm PGT","Estimate":"4:24 am PGT","Status":"","error_mgs":0,"response_status":200,"parametre_types":"arrivals","parametre_options":null}]

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

