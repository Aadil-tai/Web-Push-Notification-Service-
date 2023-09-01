<?php
session_start();
if(!isset($_SESSION['user'])){
   header('location: login.php'); 
}
else {
    

define('server_key','AAAAWtsADbM:APA91bHMZAVESXHMKUhdVPlgMsok-7XGjAMnL5LMGHKm9NGHGTaamEtqtx-eK7wAKN2RqHDAFxBo0Hk1q-y2FXVTx7me10cXnw5G2WDhNffakAgnXK1dykpofWycztHADCe3raJgsn98');
include('config.php');
 $sql="select * from `token`";
 $result=mysqli_query($conn,$sql);
 while($data=mysqli_fetch_array($result)){
     $token[]=$data['token']; 
 }

$title = $_POST['title'];
$msg = $_POST['message'];
$url = $_POST['url'];
$icon = $_POST['icon'];
$image  = $_POST['image'];
$header =[
    'Authorization: key=' .server_key,
    'Content-Type: application/json'
    ];
    
    
    $msg=[
          'title'=>$title,
          'body' =>$msg,
          'icon' =>$icon,
          'image' =>$image,
          'click_action' =>$url,
         
        ];
        
        $payload=[
             'registration_ids' => $token,
         'data'             => $msg,
            ];
            
            $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($payload),
  CURLOPT_HTTPHEADER =>$header
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $dec = json_decode($response, true);
  $_SESSION['done'] = 'yes';
  $_SESSION['success'] = $dec['success'];
  $_SESSION['failure'] = $dec['failure'];
  header("location: index.php");
}
            
}
?>