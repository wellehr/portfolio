<?php
	$this->load->view('inc/header.php');
	$this->load->view('inc/menu.php');
?>
<div class="portfolio"> 
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="text-header-left">
                    <h2>Editar Produtos</h2>
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
                        <!-- User echo base_url('Site/salvarprodutos')  ao inves de somente Site/salvarprodutos, não pega ID na url -->
                    	<form class="form" id="form_edit" action="<?php echo base_url('Site/salvarprodutos')?>" method="POST" >
                    		<div class="row">
                    			<div class="col-md-4">
                    				<label>Descrição</label>
                    				<input type="text" name="descricao" value="<?php echo $produto->descricao ?>" class="form-control">
                    			</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-4">
                    				<label>Valor venda</label>
                    				<input type="text" name="valorv" value="<?php echo $produto->valor_venda ?>" class="form-control">
                    			</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-4">
                    				<label>Observações</label>
                    				<textarea name="observacoes" class="form-control" cols="7" rows="5"><?php echo $produto->observacoes ?></textarea>
                    			</div>
                    		</div>
               				<br/>
               				<div class="row">
               					<div class="col-md-12">
                                    <input type="hidden" name="id" value="<?php echo $produto->id ?>">
               						<button type="submit" class="btn btn-primary margin15"><i class="fa fa-pencil"></i> Editar</button>
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