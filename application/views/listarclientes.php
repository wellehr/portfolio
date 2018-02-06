<?php  
    $this->load->view('inc/header.php');
    $this->load->view('inc/menu.php');
?>
<div class="portfolio"> 
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="text-header-left">
                    <h2>Listar Clientes</h2>
                </div>  
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <a href="<?php echo base_url('adicionarclientes') ?>" class="btn btn-primary form-control ">
                            <i class="fa fa-plus"></i>
                            Adicionar
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <a href="<?php echo base_url('') ?>" class="btn btn-success form-control">
                            <i class="fa fa-home"></i>
                            Voltar
                        </a>
                    </div>
                </div>
                <div class="col-md-12 margin20">
                    <div class="panel">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Fone</th>
                                        <th>CPF/CNPJ</th>
                                        <th>E-mail</th>
                                        <th>Endereço</th>
                                        <th>Data_Nasc</th>
                                        <th>UF</th>
                                        <th>Mun</th>
                                        <th>Cep</th>
                                        <th>Bairro</th>
                                        <th>Ações</th>
                                    <tbody> 
                                </thead>
                                <?php 
                                    $contador = 0;
                                    foreach ($clientes as $cliente) {
                                        echo '<tr>';
                                            echo '<td>' . $cliente->id. '</td>';
                                            echo '<td>' . $cliente->nome. '</td>';
                                            echo '<td>' . $cliente->telefone. '</td>';
                                            echo '<td>' . $cliente->cnpj. '</td>';
                                            echo '<td>' . $cliente->email. '</td>';
                                            echo '<td>' . $cliente->endereco. '</td>';
                                            echo '<td>' . $cliente->data_nasc. '</td>';
                                            echo '<td>' . $cliente->uf. '</td>';
                                            echo '<td>' . $cliente->cidade. '</td>';
                                            echo '<td>' . $cliente->cep. '</td>';
                                            echo '<td>' . $cliente->bairro. '</td>';
                                            echo '<td>';
                                                echo '<a href="Site/editarclientes/'.$cliente->id.'" title="editar" class="btn btn-primary" style="margin: 2px"><span class="fa fa-pencil" aria-hidden="true"></span></a>';
                                                echo '<a href="Site/apagarclientes/'.$cliente->id.'" title="excluir" class="btn btn-danger" style="margin: 2px"><span class="fa fa-eraser" aria-hidden="true"></span></a>';
                                            echo '</td>';
                                        echo '</tr>';
                                        $contador++; 
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        Total de registros: <?php echo $contador ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
    $this->load->view('inc/footer.php');
?>