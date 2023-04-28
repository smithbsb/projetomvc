<?php

class PrdprodutoTO {
    private $coprdproduto = null;
    private $dcproduto = null;
    private $vlproduto = null;
    
    public function getcoprdproduto() {
        return $this->coprdproduto;
    }
    public function setcoprdproduto($coprdproduto) {
        $this->coprdproduto = $coprdproduto;
    }

    public function getdcproduto() {
        return $this->dcproduto;
    }
    public function setdcproduto($dcproduto) {
        $this->dcproduto = $dcproduto;
    }

    public function getvlproduto() {
        return $this->vlproduto;
    }
    public function setvlproduto($vlproduto) {
        $this->vlproduto = $vlproduto;
    }
}
?>
