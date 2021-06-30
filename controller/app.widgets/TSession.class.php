<?php
/**
 * classe TSession
 * Gerencia uma se��o com o usu�rio
 */
class TSession
{
    /**
     * m�todo construtor
     * inicializa uma se��o
     */
    function __construct()
    {
        session_start();
    }
    
    /**
     * m�todo setValue()
     * Armazena uma vari�vel na se��o
     * @param  $var   = Nome da vari�vel
     * @param  $value = Valor
     */
    function setValue($var, $value)
    {
        $_SESSION[$var] = $value;
    }
    
    /**
     * m�todo getValue()
     * Retorna uma vari�vel da se��o
     * @param  $var   = Nome da vari�vel
     */
    function getValue($var)
    {
        return $_SESSION[$var];
    }
    
    /**
     * m�todo freeSession()
     * Destr�i os dados de uma se��o
     */
    function freeSession()
    {
        $_SESSION = array();
        session_destroy();
    }
}
?>
