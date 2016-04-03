<!DOCTYPE html>
<html lang="pt">
<?php include 'html-head.php'; ?>
<body>
    <?php include 'html-menu.php'; ?>
    <div class="container">
        <header class="clearfix">
            <h1>Contactos</h1>
            <nav>
                <a href="./profile.php" class="icon-profile" data-info="user profile">Ver Perfil</a>
                <a href="./login.php" class="icon-logout" data-info="logout">Logout</a>
            </nav>
        </header>
            <div class="main">
                <section>
                    <form action="contacts.php" method="post">
                        <h2>Procurar contactos</h2>
                        
                        <!-- Search Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Procurar</span>
                            <input type="text" class="form-control" placeholder="ie Nome do SP, Nome da pessoa, Cargo...">
                        </div>
                        
                        <table id="table-results" class="table table-bordered table-stripped table-hover">
                          <tbody>
                          <tr>
                            <th>SPs</th>
                            <th>Population ( 2007 Est.)</th>
                            <th>Population % of World</th>
                            <th>% Population ( Penetration )</th>
                            <th>Usage % of World</th>
                          </tr>
                          <tr>
                            <td>Buraca</td>
                            <td>933,448,292</td>
                            <td>14.2 %</td>
                            <td>3.5 %</td>
                            <td>3.0 %</td>
                          </tr>
                          <tr>
                            <td>Aboboda</td>
                            <td>3,712,527,624</td>
                            <td>56.5 %</td>
                            <td>10.5 %</td>
                            <td>35.6 %</td>
                          </tr>
                          <tr>
                            <td>Venda-Nova</td>
                            <td>809,624,686</td>
                            <td>12.3 %</td>
                            <td>38.6 %</td>
                            <td>28.6 %</td>
                          </tr>
                          <tr>
                            <td>Lavradio</td>
                            <td>193,452,727</td>
                            <td>2.9 %</td>
                            <td>10.0 %</td>
                            <td>1.8 %</td>
                          </tr>
                          <tr>
                            <td>Castelo-Branco</td>
                            <td>334,538,018</td>
                            <td>5.1 %</td>
                            <td>69.4 %</td>
                            <td>21.2 %</td>
                          </tr>
                          <tr>
                            <td>Braga</td>
                            <td>556,606,627</td>
                            <td>8.5 %</td>
                            <td>16.0 %</td>
                            <td>8.1 %</td>
                          </tr>
                          <tr>
                            <td>Entroncamento</td>
                            <td>34,468,443</td>
                            <td>0.5 %</td>
                            <td>53.5 %</td>
                            <td>1.7 %</td>
                          </tr>
                        </tbody>
                        </table>

                        <!-- Login Button -->
                        <button type="submit" class="float">Procurar</button>
                    </form>
                </section>
        </div>
    </div>
</body>
</html>
