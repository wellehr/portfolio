<?php  
    $this->load->view('inc/header.php');
    $this->load->view('inc/menu.php');
?>
<div class="portfolio"> 
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="text-header-left">
                    <h2>Adicionar Produtos</h2>
                </div>  
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <a href="<?php echo base_url('adicionarprodutos') ?>" class="btn btn-primary form-control ">
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
                    <div class="table-responsive">
                        <div class="panel">
                            <table class="table table-bordered table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descrição</th>
                                        <th>Valor venda</th>
                                        <th>Observações</th>
                                        <th>Ações</th>
                                    <tbody> 
                                </thead>
                                <?php 
                                    $contador = 0;
                                    foreach ($produtos as $produto) {
                                        echo '<tr>';
                                            echo '<td>' . $produto->id. '</td>';
                                            echo '<td>' . $produto->descricao. '</td>';
                                            echo '<td>' . 'R$ ' .$produto->valor_venda. '</td>';
                                            echo '<td>' . $produto->observacoes. '</td>';
                                            echo '<td>'; 
                                                echo '<a href="Site/editarprodutos/'.$produto->id.'" title="editar" class="btn btn-primary" style="margin: 2px"><span class="fa fa-pencil" aria-hidden="true"></span></a>';
                                                echo '<a href="Site/apagarprodutos/'.$produto->id.'" title="excluir" class="btn btn-danger" style="margin: 2px"><span class="fa fa-eraser" aria-hidden="true"></span></a>';
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