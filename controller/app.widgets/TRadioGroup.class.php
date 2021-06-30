<?php
/**
 * classe TRadioGroup
 * Classe para exibi��o de um grupo de Radio Buttons
 */
class TRadioGroup extends TField
{
    private $layout = 'vertical';
    private $items;
    
    /**
     * m�todo setLayout()
     * Define a dire��o das op��es (vertical ou horizontal)
     */
    public function setLayout($dir)
    {
        $this->layout = $dir;
    }
    
    /**
     * method addItems($items)
     * adiciona itens (bot�es de r�dio)
     * @param  $items = array idexado contendo os itens
     */
    public function addItems($items)
    {
        $this->items = $items;
    }
    
    /**
     * m�todo show()
     * exibe o widget na tela
     */
    public function show()
    {
        if ($this->items)
        {
            // percorre cadauma das op��es do r�dio
            foreach ($this->items as $index => $label)
            {
                $button = new TRadioButton($this->name);
                $button->setValue($index);
                
                // se possui qualquer valor
                if ($this->value == $index)
                {
                    // marca o radio button
                    $button->setProperty('checked', '1');
                }
                $button->show();
                $obj = new TLabel($label);
                $obj->show();
                
                if ($this->layout == 'vertical')
                {
                    // exibe uma tag de quebra de linha
                    $br = new TElement('br');
                    $br->show();
                }
                
                echo "\n";
            }
        }
    }
}
?>
