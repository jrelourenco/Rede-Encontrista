<!DOCTYPE html>
<html lang="pt">
<?php include 'html-head.php'; ?>
<body>
    <?php include 'html-menu.php'; ?>
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
                    <form action="profile.php" method="post">
                        <h2>Dados de Login</h2>
                        
                        <!-- Email Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Email</span>
                            <input type="text" class="form-control" value="joao@shalom.pt" disabled>
                        </div>

                        <!-- Password Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Password</span>
                            <input type="password" class="form-control" value="*******" disabled>
                        </div>
                        
                        <h2>Dados de Pessoais</h2>
                        
                        <!-- Name -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Nome</span>
                            <input type="text" class="form-control" value="João Nascimento do Carmo" disabled>
                        </div>
                        
                        <!-- Nickname -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Alcunha</span>
                            <input type="text" class="form-control" value="Jonas" disabled>
                        </div>

                        <!-- Birthday Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Data de Nascimento</span>
                            <input type="text" class="form-control" value="25/12/1980" disabled>
                        </div>
                        
                        <!-- Address -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Morada</span>
                            <input type="text" class="form-control" value="Rua Fernão Magalhães nº5 3Esq" disabled>
                        </div>
                        
                        <!-- Postal Code -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Código Postal</span>
                            <input type="text" class="form-control" value="2620-123" disabled>
                        </div>
                        <!-- Login Button -->
                        <button type="submit" class="float">Editar</button>
                    </form>
                </section>
        </div>
    </div>
</body>
</html>
