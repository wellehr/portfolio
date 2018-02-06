<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('')?>" style="color: #fff"><i class="fa fa-book"></i> Portfólio</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li style="color: #fff">
                    <a href="<?php echo base_url('listarclientes')?>" style="color: #fff"><i class="fa fa-user"></i> Clientes</a>
                </li>
                <li>
                    <a href="<?php echo base_url('listarprodutos')?>" style="color: #fff"><i class="fa fa-barcode"></i> Produtos</a>
                </li>
                <li>
                    <a href="<?php echo base_url('listarpedidos')?>" style="color: #fff"><i class="fa fa-file-text"></i> Pedidos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>