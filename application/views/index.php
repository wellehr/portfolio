<?php 
    $this->load->view("inc/header.php");
    $this->load->view("inc/menu.php");
?>

    <div id="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                       <h2>
                                            <?php 
                                                $contador = 0;
                                                foreach ($clientes as $cliente) {
                                                    $contador++;
                                                }
                                                echo $contador;
                                            ?>
                                       </h2>
                                    </div>
                                    <div>Clientes</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('listarclientes')?>">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel" style="background-color: #bb4ff9">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-barcode fa-5x" style="color: #Fff"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h2 style="color: #fff">
                                        <?php 
                                            $contador = 0;
                                            foreach ($produtos as $produto) {
                                                $contador++;
                                            }
                                            echo $contador;
                                        ?>
                                    </h2>
                                    <div style="color: #fff">Produtos</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('listarprodutos') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>  
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel" style="background-color: #00b885">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x" style="color: #Fff"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h2 style="color: #fff">3</h2>
                                    <div style="color: #fff">Pedidos</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('listarpedidos')?>">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
<?php 
  $this->load->view("inc/footer.php");
?>