<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">
        <input name="i1" type="email" placeholder="email">
        <input name="i2" type="password" placeholder="password">
        <button type="submit">login</button>

    </form>

    <?php
    
    

    if($loggedIn===true){   

        echo("you have logged in");

    }

    if($loggedIn===false){   

        echo("you have not logged in");

    }
    
    ?>

</body>

</html>