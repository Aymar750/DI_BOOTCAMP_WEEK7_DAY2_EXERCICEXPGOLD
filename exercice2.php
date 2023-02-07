<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
  <input type="text" name="num1" placeholder="Nombre 1">
  <input type="text" name="num2" placeholder="Nombre 2">
  <button type="submit">Calculer</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $result = $num1 + $num2;

        echo "Resultat: " . $result;
    }
?>

</body>
</html>