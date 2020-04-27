<?php
   include 'calendario.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>calendario de eventos</title>
  <link rel="stylesheet" href="css/style.css " type="text/css"/>
</head>
<body>
<div class="calendario">
  <?php montaCalendario();?>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>
