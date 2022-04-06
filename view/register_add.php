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
        <h1> 
            Zippy Used Autos
        </h1>
            <hr>
    </header>
    <main class ="main">
<section>
    <h2>Please enter your first name: </h2>
    <form action="." method="POST">
        <input type="hidden" name="action" value="register">
        <div class="row">
            <div class="col-75">
                <input type="text" name="firstname">
            </div>
        </div>

        <div class="row">
            <div class="col-75">
                <button type="submit" name="submit" value="Submit">Register</button>
            </div>
        </div>
    </form>
</section>

<?php include('view/footer.php');?>