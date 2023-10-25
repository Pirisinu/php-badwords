<?php 

$paragrafo = $_POST['paragrafo'] ?? 'Nessun paragrafo';
$censurare = $_POST['censurare'] ?? 'Nessuna parola da censurare';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Form Post Result</title>
</head>
<body>
  <h1><?php echo $paragrafo ?></h1>
  <h1><?php echo $censurare ?></h1>
</body>
</html>