<?php 
//Paragrafo originale
$paragrafo = $_POST['paragrafo'] ?? 'Nessun paragrafo';
//Parole da censurare
$parolaDaCensurare = $_POST['parolaDaCensurare'] ?: 'Non c\'è una parola da censurare';
//Array di parole vietate
$censoredWord = array(
  'cane',
  'pezzo',
);
//push in array
array_push($censoredWord, $parolaDaCensurare);

//Paragrafo concatenato con length
$paragrafoLength = 'Il paragrafo ha ' . strlen($paragrafo) . ' caratteri nella parola';
//Array di parole vietate concatenate
$censoredWordJoin = implode(', ', $censoredWord);
//Paragrafo Censurato
$paragrafoCensurato = str_replace($censoredWord, '***', $paragrafo);
//Paragrafo Censurato concatenato con length
$paragrafoCensuratoLength = 'Il paragrafo ha ' . strlen($paragrafoCensurato) . ' caratteri nella parola';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css' integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==' crossorigin='anonymous'/>
  <title>Php Form Post Result</title>
</head>
<body>
  <h1 class="my-3">FORM-SIDE</h1>
  <ul class="list-group">
    <li class="list-group-item list-group-item-action list-group-item-danger text-center">
      <h2 class="mb-5">Parole da censurare:</h2>
      <h3><?php echo $censoredWordJoin ?></h3>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-primary text-center">
      <h2 class="mb-5">Paragrafo in entrata:</h2>
      <h3><?php echo $paragrafo ?></h3>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-secondary text-center">
      <h2 class="mb-5">Lunghezza paragrafo originale:</h2>
      <h3><?php echo $paragrafoLength ?></h3>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-warning text-center">
      <h2 class="mb-5">Paragrafo censurato:</h2>
      <h3><?php echo $paragrafoCensurato ?></h3>
    </li>
    <li class="list-group-item list-group-item-action list-group-item-secondary text-center">
      <h2 class="mb-5">Lunghezza paragrafo censurato:</h2>
      <h3><?php echo $paragrafoCensuratoLength ?></h3>
    </li>
  </ul>
  
  
  
  
</body>
</html>