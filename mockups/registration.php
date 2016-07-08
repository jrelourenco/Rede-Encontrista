<!DOCTYPE html>
<html lang="pt">
<?php include 'html-head.php'; ?>
<body>
    <?php include 'html-menu.php'; ?>
    <div class="container">
        <header class="clearfix">
            <h1>Inscrições de cursos e encontros</h1>
            <?php include 'html-header-nav.php'; ?>
        </header>
            <div class="main">
                <section>
                    <form action="registration.php" method="post">
                        <h2>Curso</h2>
                        
                        <!-- Course Name -->
                        <select class="form-control">
                          <option>Reencontro Cristo Nosso Irmão - 10 de Maio de 2016 @ CSh Oeiras</option>
                          <option>Curso de Oração - 12 de Abril de 2016 @ CSh Braga</option>
                          <option>Curso Pedagogia Dinâmica - 10 Junho de 2016 @ Paróquia Algés</option>
                        </select>
                        
                        <h2>Pessoas a Inscrever</h2>                        
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            João António - joao.antonio@shalom.pt
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            Luis Duarte - luis.duarte@shalom.pt
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            Ana Filomena - ana.filomena@shalom.pt
                          </label>
                        </div>
                        
                        <div>                        
                            <button type="submit" class="float">Inscrever</button>
                            <button type="submit" class="float">Desinscrever</button>
                        </div>
                        
                        <h2>Lista de Inscritos (6 no total)</h2>
                        
                        <div class="table-results">                        
                        <table class="table table-stripped">
                          <tbody>
                          <tr>
                            <th>SP</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                          </tr>
                          <tr>
                            <td>Buraca</td>
                            <td>João António</td>
                            <td>joao.antonio@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                          <tr>
                            <td>Abóboda</td>
                            <td>Rui Filipe</td>
                            <td>rui.filipe@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                          <tr>
                            <td>Venda-Nova</td>
                            <td>Andreia Macário</td>
                            <td>andreia.macario@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                          <tr>
                            <td>Lavradio</td>
                            <td>Luis Duarte</td>
                            <td>luis.duarte@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                          <tr>
                            <td>Castelo-Branco</td>
                            <td>Ana Filomena</td>
                            <td>ana.filomena@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                          <tr>
                            <td>Entroncamento</td>
                            <td>Mariana Silva</td>
                            <td>mariana.silva@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                        </tbody>
                        </table>   
                        </div>

                    </form>
                </section>
        </div>
    </div>
</body>
</html>
