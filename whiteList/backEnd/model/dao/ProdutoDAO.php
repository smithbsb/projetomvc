<?php
namespace backEnd\model\dao;

require_once(MODEL_DAO  . '/AbstractDAO.php');
require_once(TO         . '/PrdprodutoTO.php');

class ProdutoDAO extends AbstractDAO {
    
    public function createProduto($produtoTO) {
        parent::createByTO('tblprdproduto', $produtoTO);
    }
    
    public function readByCodProduto($cod) {
        return parent::readByCod('tblprdproduto', $cod);
    }
    public function readProdutos() {
        return parent::readByField('tblprdproduto', 'coprdproduto', '%%', 'order by dcproduto asc', null);
    }
    
    public function updateProduto($produtoTO) {
        parent::updateByTO('tblprdproduto', $produtoTO);
    }
    
    public function deleteProduto($cod) {
        parent::deleteByCod('tblprdproduto', $cod);
    }
    
}
?>
