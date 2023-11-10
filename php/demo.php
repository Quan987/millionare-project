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
        $new_user = array(
            "firstname" => "Minh",
            "lastname" => "Tran",
            "email" => "tranminh@gmail.com",
            "password" => "1111"
        );
        // add_user() is called
        add_user($new_user);

        // The file after adding new user:
        echo "After adding new user", "<br>";
        echo "<pre>";
        print_r(fileGetUser());
        echo "</pre>";

        // Remember to delete the demo add user after you use it!
    ?>
</body>
</html>

<!-- This file is a demo of how the function works -->