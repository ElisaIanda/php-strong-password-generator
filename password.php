<?php
if (isset($_GET['generatePassword'])) {
    $passwordLength = $_GET['generatePassword'];

    include 'function.php';

    $generatedPassword = generatePassword($passwordLength);

    // salvo la password generata nella sessione
    $_SESSION['generatePassword'] = $generatedPassword;
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="container">
            <h1 class="my-4">Password Generata</h1>
            <div class="row">
                <p>La tua password generata è: <?php echo $_SESSION['generatePassword']; ?></p>
            </div>
        </div>

        <!-- per tornare indietro -->
        <button class="btn btn-dark">
            <a href="./index.php">Torna indietro</a>
        </button>
    </div>
</body>

</html>