@extends('layout.master')
@section('title')
    Rede Encontristaas: Perfil
@stop
@section('main')
            <div class="main">
                <section>
                    <form action="contacts.php" method="post">
                        <h2>Procurar contactos</h2>
                        
                        <!-- Search Field -->
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">Procurar</span>
                            <input type="text" class="form-control" placeholder="ie Nome do SP, Nome da pessoa, Cargo...">
                            <!-- <button type="submit" class="float">Procurar</button> -->
                            <!-- Login Button -->

                        </div>
                                                    
                        <div class="table-results">                        
                        <table class="table table-stripped">
                          <tbody>
                          <tr>
                            <th>SP</th>
                            <th>Nome</th>
                            <th>Cargo</th>
                            <th>Email</th>
                            <th>Telefone</th>
                          </tr>
                          <tr>
                            <td>Buraca</td>
                            <td>João António</td>
                            <td>Coordenador</td>
                            <td>joao.antonio@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                          <tr>
                            <td>Abóboda</td>
                            <td>Rui Filipe</td>
                            <td>Coordenador</td>
                            <td>rui.filipe@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                          <tr>
                            <td>Venda-Nova</td>
                            <td>Andreia Macário</td>
                            <td>Secretário</td>
                            <td>andreia.macario@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                          <tr>
                            <td>Lavradio</td>
                            <td>Luis Duarte</td>
                            <td>Tesoureiro</td>
                            <td>luis.duarte@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                          <tr>
                            <td>Castelo-Branco</td>
                            <td>Ana Filomena</td>
                            <td>Coordenador</td>
                            <td>ana.filomena@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                          <tr>
                            <td>Entroncamento</td>
                            <td>Mariana Silva</td>
                            <td>Secretário</td>
                            <td>mariana.silva@shalom.pt</td>
                            <td>96 123 45 67</td>
                          </tr>
                        </tbody>
                        </table>
                            
                        </div>

                        
                    </form>
                </section>
        </div>
@stop