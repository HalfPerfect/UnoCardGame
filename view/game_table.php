<?php
require_once('../database/model/user.php');
  session_start();
  $user = new UnoUser;
  $user = $_SESSION['user'];
  $roomID = $_SESSION['roomID'];
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/game_table.css">
</head>
<body>

  <div class="top">
    <p>In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.</p>
  </div>
  <div class="right">
    <p>In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.</p>
  </div>
  <div class="left">
    <p>In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.</p>
  </div>
  <div class="bottom">
    <div class="left-button"></div>
      <div class="bottom-card-container">
        <div class="card"></div>    
        <div class="card"></div>  
        <div class="card"></div>  
        <div class="card"></div>  
        <div class="card"></div>  
        <div class="card"></div>  
      </div>
      <div class="right-button"></div>
  </div>
</body>
</html>

<script>

</script>


