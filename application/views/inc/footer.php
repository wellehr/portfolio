    <!--<footer class="footer">      
        <p>Copyright © <?php echo date('Y') ?> | by: 
            <a href="http://www.wribeiro.pe.hu" target="_blank">Wellisson Ribeiro
            </a>
        </p>             
    </footer>
    -->
    <!-- helper js-->
    <script src="<?php echo base_url('plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dist/js/pages/dashboard.js') ?>"></script>
    <script>
        $("#item").on('change', function(){
            $.ajax({
                type: 'get',
                url: '<?php echo base_url("Site/listarprodutos") ?>',
                data: {
                    id: $(this).val()
                },
                success: function(callback){
                    if(callback == 0){
                        console.log("Mensagem de Erro");
                    }else{
                        $('#preco').val(callback);
                    }
                }
            });
        });
    </script>
    <script>
        $('#btnInsere').on('click', function(){
            $('#itensTabela tbody').append('<tr><td>1</td>                                                        <td>Teclado</td>                                                        <td>4</td>                                                      <td class="sub_total">R$ 30,00</td><td> R$ 00,00</td>                                                        <td>R$ 120,00</td>                                                        <td>                                                            <button class="btn btn-danger" type="button">Remover</button>                                                        </td></tr>');
        });

        function total(){
        $('#itensTabela').find('tr > td.sub_total').each(function(){
            /*$.ajax({
                type: "post",
                url: "<?php echo base_url("Site/listarprodutos") ?>",
                data: {
                    id_produto: $('#idproduto').val(),
                    id_pessoa:  $('#idpessoa').val()
                },
                success: function(callback){
                    if(callback == "0") {
                        console.log('erro');
                    }else{
                        console.log('gravado com sucesso');
                    }
                }
            });*/
            var subtotal = subtotal + $(this).html();
            console.log(subtotal);
        });
    }
    </script>
</body>
</html>