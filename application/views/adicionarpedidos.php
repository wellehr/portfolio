<?php
	$this->load->view('inc/header.php');
	$this->load->view('inc/menu.php');
?>
<div class="portfolio"> 
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="text-header-left">
                    <h2>Adicionar Pedidos</h2>
                </div>  
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2">
                        <div class="form-group">
                            <a href="<?php echo base_url('listarpedidos') ?>" class="btn btn-primary form-control ">
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
                </div>
                <div class="col-md-12 margin20">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Lançamento de Pedidos
                        </div>
                        <div class="panel-body">
                        	<form class="form" id="form_add" action="Site/salvarclientes" method="POST" >
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Data da emissão:</label>
                                        <input type="text" name="data" value="<?php echo date('Y/m/d'); ?>" class="form-control form-group">
                                    </div>
                                </div>
                        		<div class="col-md-6">
                        			<div class="form-group">
                        				<label>Cliente:</label>
                        				<select class="form-control form-group" name="cliente">
                                            <?php 
                                                foreach ($clientes as $cliente){ 
                                                    echo "<option value=\"$cliente->id\">$cliente->nome</option>";
                                                }
                                            ?>
                                        </select>
                        			</div>
                        		</div>
                        		<div class="col-md-2">
                        			<div class="form-group">
                        				<label>Promoção:</label>
                        				<select class="form-control form-group" name="promocao">
                                            <option value="fim de ano">Fim de ano</option>
                                            <option value="liquidacao">Liquidação</option>
                                            <option value="natal">Natal</option>
                                            <option value="pascoa">Páscoa 2017</option>
                                        </select>
                        			</div>
                        		</div>
                        		<div class="col-md-2">
                        			<div class="form-group">
                        				<label>Cartão(Bandeira):</label>
                        				<select class="form-control form-group" name="cartao">
                                            <option value="elo">Elo</option>
                                            <option value="hipercard">Hipercard</option>
                                            <option value="MasterCard">MasterCard</option>
                                            <option value="visa">Vista</option> 
                                        </select>
                        			</div>
                        		</div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Item:</label>
                                        <select class="form-control form-group" id="item" name="item">
                                            <?php 
                                                foreach ($produto as $key => $produtos){ 
                                                    echo "<option id='".$key."' value=\"$produtos->id\">$produtos->descricao</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Preço:</label>
                                        <input type="text" name="preco" id="preco" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Quant:</label>
                                        <input type="text" name="quantidade" id="quantidade" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Desconto:</label>
                                        <input type="text" name="desconto" id="desconto" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" id="btnInsere" type="button">Adicionar Item</button>   
                                </div>

                                <div class="col-md-12">
                                    <hr style="background-color: #44495b; height: 1px">
                                </div>
                                <div class="col-md-12 margin20">
                                    <div class="form-group">
                                        <label>Itens do Pedido:</label>
                                        <div class="table-responsive">
                                            <table id="itensTabela" class="table table-bordered table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Cod</th>
                                                <th>Produto</th>
                                                <th>Quantidade</th>
                                                <th>Preço</th>
                                                <th>Desconto</th>
                                                <th>Subtotal</th>
                                                <th>Ações</th>
                                            </tr>
                                            </thead>
                                                <tbody>          
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Teclado USB</td>
                                                        <td>4</td>
                                                        <td>R$ 30,00</td>
                                                        <td>R$ 00,00</td>
                                                        <td>R$ 120,00</td>
                                                        <td>
                                                            <button class="btn btn-danger" type="button">Remover</button>
                                                        </td>
                                                    </tr>  
                                                </tbody>
                                            </table>  
                                        </div>
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
        </div>
    </section>
</div>
<br><br><br><br><br>
<?php 
	$this->load->view('inc/footer.php');
?>