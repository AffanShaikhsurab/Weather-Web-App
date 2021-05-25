<?php
if(isset($_POST['city'])){
    $city = $_POST['city'];
    $url="api.openweathermap.org/data/2.5/weather?q=$city&appid=82717298a536148c4342eb20475171ef";
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result,true);

     
    $url1="api.openweathermap.org/data/2.5/forecast?q=$city&appid=82717298a536148c4342eb20475171ef";
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    $result1 = curl_exec($ch);
    curl_close($ch);
    $result1 = json_decode($result1,true);

     include "weather.php";
}
?>

<html>
<head>
    <title>WebApp</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>

<body >
   
        <!-- Sunny Day Video -->
     <video autoplay muted loop class="video">
        <source src=<?php echo $weather ?> type="video/mp4">
    </video>
    

<!-- Main card div -->
    <div id="main">
        <div id="search">
            <div id="container-s">
                <form action="index.php" method="POST">
                 <input type="text" name="city" class="search">
                 
</form>
            
            </div>
        </div>
        
        
  <?php      if(isset($_POST['city'])){   
                    include "info_card.php";
  }else{

  }
?>