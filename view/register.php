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
<?php 
$firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : "Guest";
setcookie('userid', $firstname, time() + 3600);
?>

<h2>Thank you for registering with us, <?= $firstname?>! </h2>

<p><a href=".?action=list_vehicles">Click Here</a> to view our full vehicle list.</p>

<?php include('view/footer.php'); ?>