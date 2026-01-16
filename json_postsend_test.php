<?php
$data = array(
	'test1'=>'aaa','test2'=>'bbb小林xx'
);
//print_r($data);
echo 'send data:test1'.$data['test1']."<br>";
echo 'send data:test2'.$data['test2'];
$data_json = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_URL, 'https://kensa.kensanet.com/app/posttest.php');
curl_setopt($ch, CURLOPT_URL, 'http://www2.a-lands.com/line/posttest.php');
$result=curl_exec($ch);
echo '<br/>RETURN data:';
echo $result;
curl_close($ch);

?>