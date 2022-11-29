<?php
session_start();
include __DIR__ . '/function.php';

if (isset($_GET['number']) && $_GET['number'] > 5 && $_GET['number'] <= 25) {
    $number = $_GET['number'];
    $password = genPsw($number);
    $_SESSION['password'] = $password;
    header('Location: ./password.php');
}
// var_dump($_SESSION);


?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container-fluid vh-100 text-center d-flex flex-column justify-content-center">
        <div class="pb-3">
            <h2>Strong Password Generator</h2>
        </div>
        <div>
            <form action="index.php" method="get" name="pswgenerator"
                class="d-flex align-items-center justify-content-center gap-3">
                <input type="number" id="number" name="number" min="5" max="25" class="form-control w-25"
                    placeholder="Inserisci un numero da 5 a 25">
                <button type="submit" class="btn btn-success">Genera password</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
            </form>
        </div>
    </div>
</body>

</html>