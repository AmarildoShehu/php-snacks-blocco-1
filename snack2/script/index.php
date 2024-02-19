
<?php

$result = "";
if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    // Verifica delle condizioni richieste
    if(strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
        $result = "Accesso riuscito";
        $color = "green"; 
    } else {
        $result = "Accesso negato";
        $color = "red"; 
    }
} else {
    $result = "Parametri mancanti";
    $color = "gray"; 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="container mt-5 p-5" style="background: <?php echo $color; ?>">
        <h3>Risultato:</h3>
        <p ><?php echo $result; ?></p>
    </div>
</body>
</html>