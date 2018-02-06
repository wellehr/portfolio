<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	public $variable;

	public function __construct() {
		parent::__construct();	
	}

	public function carregaClientes() {
		//pega do bd todas noticias
		$this->db->select('id');
		$this->db->select('nome');
		$this->db->select('telefone');
		$this->db->select('cnpj');
		$this->db->select('email');
		$this->db->select('endereco');
		$this->db->select('data_nasc');
		$this->db->select('uf');
		$this->db->select('cidade');
		$this->db->select('cep');
		$this->db->select('bairro');

		$this->db->order_by('nome', 'ASC');
		$consulta = $this->db->get('clientes');
		return $consulta->result();
	}

	public function adicionaClientes($dados=NULL) {
		if ($dados != NULL) {
			$this->db->insert('clientes', $dados);
		}
	}

	public function editaClientesByID($id=NULL) {
		// verifica se o id é diferente de nulo
		if ($id != NULL) {
			$this->db->where('id', $id); 
			$this->db->limit(1); //limita apenas 1 registro

			$query = $this->db->get('clientes'); // pega os produtos
			return $query->row(); // retornamos o produto
		}
	}
	// atualizar produto na tabela produtos
	public function editaClientes($dados=NULL, $id=NULL){
		if ($dados != NULL && $id != NULL) { // verifica se fói passado dados e id
			// se foi passado ele faz update no registro
			$this->db->update('clientes', $dados, array('id'=>$id));
		}
	}

	public function apagaClientesByID($id=NULL) {
		// verifica se o id é diferente de nulo
		if ($id != NULL) {
			$this->db->where('id', $id); 
			$this->db->limit(1); //limita apenas 1 registro

			$query = $this->db->get('clientes'); // pega os produtos
			return $query->row(); // retornamos o produto
		}
	}

	public function apagaClientes($id=NULL) {
		//verificamos se foi passado id como parametro
		if ($id != NULL) {
			//executa a funcao db delete para deletar o produto
			$this->db->delete('clientes', array('id'=>$id));
		}
	}
}

/* End of file Produtos_model.php */
/* Location: ./application/models/Produtos_model.php */