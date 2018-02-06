<?php  
    $this->load->view('inc/header.php');
    $this->load->view('inc/menu.php');
?>
<div class="portfolio"> 
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="text-header-left">
                    <h2>Listar Pedidos</h2>
                </div>  
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <a href="<?php echo base_url('adicionarpedidos') ?>" class="btn btn-primary form-control ">
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
                                        <th>Cliente</th>
                                        <th>Data Emissão</th>
                                        <th>Promoção</th>
                                        <th>Cartão</th>
                                        <th>Total</th>
                                        <th>Ações</th>
                                    <tbody> 
                                </thead>
                                <tr>
                                    <td>1</td>
                                    <td>Wellisson</td>
                                    <td>25/04/2017</td>
                                    <td>Natal</td>
                                    <td>MasterCard</td>
                                    <td>R$ 120,00</td>
                                    <td>
                                        <a href="Site/editarclientes/'.$cliente->id.'" title="editar" class="btn btn-primary" style="margin: 2px"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                                        <a href="Site/apagarclientes/'.$cliente->id.'" title="excluir" class="btn btn-danger" style="margin: 2px"><span class="fa fa-eraser" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Comercial</td>
                                    <td>02/04/2017</td>
                                    <td>Fim de ano</td>
                                    <td>Visa</td>
                                    <td>R$ 1.250,00</td>
                                    <td>
                                        <a href="Site/editarclientes/'.$cliente->id.'" title="editar" class="btn btn-primary" style="margin: 2px"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                                        <a href="Site/apagarclientes/'.$cliente->id.'" title="excluir" class="btn btn-danger" style="margin: 2px"><span class="fa fa-eraser" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Amanda B.</td>
                                    <td>03/04/2017</td>
                                    <td>Páscoa 2017</td>
                                    <td>Visa</td>
                                    <td>R$ 52,00</td>
                                    <td>
                                        <a href="Site/editarclientes/'.$cliente->id.'" title="editar" class="btn btn-primary" style="margin: 2px"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                                        <a href="Site/apagarclientes/'.$cliente->id.'" title="excluir" class="btn btn-danger" style="margin: 2px"><span class="fa fa-eraser" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        Total de registros: 3
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<br><br><br><br>
<br><br><br><br>
<?php 
    $this->load->view('inc/footer.php');
?>