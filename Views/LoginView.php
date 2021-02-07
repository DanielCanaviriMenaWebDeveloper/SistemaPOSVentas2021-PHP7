<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.png">

        <!-- EXTERNAL CSS -->
        <!-- Bootstrap CSS -->
        <link href="Views/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="Views/css/bootstrap-theme.css" rel="stylesheet">
        
        <!-- Font Icon -->
        <link href="Views/css/elegant-icons-style.css" rel="stylesheet" >
        <link href="Views/css/font-awesome.css" >
        
        <!-- CUSTOM STYLES -->
        <link rel="stylesheet" href="Views/css/style.css">
        <!-- <link rel="stylesheet" href="Views/css/style-responsive.css"> -->

        <title>iCont - Sistema Profesional Para Empresa</title>
    </head>
    <body class="login-img3-body">

        <div class="container">

            <form class="login-form" action="../icont/Controller/AccessUsers.php">
                <div class="login-wrap">
                    <p class="login-img">
                        <i class="icon_lock_alt"></i>
                    </p>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <input type="text" name="usuario" class="form-control" placeholder="Nombre de Usuario" autofocus>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Remember me 
                        <span class="pull-right"><a href="#">Forgot Password</a></span>
                    </label>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                    <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
                </div>
            </form>

            
        </div>
    </body>
</html>