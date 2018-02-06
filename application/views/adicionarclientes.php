<?php
	$this->load->view('inc/header.php');
	$this->load->view('inc/menu.php');
?>
<div class="portfolio"> 
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="text-header-left">
                    <h2>Adicionar Clientes</h2>
                </div>  
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <a href="<?php echo base_url('listarclientes') ?>" class="btn btn-primary form-control ">
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
                    	<form class="form" id="form_add" action="Site/salvarclientes" method="POST" >
                    		<div class="col-md-4">
                    			<div class="form-group">
                    				<label>Nome:</label>
                    				<input type="text" name="nome" value="" class="form-control form-group">
                    			</div>
                    		</div>
                    		<div class="col-md-4">
                    			<div class="form-group">
                    				<label>Fone:</label>
                    				<input type="text" name="telefone" value="" class="form-control form-group">
                    			</div>
                    		</div>
                    		<div class="col-md-4">
                    			<div class="form-group">
                    				<label>CNPJ/CPF:</label>
                    				<input type="text" name="cnpj" value="" class="form-control form-group">
                    			</div>
                    		</div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>E-mail:</label>
                                    <input type="text" name="email" value="" class="form-control form-group">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Endereco:</label>
                                    <input type="text" name="endereco" value="" class="form-control form-group">
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Data de Nascimento</label>
                                    <input type="text" name="data_nasc" value="" class="form-control form-group">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>UF:</label>
                                    <select class="form-control form-group" name="uf">
                                        <option value="AM">AM</option>
                                        <option value="GO">GO</option>
                                        <option value="PR">PR</option>
                                        <option value="RS">RS</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Cidade:</label>
                                    <select class="form-control form-group" name="cidade">
                                        <option value="Anápolis">Anápolis</option>
                                        <option value="Cascavel">Cascavel</option>
                                        <option value="Curitiba">Curitiba</option>
                                        <option value="Mafra">Mafra</option>
                                        <option value="Manaus">Manaus</option>
                                        <option value="Rio Negrinho">Rio Negrinho</option>
                                        <option value="Rio Negro">Rio Negro</option>
                                        <option value="São Bento do Sul">São Bento do Sul</option>
                                        <option value="São Paulo">São Paulo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>CEP:</label>
                                    <input type="text" name="cep" value="" class="form-control form-group">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bairro:</label>
                                    <input type="text" name="bairro" value="" class="form-control form-group">
                                </div>
                            </div>
               				<br/>
               				<div class="col-md-12">
               					<div class="form-group">
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
<br><br><br><br><br>
<?php 
	$this->load->view('inc/footer.php');
?>