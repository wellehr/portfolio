<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos_model extends CI_Model {

	public $variable;

	public function __construct() {
		parent::__construct();	
	}

	public function carregaProdutos() {
		//pega do bd todas noticias
		$this->db->select('id');
		$this->db->select('descricao');
		$this->db->select('valor_venda');
		$this->db->select('observacoes');

		$this->db->order_by('descricao', 'ASC');
		$consulta = $this->db->get('produtos');
		return $consulta->result();
	}

	public function adicionaProdutos($dados=NULL) {
		if ($dados != NULL) {
			$this->db->insert('produtos', $dados);
		}
	}

	public function editaProdutosByID($id=NULL) {
		// verifica se o id é diferente de nulo
		if ($id != NULL) {
			$this->db->where('id', $id); 
			$this->db->limit(1); //limita apenas 1 registro

			$query = $this->db->get('produtos'); // pega os produtos
			return $query->row(); // retornamos o produto
		}
	}

	// atualizar produto na tabela produtos
	public function editaProdutos($dados=NULL, $id=NULL){
		if ($dados != NULL && $id != NULL) { // verifica se fói passado dados e id
			// se foi passado ele faz update no registro
			$this->db->update('produtos', $dados, array('id'=>$id));
		}
	}

	public function apagaProdutosByID($id=NULL) {
		// verifica se o id é diferente de nulo
		if ($id != NULL) {
			$this->db->where('id', $id); 
			$this->db->limit(1); //limita apenas 1 registro

			$query = $this->db->get('produtos'); // pega os produtos
			return $query->row(); // retornamos o produto
		}
	}

	public function apagaProdutos($id=NULL) {
		//verificamos se foi passado id como parametro
		if ($id != NULL) {
			//executa a funcao db delete para deletar o produto
			$this->db->delete('produtos', array('id'=>$id));
		}
	}
}

/* End of file Produtos_model.php */
/* Location: ./application/models/Produtos_model.php */