
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

    if(isset($_POST['pass'])&& $_POST['pass']== 'a')
    {
       $_SESSION['zalogowany']=1; 
       echo '<li>zmienna-zalogowany-na 1';

    }
    if(isset($_SESSION['zalogowany'])&& $_SESSION['zalogowany']==1)
    {
        echo '<br>zalogowano';
        echo '<br><a href="logowanie.php?akcja=wyloguj">wyloguj</a>';
    }else{
        echo '<br>nie zalogowano';
    }
    echo"
    <ul>
    <li><a href='logowanie.php'>logowanie</a>
    </ul>";
    ?>

    
    
</body>
</html>
