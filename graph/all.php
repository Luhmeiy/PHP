<?php
    $url = 'http://economia.awesomeapi.com.br/json/all';
    function get_page($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        $return = curl_exec($curl);
        curl_close($curl);
        return $return;
    }
    $contents = get_page('http://economia.awesomeapi.com.br/json/all');
    print_r($contents);
?>