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
 <div class="zakaz_taxi">
    <form action="<?=$_SERVER['SRIPT_NAME']?>">
        <p>Оформите заказ</p>
        <input type="text" name="otkyda" placeholder="Откуда">
        <input type="text" name="kyda" placeholder="Куда">
        <select name="tarif"class="tarif" >
          <option value="vibor_tarif">Выберите тариф</option>
            <option name="econom" value="econom">Эконом</option>
            <option name="komfort" value="komfort">Комфорт</option>
            <option name="bisnes" value="bisnes">Бизнес</option>
       
          </select>
        <input type="tel" name="phone" placeholder="Номер телефона">
        <button name="zakazat">ЗАКАЗАТЬ</button>
        <p><?php echo $otvet2; ?></p>
        <?php
$otvet2 = "Ожидайте! Диспетчер скоро с Вами свяжется";
require_once 'connect.php';
if (isset($_REQUEST['zakazat'])){
    if(!$error){
        $city = $_REQUEST['otkyda'];
        $kyda = $_REQUEST['kyda'];
        $tarif = $_REQUEST['tarif'];
        $phone = $_REQUEST['phone'];
        mysqli_query($db, "INSERT INTO `zakaz` (`otkyda`, `kyda`, `tarif`, `phone`)
        VALUES('" . $otkyda . "', '" . $kyda ."','" . $tarif ."', '" . $phone ."')");
        echo $otvet2;
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