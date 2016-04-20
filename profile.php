<!DOCTYPE html>
<html lang="pt">
<?php include 'html-head.php'; ?>
<body>
    <?php include 'html-menu.php'; ?>
    <div class="container">
        <header class="clearfix">
            <h1>O teu Perfil</h1>
            <?php include 'html-header-nav.php'; ?>
        </header>
            <div class="main">
                <section>
                    <form action="profile.php" method="post">
                        <h2>Dados de Login</h2>
                        
                        <!-- Email Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Email</span>
                            <input type="text" class="form-control" value="joao@shalom.pt" disabled name="email">
                        </div>

                        <!-- Password Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Password</span>
                            <input type="password" class="form-control" value="*******" disabled name="password">
                        </div>
                        
                        <h2>Dados de Pessoais</h2>
                        
                        <!-- Name -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Nome</span>
                            <input type="text" class="form-control" value="João Nascimento do Carmo" disabled name="nome">
                        </div>
                        
                        <!-- Nickname -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Alcunha</span>
                            <input type="text" class="form-control" value="Jonas" disabled name="alcunha">
                        </div>

                        <!-- Birthday Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Data de Nascimento</span>
                            <input type="text" class="form-control" value="25/12/1980" disabled name="data_nascimento">
                        </div>
                        
                        <!-- Address -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Morada</span>
                            <input type="text" class="form-control" value="Rua Fernão Magalhães nº5 3Esq" disabled name="morada">
                        </div>
                        
                        <!-- Postal Code -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Código Postal</span>
                            <input type="text" class="form-control" value="2620-123" disabled name="cod_postal">
                        </div>
                        <!-- Login Button -->
                        <button type="submit" class="float" visibility="hidden">Editar</button>
                    </form>
                </section>
        </div>
    </div>
    
    <?php
        define("DB_NAME", "rede_encontr_bd");
        define("DB_USER", "root");
        define("DB_PASS", "");
        define("DB_HOST", "localhost");

        //-----------CONECAO E SELECAO DA BASE DE DADOS-------------
        $link=mysql_connect(DB_HOST, DB_USER, DB_PASS);
            if (!$link)
                die("Impossivel realizar a conecção ".mysql_error());

        $db_selected=mysql_select_db(DB_NAME, $link);
            if (!$db_selected)
                die("Impossivel de usar ".DB_NAME.": ".mysql_error());
        //-----------------------------------------------------------

        //----------------INTRODUCAO DOS VALORES---------------------
        $vnome=$_POST["nome"];
        $valcunha=$_POST["alcunha"];
        $vdata_nascimento=$_POST["data_nascimento"];
        $vmorada=$_POST["morada"];
        $vcpostal=$_POST["cod_postal"];

        $sql="INSERT INTO encontrista(nome, alcunha, data_nascimento, morada, cod_postal) VALUES ("$vnome, $valcunha, $vdata_nascimento, $vmorada, $vcpostal")";
            if(!mysql_query($sql))
                die("Erro: ".mysql_error());
        //-----------------------------------------------------------
            
        mysql_close();
    ?>
</body>
</html>
