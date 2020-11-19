<?php

class Base {
    public $url = 'http://localhost:8080/';


    public function request(string $url, string $method = "GET") {
        $url = $this->url . $url;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        
        return json_decode($response);
    }
}

?>