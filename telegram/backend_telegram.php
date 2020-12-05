<?php
function kirim_telegram($toid, $message){
    $token = "1375299407:AAHZ7VEI3JnN69Z-yY-A3c7dmSA_DYL1mu4";
    $url_telegram = "https://api.telegram.org/bot" . $token . "/sendMessage";
    $postheader = array(
        'Content-type: application/x-www-form-urlencoded',
        //'data-header1: 123',
        //'data-header2: ini data header 2'
    );
    $postdata = http_build_query(
        array(
            'chat_id' => $toid,
            'text'  => $message
        )
    );
    $opts = array('http' => array(
                                'method'  => 'POST',
                                'header'  => $postheader,
                                'content' => $postdata
                            )
    );
    $context  = stream_context_create($opts);
    $result = file_get_contents($url_telegram, false, $context);
    $data = json_decode($result);
    return $data->ok;
}

?>
