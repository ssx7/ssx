<?php 

session_start(); 
print_r($_SESSION);
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
    <?php

 // 86400 = 1 day
if(isset($_COOKIE['licznik']))
{
    $pokaz = $db->zap_get("SELECT * FROM odwiedziny WHERE data='".date('Y-m-d')."' ;");
    if(count($pokaz) > 0)
    {
        $ilosc = $pokaz[0]['ilosc'];
    }
    //print_r($pokaz);
}
else
{
    $cookie_name = "licznik";
    $cookie_value = 1;
    setcookie($cookie_name, $cookie_value, time() + 86400, "/");

    $pokaz = $db->zap_get("SELECT * FROM odwiedziny WHERE data='".date('Y-m-d')."' ;");

    if(count($pokaz) > 0)
    {
        $ilosc = $pokaz[0]['ilosc'] + 1;
        $db->zapytanie("UPDATE odwiedziny SET ilosc='".$ilosc."' WHERE data='".date('Y-m-d')."' ;");
    }
    else{
        $db->zapytanie("INSERT INTO odwiedziny (`data`,`ilosc`) VALUES('".date('Y-m-d')."',1);");
    }
    
}

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
    <link rel="stylesheet" type="text/css" href="public/css/responsive.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>


<body>
    

    <!-- NAWIGACJA -->
    <?php include('resources/header.php'); ?>

    <!-- KARUZELA -->
    <?php include('resources/karuzela.php'); ?>

    <!-- ARTYKUŁY -->
    <?php include('resources/article.php'); ?>

    <!-- CONTENT - ŁADOWANIE ZAWARTOŚCI -->
    <?php include('resources/content.php'); ?>

    <!-- STOPKA  -->
    <?php include('resources/footer.php'); ?>

    <!-- MODALS -->
    <?php include('resources/modals.php'); ?>
    
    <?php include('akcje.php'); ?>
    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
    
    <script src="public/js/bootstrap.min.js"></script>
    
    <script src="public/js/skrypt.js"></script>

</body>
</html>
