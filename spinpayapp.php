<?php 
@system("clear");

while(true){
    $url = "https://spinpay.app/api/v1/luckyCoinSubmit";
    $data = array(
        'userId'=>'740239',
        'securityToken'=>'ca3b8519-301f-4d78-b6d1-20eeb4b8611d',
        'versionName'=>'1.7',
        'versionCode'=>'8',
        'coinAmount'=>'2',
        'transName'=>'SpinWheel',
        'luckytoken'=>'49254396-6d2f-4dc6-8c53-821f7ffcc03b'
    );
    $agent = 'Mozilla/5.0 (Linux; Android 7.0; HUAWEI NXT-L09) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Mobile Safari/537.36';

    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "$url",
        CURLOPT_PORT => 443,
        CURLOPT_USERAGENT => $agent,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data
    ));
    $result = curl_exec($ch);
    $result_json = json_decode($result,true);
    curl_close($ch);
    echo "message: " .$result_json['message']." | spinScratch:" .$result_json['spinScratch']."\n";
    sleep(3);

}