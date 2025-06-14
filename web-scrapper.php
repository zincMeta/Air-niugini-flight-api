<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){

    include_once("simple_html_dom.php");

    function getHtml($flight_d){

        $flights = $flight_d;

        if($flights == "departures" || $flights == "flights" || $flights == "origin" || $flights == "destination"){   
            return file_get_html("airniugini_flight_departures.html");
        }
        if($flights == "arrivals" || $flights == "flights" || $flights == "origin" || $flights == "destination"){   
            return file_get_html("airniugini_flight_arrivals.html"); 
        }

        return false;
    }
    
    function TypeArrival(){       

        $url = "https://www.airniugini.com.pg/book/flight-arrivals/";
        $outputFile = "airniugini_flight_arrivals.html";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch);
        } else {
            file_put_contents($outputFile, $response);
            clearstatcache();
        }
        curl_close($ch);
 
    }

    function TypeDeparture(){

        $url = "https://www.airniugini.com.pg/book/flight-departures/";
        $outputFile = "airniugini_flight_departures.html";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo "cURL Error: " . curl_error($ch);
        } else {
            file_put_contents($outputFile, $response);
            clearstatcache();
        }

        curl_close($ch);
    }
    
    $Type = $_GET["type"];
    
    if($Type == "arrivals" || $Type == "flights" || $Type == "origin" || $Type == "destination"){
        TypeArrival();
        $Arrival =  $Type;
        $html = getHtml($Arrival);
    }
    
    if($Type == "departures" || $Type == "flights" || $Type == "origin" || $Type == "destination" ){
        TypeDeparture();
        $Departure =  $Type;
        $html = getHtml($Departure);
    }


    if (!$html) {
        die("Failed to load HTML file.");
    }

    $data = array();
    
    foreach ($html->find("table.apm_table tbody tr") as $row) {
        $columns = $row->find("td");

        if (count($columns) >= 7) {
            
            $date        = trim($columns[0]->plaintext);
            $flight      = trim($columns[1]->plaintext);
            $origin      = trim($columns[2]->plaintext);
            $destination = trim($columns[3]->plaintext);
            $scheduled   = trim($columns[4]->plaintext);
            $estimate    = trim($columns[5]->plaintext);
            $status      = trim($columns[6]->plaintext);

            $data_array = [
                "Type" => $Type,
                "Date" => $date,
                "Flight" => $flight,
                "Origin" => $origin,
                "Destination" => $destination,
                "Scheduled" => $scheduled,
                "Estimate" => $estimate,
                "Status" => $status    
            ];

            $data[]=$data_array;
                    
        }

    }

    $data_collection = json_encode($data_json);

    function Flights($data_f){

        $Flight_data= $data_f;
        $data = [];

        foreach($Flight_data as $Flight_meta){
            $data[] = array(
                "Type"=> $Flight_meta["Type"],
                "Flight" => $Flight_meta['Flight']
             );
        }
        
        $encode_data = json_encode($data);
        echo $encode_data;
        // echo "<script>console.table($encode_data);</script>";
    }

    function Origin($data_o){
        
        $origin_data = $data_o;
        $data = [];

        foreach($origin_data as $origin_meta){
            $data[] = array(
                "Type"=> $origin_meta["Type"],
                "Origin" => $origin_meta['Origin']
             );
        }

        $encode_data = json_encode($data);
        echo $encode_data;
        // echo "<script>console.table($encode_data);</script>";
    }

    function Destination($data_d){

        $Destination_data = $data_d;
        $data = [];

        foreach($Destination_data as $destination_meta){
            $data[] = array(
               "Type"=> $destination_meta["Type"],
               "Destination" => $destination_meta['Destination']
            );
        }

        $encode_data = json_encode($data);
        // echo "<script>console.table($encode_data);</script>";
        echo $encode_data;
    }

    function AllData($all_data){
        $all = json_encode($all_data);
        // echo "<script>console.table($all);</script>";
        echo $all;
    }

     switch($Type){
        case "flights":
            Flights($data);
            break;
        case "destination":
            Destination($data);
            break;
        case "origin":
            Origin($data);
            break;
        case "departures":
            AllData($data);
            break;
        case "arrivals":
            AllData($data);
            break;        

     }
    // if($Type == "flights"){
    //     Flights($data_json);
    //     exit;
    // }
    
    // if($Type == "destination"){
    //     Destination($data_json);
    //     exit;
    // }
    
    // if($Type == "origin"){
    //     Origin($data_json);
    //     exit;
    // }
    
    // if($Type=="departures" || $Type=="arrivals" ){
    //     NoFilters($data_json);
    //     exit;
    // }

}