<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require ('./common.php');


        // Demo for fileGetUser function
        echo "<pre>";
        print_r(fileGetUser());
        echo "</pre>";


        // Demo for add_user()
       $new_user = ["alex", "Xander", "alex@gmail.com", "1223"];
       add_user($new_user);
       echo "<pre>";
       print_r(fileGetUser());
       echo "</pre>";
    ?>
</body>
</html>

<!-- This file is a demo of how the function works -->