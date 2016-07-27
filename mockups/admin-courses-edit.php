<!DOCTYPE html>
<html lang="pt">
<?php include 'html-head.php'; ?>
<body>
    <?php include 'html-menu.php'; ?>
    <div class="container">
        <header class="clearfix">
            <h1>Gestão de Cursos</h1>
            <?php include 'html-header-nav.php'; ?>
        </header>
            <div class="main">
                <section>
                    <form action="admin-courses-edit.php" method="post">
                        <h2>
                            <?php
                                if(isset($_POST['create-button'])) {
                                    echo "Criar um curso";
                                } else { 
                                    echo "Editar curso";
                                };
                            ?>
                        </h2>
                        
                        <!-- Course Type -->
                        <select class="form-control">
                          <option>Reencontro Cristo Nosso Irmão</option>
                          <option>Curso de Oração</option>
                          <option>Curso Pedagogia Dinâmica</option>
                        </select>
                        
                        <h2>Data do curso</h2>
                        <div class='col-md-5'>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker6'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        Data de Inicio
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-5'>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker7'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        Data de Fim
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>                       
                        
                        <!-- Login Button -->
                        <button type="submit" class="float">Criar</button>
                    </form>
                </section>
        </div>
    </div>
    
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker6').datetimepicker();
            $('#datetimepicker7').datetimepicker({
                useCurrent: false //Important! See issue #1075
            });
            $("#datetimepicker6").on("dp.change", function (e) {
                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker7").on("dp.change", function (e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>
</body>
</html>
