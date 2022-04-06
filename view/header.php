<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos</title>
    <link rel="stylesheet" type="text/css" href="view/css/main.css"/>
</head>
<body>
    <header>
        <p class="link">
            <?php if(isset($_COOKIE['userid'])) { ?>
                Welcome <?= $_COOKIE['userid'] ?>! (<a href=".?action=logout">Sign Out</a>)
            <?php } else {?>
                <a href=".?action=register_add">Register</a>
            <?php } ?>
        </p>
        <h1> 
            Zippy Used Autos
        </h1>
            <hr>
    </header>
    <main class ="main">