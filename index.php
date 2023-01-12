<?php

$n01 = 0;
$n02 = 0;
$resultado = 0;
$calcular = 'somar';

    if (isset($_GET['n01'], $_GET['n02'], $_GET['calcular'])) {
      $n01 = $_GET['n01'];
      $n02 = $_GET['n02'];
      $calcular = $_GET['calcular'];

      switch($calcular) {
        case 'somar':
          $resultado = $n01 + $n02;
          break;
        case 'subtrair':
            $resultado = $n01 - $n02;
            break;
        case 'multiplicar':
            $resultado = $n01 * $n02;
            break;
        case 'dividir':
            $resultado = $n01 / $n02;
            break;
    }
  }
    
?>    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Calculadora</title>
</head>
<body>
  <form>
    Primeiro Número <br/>
    <input type="number" name="n01" value=<?= $n01 ?> required/><br />
    Segundo Número <br/>
    <input type="number" name="n02" value=<?= $n02 ?> required/><br /><br />
    <select name="calcular">
      <option value="somar" <?= ($calcular=='somar')?'Selected':''; ?>>Somar</option>
      <option value="subtrair" <?= ($calcular=='subtrair')?'Selected':''; ?>>Subtrair</option>
      <option value="multiplicar" <?= ($calcular=='multiplicar')?'Selected':''; ?>>Multiplicar</option>
      <option value="dividir" <?= ($calcular=='dividir')?'Selected':''; ?>>Dividir</option>
    </select>
    <br /><br />
    <input type="submit" value="Calcular" />
    <br /><br />
    <p> O resultado é <?= $resultado ?></p> 
  </form>

</body>
</html>