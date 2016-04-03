<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Rede Encontristas: Perfil</title>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Blueprint: Slide and Push Menus" />
    <meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>
    <div class="container">
        <header class="clearfix">
            <h1>O teu Perfil</h1>
            <nav>
                <a href="./profile.php" class="icon-profile" data-info="user profile">Ver Perfil</a>
                <a href="./login.php" class="icon-logout" data-info="logout">Logout</a>
            </nav>
        </header>
            <div class="main">
                <section>
                    <form action="index.php" method="post">
                        <h2>Dados de Login</h2>
                        
                        <!-- Email Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" value="joao@shalom.pt">
                        </div>

                        <!-- Password Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" value="*******">
                        </div>
                        
                        <h2>Dados de Pessoais</h2>
                        
                        <!-- Nome Completo -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" value="João Nascimento do Carmo">
                        </div>
                        
                        <!-- Alcunha -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" value="Jonas">
                        </div>

                        <!-- Birthday Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" value="25/12/1980">
                        </div>

                        <!-- Login Button -->
                        <button type="submit" class="float">Editar</button>
                    </form>
                </section>
        </div>
    </div>
</body>
</html>
