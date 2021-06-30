<?php
/**
 * classe TSeparator
 * Classe para exibir linhas separadoras
 */
class TSeparator extends TField
{
    /**
     * m�todo construtor
     * instancia o objeto
     * @param  $name    = nome interno do campo
     * @param  $size    = tamanho em pixels
     */
    public function __construct($size)
    {
        $this->setEditable(true);
        $this->setSize($size);
    }
    
    /**
     * m�todo show()
     * exibe o widget na tela
     */
    public function show()
    {
        echo "<div style='position:relative; width:{$this->size}px;'>";
        echo "<hr>";
        echo "</div>";
    }
}
?>