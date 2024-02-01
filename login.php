<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="/sge/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <form action="comprobarLogin.php" method="post"> <br> 
    &nbsp;&nbsp;username &nbsp;<input type="text" name="user" id="user"> <br>
    &nbsp;&nbsp;<div id="nombre"></div>
    &nbsp;&nbsp;password &nbsp;<input type="text" name="pw" id="pw"> <br><br>
    &nbsp;&nbsp;<div id="contrasena"></div>
    &nbsp;&nbsp;<input type="submit" id="Login" value="Login" class="btn btn-success"> &nbsp;&nbsp;<a href="crearUser.php">Registrate</a>
    </form>
    

</body>
</html>
