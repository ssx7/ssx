<?php session_start(); 
    if(isset($_SESSION['check']))
    { 
        echo 'jest ';
    } 
    else 
    {
        echo'nie';
    } 
    include('app/Database.php');
    $db = new Database();
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cleveland Cavaliers</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/moje.css">
    <link rel="stylesheet" type="text/css" href="public/css/animate.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>


<body>
    

    <!-- NAWIGACJA -->
    <?php include('resources/header.php'); ?>

    <!-- KARUZELA -->
    <?php include('resources/karuzela.php'); ?>

    <!-- CONTENT - ŁADOWANIE ZAWARTOŚCI -->
    <?php include('resources/content.php'); ?>

    <!-- STOPKA  -->
    <?php include('resources/footer.php'); ?>

    <!-- MODALS -->
    <?php include('resources/modals.php'); ?>
    
    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
    
    <script src="public/js/bootstrap.min.js"></script>
    
    <script src="public/js/skrypt.js"></script>
</body>
</html>