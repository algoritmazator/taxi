
<?php

require_once 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Gepard</title>
  <link rel="icon" href="img/Слой 1.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

</head>
<body>
  <header>
    <div class="logo"><a href="index.php">GEPARD</a></div>
    <div class="nav">
      <a href="voditelam.php">Водителям</a>
      <a href="zakaz.php">Клиентам</a>
     
    </div>
  </header>
 <div class="vodit">
    <form action="<?=$_SERVER['SRIPT_NAME']?>">
        <p>Оставьте заявку</p>
        <input type="text" name="city" placeholder="Город">
        <input type="text"  name="fullname" placeholder="ФИО">
        <input type="tel" name="phone" placeholder="Номер телефона">
        <button name="otpr">ОТПРАВИТЬ</button>
        
<p class="otvet" ><?php echo $otvet1; ?></p>
<?php
$otvet1 = "Ваша заявка будет рассмотрена";

if (isset($_REQUEST['otpr'])){
    if(!$error){
        $city = $_REQUEST['city'];
        $fullname = $_REQUEST['fullname'];
        $phone = $_REQUEST['phone'];
        mysqli_query($db, "INSERT INTO `voditeli` (`city`, `fullname`, `phone`)
        VALUES('" . $city . "', '" . $fullname ."','" . $phone ."')");
        echo  $otvet1;
    }
    else{
        echo $error;
    }
}
?>
    </form>
   
 </div>
<footer>
  <div class="sup_block6">
  <div class="logo_f">GEPARD</div>
  <div class="ofis">
    <h1>Адрес офиса</h2>
    <p>г. Тула, ул. Комсомольская, д.32</p>
    <h1>Работа офиса</h2>
    <p>ПН - ПТ: 08:00 - 19:00</p>
    <p>СБ: 08:00 - 19:00</p>
    <p>ВС: 08:00 - 19:00</p>
  </div>
  <div class="contact">
    <p>Офис: +994123100895</p>
    <p>mail@taxiomega.com</p>
  </div>
  </div>
  <p class="prava">&#169; Все права защищены</p>
</footer>
<script src="script.js"></script>
</body>
</html>