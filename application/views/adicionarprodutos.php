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
                        <a href="<?php echo base_url('listarprodutos') ?>" class="btn btn-primary form-control ">
                            <i class="fa fa-list"></i>
                            Listar
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
                    	<form class="form" id="form_add" action="<?php echo base_url('Site/salvarprodutos')?>" method="POST" >
                    		<div class="row">
                    			<div class="col-md-4">
                    				<label>Descrição</label>
                    				<input type="text" name="descricao" value="" class="form-control">
                    			</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-4">
                    				<label>Valor venda</label>
                    				<input type="text" name="valorv" value="" class="form-control">
                    			</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-4">
                    				<label>Observações</label>
                    				<textarea name="observacoes" class="form-control" cols="7" rows="5"></textarea>
                    			</div>
                    		</div>
               				<br/>
               				<div class="row">
               					<div class="col-md-12">
               						<button type="submit" class="btn btn-primary margin15"><i class="fa fa-plus"></i> Inserir</button>
               					</div>
               				</div>
                    	</form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
	$this->load->view('inc/footer.php');
?>