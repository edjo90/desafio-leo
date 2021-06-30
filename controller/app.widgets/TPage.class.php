<?php
/**
 * classe TPage
 * Classe para controle do fluxo de execu��o
 */
class TPage extends TElement
{
    /**
     * m�todo __construct()
     *
     */
    public function __construct()
    {
        parent::__construct('html');
    }
    
    /**
     * m�todo show()
     * Exibe o conte�do da p�gina
     */
    public function show()
    {
        $this->run();
        parent::show();
    }
    
    /**
     * m�todo run()
     * Executa determinado m�todo de acordo com
     *  os par�metros recebidos
     */
    public function run()
    {
        if ($_GET)
        {
            $class  = $_GET['class'];
            $method = $_GET['method'];
            
            if ($class)
            {
                $object = $class == get_class($this) ? $this : new $class;
                if (method_exists($object, $method))
                {
                    call_user_func(array($object, $method), $_GET);
                }
            }
            else if (function_exists($method))
            {
                call_user_func($method, $_GET);
            }
        }
    }
}
?>