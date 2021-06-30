<?php
/**
 * classe TForm
 * Classe para constru��o de formul�rios
 */
class TForm
{
    protected $fields;      // array de objetos contidos pelo form
    private   $name;        // nome do formul�rio
    
    /**
     * m�todo construtor
     * instancia o formul�rio
     * @param  $name = nome do formul�rio
     */
    public function __construct($name = 'att_form')
    {
        $this->setName($name);
    }
    
    /**
     * m�todo setName()
     * define o nome do formul�rio
     * @param  $name    = nome do formul�rio
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * m�todo setEditable()
     * Define se o formul�rio poder� ser editado
     * @param  $bool = TRUE ou FALSE
     */
    public function setEditable($bool)
    {
        if ($this->fields)
        {
            foreach ($this->fields as $object)
            {
                $object->setEditable($bool);
            }
        }
    }
    
    /**
     * m�todo setFields()
     * Define quais s�o os campos do formul�rio
     * @param  $fields = array de objetos TField
     */
    public function setFields($fields)
    {
        foreach ($fields as $field)
        {
            if ($field instanceof TField)
            {
                $name = $field->getName();
                $this->fields[$name] = $field;
                
                if ($field instanceof TButton)
                {
                    $field->setFormName($this->name);
                }
            }
        }
    }
    
    /**
     * m�todo getField()
     * Retorna um campo do formul�rio por seu nome
     * @param  $name    = nome do campo
     */
    public function getField($name)
    {
        return $this->fields[$name];
    }
    
    /**
     * m�todo setData()
     * Atribui dados aos campos do formul�rio
     * @param  $object = objeto com dados
     */
    public function setData($object)
    {
        foreach ($this->fields as $name => $field)
        {
            if ($name) // labels n�o possuem nome
            {
                $field->setValue($object->$name);
            }
        }
    }
    
    /**
     * m�todo getData()
     * Retorna os dados do formul�rio em forma de objeto
     */
    public function getData($class = 'StdClass')
    {
        $object = new $class;
        foreach ($_POST as $key=>$val)
        {
            if (get_class($this->fields[$key]) == 'TCombo')
            {
                if ($val !== '0')
                {
                    $object->$key = $val;
                }
            }
            else
            {
                $object->$key = $val;
            }
        }
        
        // percorre os arquivos de upload
        foreach ($_FILES as $key => $content)
        {
            $object->$key = $content['tmp_name'];
        }
        
        return $object;
    }

    /**
     * m�todo add()
     * Adiciona um objeto no formul�rio
     * @param  $object = objeto a ser adicionado
     */
    public function add($object)
    {
        $this->child = $object;
    }
    
    /**
     * m�todo show()
     * Exibe o formul�rio na tela
     */
    public function show()
    {
        // instancia TAG de formul�rio
        $tag = new TElement('form');
        $tag->name   = $this->name; // nome do formul�rio
        $tag->method = 'post';      // m�todo de transfer�ncia
        // adiciona o objeto filho ao formul�rio
        $tag->add($this->child);
        // exibe o formul�rio
        $tag->show();
    }
}
?>