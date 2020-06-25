<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <title>PHP</title>
</head>
<body>
    <header>
        Пык-пык
    </header>
    <audio>
        <source autoplay type="audio/mpeg" src="muz.mp3"></source>
    </audio>

    <?php
    $host = 'std-937.ist.mospolytech.ru:22';
    $database = 'std_937';
    $password = '12345678';
    $user = 'std_937';
    $link = mysqli_connect( $host, $user, $password, $database);
    if ($link == false) {
        echo 
            '<p>Не соединено, бэк не моё</p>';
        ;
    }
    else{
        echo
            '<p>Соединено, ухожу с фронта</p>'
        ;
    }
    ?>
</body>
</html>