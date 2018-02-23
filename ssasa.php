
<html:5>
<html lang="pl"
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Dokument</title>
</head>
<body>
    <?php
$server = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($server, $user, $password);

if($conn->connect_error){

    die("Błąd połączenia: ")  .$conn->connect_error);

    else "Połączono"
}

echo "Połączono;"
    ?>
    </body>
    </html>



