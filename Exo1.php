<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <!-- <script src='main.js'></script> -->
</head>


<br> <br> <br> <br>

<body>
    <div>
        <br>

        <!-- Get the values returned by post method in an array -->
        <?php
        if (isset($_POST['firstName'])) {
            echo 'C un post<br /><br />';
            //$array = $_POST;
            $firstName = $_POST['firstName'];
            $dateN = $_POST['dateN'];
        } else {
            echo "C un Get<br /><br />";
            $firstName = $_GET['firstName'];
            $dateN = $_GET["dateN"];
        }
        // $array = array_keys($_POST);
        // $array = $_GET;
        // foreach ($array as $value) {
        //     echo $value;
        //     echo '<br />';
        //     echo $_POST['prenom'];
        // }

        echo 'Bonjour ', $firstName, ' ';
        echo 'Vous avez ' . htmlspecialchars(age($dateN)) . 'Ans !';

        function age($date)
        {
            $age = date('Y') - date('Y', strtotime($date));
            if (date('md') < date('md', strtotime($date))) {
                return $age - 1;
            }
            return $age;
        }

        ?>
    </div>

</body>

</html>