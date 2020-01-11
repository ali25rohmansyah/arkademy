<?php
  // default TimeZone
  date_default_timezone_set('Asia/Jakarta');
  session_start();

  // KONEKSI
  $con = mysqli_connect('localhost', 'root', '', 'arkademy');
  if (mysqli_connect_error()){
    echo mysqli_connect_error();
  }

  // fungsi $base_url
  function base_url($url = null){
    $base_url = "http://localhost/arkademy";
    if($url != null){
      return $base_url."/".$url;
    }else {
      return $base_url;
    }
  }

?>
