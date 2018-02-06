<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {

		parent::__construct();
		$this->dados["titulo"]='Sistema Unopar 5º Semestre';
		$this->dados["complemento"]='-';
		$this->dados["descricao"]='';
	}

	public function index() {
		$this->load->model('Produtos_model', 'produtos'); // carrega model produtos
		$this->load->model('Clientes_model', 'clientes'); // carrega model clientes
		$this->load->model('Pedidos_model', 'pedidos'); // carrega model pedidos

		$data['produtos'] = $this->produtos->carregaProdutos(); // criamos um array para armazenar os dados - e executamos a funcao carregaprodutos do model produtos_model  - "OBSERVACAO" - Usado mesmo model e funcao para contar e mostrar quant registros na dashboard

		// mesma coisa para aclientes
		$data['clientes'] = $this->clientes->carregaClientes(); 

		// mesma coisa para pedidos
		$data['pedidos'] = $this->pedidos->carregaPedidos(); 


		$this->load->view("index", $data, $this->dados); // apenas carregamos a view inicial(index)
	}

	/********************************** CRUD CLIENTES ***************************/

	public function listarclientes() {
		$this->load->model('Clientes_model','clientes'); // carrega model clientes

		$data['clientes'] = $this->clientes->carregaClientes(); // criamos um array para armazenar os dados - e executamos a funcao carregaprodutos do model clientes model 

		$this->load->view("listarclientes", $data, $this->dados); // carrega a view listarprodutos e passamos como parametro o array clientes que guarda todos os produtos da tabela	
	}

	// page para adicionar clientes
	public function adicionarclientes() {
		$this->load->model('Clientes_model', 'clientes'); // carrega o model clientes
		$this->load->view('adicionarclientes'); // carrega a view
	}

	// function adicionar no banco de dados
	public function salvarclientes() {

		// verifica se o campo descricao é vazio, se nao cai no else
		if ($this->input->post('nome') == NULL) {
			echo 'O campo nome é obrigatorio';
			echo '<a href="listarclientes" title="voltar"> Voltar</a>';
		}else {

			$this->load->model('Clientes_model', 'clientes'); // carrega o model clientes

			// pega os dados dos inputs(post) e guarda no array $dados
			$dados['nome']   	  = $this->input->post('nome');
			$dados['telefone']    = $this->input->post('telefone');
			$dados['cnpj']   	  = $this->input->post('cnpj');
			$dados['email']   	  = $this->input->post('email');
			$dados['endereco']    = $this->input->post('endereco');
			$dados['data_nasc']   = $this->input->post('data_nasc');
			$dados['uf']   	  	  = $this->input->post('uf');
			$dados['cidade']   	  = $this->input->post('cidade');
			$dados['cep']   	  = $this->input->post('cep');
			$dados['bairro']   	  = $this->input->post('bairro');

			// verifica se foi passado id dos produtos via post
			if ($this->input->post('id') != NULL) {
				// se foi passado id faz a atualizacao
				$this->clientes->editaClientes($dados, $this->input->post('id'));
			} else {
				// executa a funcao para adicionar novo cliente
				//echo "CAIU";
				$this->clientes->adicionaClientes($dados);
			}
			// redireciona para a pagina
			redirect("listarclientes");
		}
	}

	// apagar clientes
	public function editarclientes($id=NULL) {
		// verifica se foi passado ID, se nao lista todos os clientes
		if ($id == NULL) { 
			redirect('listarclientes');
		}

		// carrega o model clientes
		$this->load->model('Clientes_model', 'clientes');

		//faz consulta no bd e verifica se existe
		$query = $this->clientes->editaClientesByID($id);

		//verifica se encontra um registro, se nao vai para lista clientes
		if ($query == NULL) {
			//echo $id;
			redirect('listarclientes');
		}

		// criamos um array para armazenar os dados de clientes e passamos com parametro na view
		$dados['clientes'] = $query;

		//carrega a view
		$this->load->view('editarclientes',$dados);
	}

	// apagar clientes
	public function apagarclientes($id=NULL) {
		//verifica se foi passado id como parametro
		if ($id == NULL) {
			redirect('listarclientes');
		}
		// carrega model
		$this->load->model('Clientes_model', 'clientes');

		// faz consulta pra verificar se existe
		$query = $this->clientes->apagaClientesByID($id);

		if ($query != NULL) {
			//executa a funcao apagaclientes
			$this->clientes->apagaclientes($query->id);
			redirect('listarclientes');
		} else {
			//echo "nao encontrou nada";
			redirect('listarclientes');
		}
	}

	/***************************** FIM CRUD CLIENTES ****************************/

	/******************************* CRUD PRODUTOS *****************************/

	public function listarprodutos() {
		$this->load->model('Produtos_model','produtos'); // carrega model produtos
		//$id_produto = $_GET['id'];
		//echo "Produto escolhido foi o ".$id_produto;
		$data['produtos'] = $this->produtos->carregaProdutos(); // criamos um array para armazenar os dados - e executamos a funcao carregaprodutos do model produtos_model 

		$this->load->view('listarprodutos', $data, $this->dados); // carrega a view listarprodutos e passamos como parametro o array produtos que guarda todos os produtos da tabela
	}


	// page para adicionar produtos
	public function adicionarprodutos() {
		$this->load->model('Produtos_model', 'produtos'); // carrega o model produtos
		$this->load->view('adicionarprodutos'); // carrega a view
	}

	// function adicionar no banco de dados
	public function salvarprodutos() {

		// verifica se o campo descricao é vazio, se nao cai no else
		if ($this->input->post('descricao') == NULL) {
			echo 'O campo nome é obrigatorio';
			echo '<a href="adicionarprodutos" title="voltar"> Voltar</a>';
		}else {

			$this->load->model('Produtos_model', 'produtos'); // carrega o model produtos

			// pega os dados dos inputs(post) e guarda no array $dados
			$dados['descricao']   = $this->input->post('descricao');
			$dados['valor_venda'] = $this->input->post('valorv');
			$dados['observacoes'] = $this->input->post('observacoes');

			// verifica se foi passado id dos produtos via post
			if ($this->input->post('id') != NULL) {
				// se foi passado id faz a atualizacao
				$this->produtos->editaProdutos($dados, $this->input->post('id'));
			} else {
				// executa a funcao para adicionar novo produto
				$this->produtos->adicionaProdutos($dados);
			}
			// redireciona para a pagina
			redirect("listarprodutos");
		}
	}


	public function editarprodutos($id=NULL) {
		// verifica se foi passado ID, se nao lista todos os produtos
		if ($id == NULL) { 
			redirect('listarprodutos');
		}

		// carrega o model produtos
		$this->load->model('Produtos_model', 'produtos');

		//faz consulta no bd e verifica se existe
		$query = $this->produtos->editaProdutosByID($id);

		//verifica se encontra um registro, se nao vai para lista produtos
		if ($query == NULL) {
			//echo $id;
			redirect('listarprodutos');
		}

		// criamos um array para armazenar os dados de produtos e passamos com parametro na view
		$dados['produto'] = $query;

		//carrega a view
		$this->load->view('editarprodutos',$dados);
	}

	public function apagarprodutos($id=NULL) {
		//verifica se foi passado id como parametro
		if ($id == NULL) {
			redirect('listarprodutos');
		}
		// carrega model
		$this->load->model('Produtos_model', 'produtos');

		// faz consulta pra verificar se existe
		$query = $this->produtos->apagaProdutosByID($id);

		if ($query != NULL) {
			//executa a funcao apagarprodutos
			$this->produtos->apagaprodutos($query->id);
			redirect('listarprodutos');
		} else {
			//echo "nao encontrou nada";
			redirect('listarprodutos');
		}
	}

	/****************************** FIM CRUD PRODUTOS **************************/

	/******************************** CRUD PEDIDOS *****************************/

	public function listarpedidos() {
		$this->load->model('Pedidos_model','pedidos'); // carrega model pedidos
		$data['pedidos'] = $this->pedidos->carregaPedidos(); 

		$this->load->view("listarpedidos", $data, $this->dados); // carrega a view listarpedidos e passamos como parametro o array pedidos que guarda todos os pedidos	
	}


	// page para adicionar pedidos
	public function adicionarpedidos() {
		$this->load->model('Clientes_model', 'clientes'); //carrega o model clientes
		$this->load->model('Produtos_model', 'produtos'); //carrega o model produtos
		$this->load->model('Pedidos_model', 'pedidos');  // carrega o model pedidos

		$data['clientes'] = $this->clientes->carregaClientes();
		$data['produto']  = $this->produtos->carregaProdutos();

		$this->load->view('adicionarpedidos', $data, $this->dados); // carrega a view
	}


	/******************************* FIM CRUD PEDIDOS **************************/
	public function page404() {
		$this->load->view("page404", $this->dados); // apenas carregamos a view 404 quando nao achar o diretorio
	}
}