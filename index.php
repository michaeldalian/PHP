<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page de Mike</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <!-- <script src='main.js'></script> -->
</head>

<body>
    <div>bonjour qui êtes vous?

    </div>

    <form action="Exo1.php" method="get">
        <input type="text" name="firstName" id="firstName" placeholder="Prénom" value="Mickael" />
        <input type="text" name="lastName" id="lastName" placeholder="Nom" value="Kael" />
        <input type="date" name="dateN" id="dateN" value="1976-05-22" />
        <select name="civility" id="civility">
            <option value="mr">Mr</option>
            <option value="mme">Mme</option>
            <option value="autre">Autre</option>
        </select>
        <input type="submit" name="submit" value="Get" />
    </form>

    <form action="Exo1.php" method="post" value="Post">
        <input type="text" name="firstName" id="firstName" placeholder="Prénom" value="Mickael" />
        <input type="text" name="lastName" id="lastName" placeholder="Nom" value="Kael" />
        <input type="date" name="dateN" id="dateN" value="1976-05-22" />
        <select name="civility" id="civility">
            <option value="mr">Mr</option>
            <option value="mme">Mme</option>
            <option value="autre">Autre</option>
        </select>
        <input type="submit" name="submit" value="Post" />
    </form>

    <!-- Rounded switch
    <label class="switch">
        <input type="checkbox" name="getPost" id="getPost">
        <span class="slider round"></span>
    </label> -->


</body>

</html>