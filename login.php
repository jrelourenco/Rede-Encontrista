<!DOCTYPE html>
<html lang="pt">
<head>
        <title>Rede Encontristas: Login</title>
        
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="Blueprint: Slide and Push Menus" />
		<meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="laravel/public/css/style.css" />
    
</head>
<body>
    <div class="login">
    <div class="heading">
    <h2>Rede Encontristas</h2>
    <h3>Bem vindo! Insere as credenciais para entrares</h3>
        <form action="index.php" method="post">
        <!-- Username Field -->
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Email">
        </div>

        <!-- Password Field -->
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" placeholder="Password">
        </div>

        <!-- Login Button -->
        <button type="submit" class="float">Login</button>
        </form>
        <a href="recover.php">Recuperar Password</a>
    </div>
    </div>
</body>
</html>
