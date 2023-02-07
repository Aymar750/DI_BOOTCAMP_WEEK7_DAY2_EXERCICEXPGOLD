<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
<form method="post">
  <input type="text" name="name" placeholder="Name" >
  <input type="email" name="email" placeholder="Email" >
  <input type="password" name="password" placeholder="Password">
  <button type="submit">Submit</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $errors = [];

        if (empty($name)) {
            $errors[] = "Name is required";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email is not valid";
        }

        if (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters";
        }

        if (!empty($errors)) {
            foreach ($errors as $error) {
            echo $error . "<br>";
            }
        } else {
            echo "Success";
        }
    }
?>

</body>
</html>