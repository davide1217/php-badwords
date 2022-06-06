<?php

  $paragraph="Il corso di Boolean è fottutamente intensivo e ugualmente istruttivo.";
  $_GET["censura"];
  $censured_paragraph= str_replace($_GET, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>La frase :"<?php echo $paragraph ?>" è lunga: <?php echo strlen($paragraph) ?> caratteri.</div>

  <div>La frase :"<?php echo $censured_paragraph ?>" è lunga: <?php echo strlen($censured_paragraph) ?> caratteri.</div>



</body>
</html>