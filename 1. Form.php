<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
        <input type="texr" name="first"> </br>
        <input type="texr" name="second"> </br>
        <input type="submit" name="value"> </br>
    </form>
    <?php
        if(empty($_GET['first']) && (empty($_GET['second']))) {
            exit ('Text messege is empty');
        }else {
            echo '</pre>';
            print_r($_GET);
            echo '</pre>';
        }
        
    ?>
</body>
</html>