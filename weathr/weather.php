<?php
//--------------------[天気API]--------------------//
//----[初期設定]----//
$ch = curl_init(); //初期化

//----[curlのオプション設定処理]----//
curl_setopt($ch, CURLOPT_URL, "https://weather.tsukumijima.net/api/forecast?city=270000"); //url情報取得
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //url文字列表示

//----[実行削除処理]----//
$curl_exec = curl_exec($ch); //curlの実行
curl_close($ch); //curlの削除

//----[表示処理]----//
echo $curl_exec;//表示処理