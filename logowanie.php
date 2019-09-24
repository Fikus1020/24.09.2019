<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php
    session_start();

    if(isset($_GET['akcja'])&& $_GET['akcja']== 'wyloguj')
    {
        unset($_SESSION['zalogowany']);
    }
    if(!isset($_SESSION['zalogowany']))
    {
        ?>
            <form action="plik.php" method="POST">
                <input type="text" name="login" placeholder="login">
                <input type="text" name="pass" placeholder="hasło">
                <input type="submit" value="zaloguj">
        </form> 
        <?php
    }else{
        echo ('<li>ZALOGOWANY ');
        echo '<li><a href="logowanie.php?akcja=wyloguj">Wyloguj</a>';
        echo '<li><a href="plik.html">plik1</a>';

    }
    

    ?>
    

</body>
</html>
