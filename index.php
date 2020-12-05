<?php
date_default_timezone_set("Asia/Jakarta");
require_once("telegram/backend_telegram.php");

echo "sampah";
$aqi = $_GET['nilaiaqi'];
$message = $_GET['message'];
$msg = "AQI Total ".$aqi.",".$message." Bagi kesehatan";
echo $msg;

$time = time();
echo Date('H:i');
// while (true) {
// 	if ((time()- $time)>=240) {
// 		kirim_telegram( 914013581, $msg);
// 		$time = time();
// 	}
// 	sleep(2);
// }

// while (true) {
	// kirim_telegram( 1375299407, $msg);
// 	sleep(3600); //istirahat 3600 detik = 1 jam 
// }

 if(date("H:i") == '07:00'){
 	kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '08:00'){
 	kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '09:00'){
 	kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '10:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '11:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '12:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '13:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '14:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '15:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '16:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '17:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '18:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '19:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '20:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '21:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '22:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '23:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
 }else if(date("H:i") == '24:00'){
    kirim_telegram( 914013581, $msg); //isi idtelegrampenerima dengan idtelegram anda untuk menerima chat report
}

?>



