<?php
//if latitude and longitude are submitted
echo "<pre>";print_r($_POST);exit;

if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){

    $url='https://www.google.com/maps/@'.$_POST['latitude'].','.$_POST['longitude'].','.'18z';
  
echo "<pre>";print_r($url);exit();
    echo $location;
}

?>