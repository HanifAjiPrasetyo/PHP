<?php
// $greeting = "Hello";

// echo "$greeting Everybody!";

$name = "Dark Matter";
$read = true;

//Operasi if-else
if ($read) {
    $message = "You have read $name"; // Mengembalikan nilai true
} else {
    $message = "You have NOT read $name"; // Mengembalikan nilai false
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body>
    <!-- Pemanggilan variabel $message di dalam tag html
    Menggunakan <?php echo $message ?> atau <= $message ?> -->
    <h1><?= $message ?></h1>
</body>

</html>