
<?php
if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    // Verifica delle condizioni richieste
    if(strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
} else {
    echo "Parametri mancanti";
}
?>
