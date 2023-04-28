<?php
namespace backEnd\control\facade\bo;

require_once(MODEL_DAO      . '/ProdutoDAO.php');

use backEnd\model\dao\ProdutoDAO;

class ProdutoBO {
    
    public function createProduto($produtoTO) {
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->createProduto($produtoTO);
    }
    
    public function readByCodProduto($cod) {
        $produtoDAO = new ProdutoDAO();
        $produtoTO = $produtoDAO->readByCodProduto($cod);
        return $produtoTO;
    }
    public function readProdutos() {
        $produtoDAO = new ProdutoDAO();
        $list_of_produtos = $produtoDAO->readProdutos();
        return $list_of_produtos;
    }
    
    public function updateProduto($produtoTO) {
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->updateProduto($produtoTO);
    }
    
    public function deleteProduto($cod) {
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->deleteProduto($cod);
    }
    
}
?>
