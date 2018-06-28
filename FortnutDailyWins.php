<?php
if (isset($_GET['username'])) {
$username=$_GET['username'];
$update=file_get_contents('https://api.partybus.gg/v1/players/'.$username.'/update');
$data=file_get_contents('https://api.partybus.gg/v1/players/'.$username.'/history?p=');
if (strlen($data)){

    $data=json_decode($data,true);
    die ('Today I\'ve got ' . $data[0]['kills'] . ' kills in ' .$data[0]['games']. ' games. I won ' . $data[0]['placeA']. ' times');
}

}