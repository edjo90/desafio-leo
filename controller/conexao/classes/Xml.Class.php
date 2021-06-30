<?php
/* Descricao do XML */

class Xml {

	//atributos
	private $xml;
	private $tab = 1;
	
	//metodos
	public function __construct($version = '1.0', $encode='UTF-8') {
		$this->xml .= "<?php version='$version' encode='$encode'?>\n";
	}
	
	public function openTag($name) {
		$this->addTab();
		$this->xml .= "<$name>\n";
		$this->tab++;
	}	
	
	public function closeTag($name) {
		$this->tab--;
		$this->addTab();
		$this->xml .= "</$name>\n";
	}

	public function setValue() {
		$this->xml .= "$value\n";
	}	

	private function addTab() { // adiciona \t coloca espacamento a esquerda para identacao
		for ($i =1; $i <= $this->tab; $i++ ) {
			$this->xml .= "\t";
		}
	}
	
	public function addTag( $name, $value) {
		$this->addTab();
		$this->xml .= "<$name>$value</$name>\n";
	}

	public function __toString() {
		return $this->xml;
	}
}	
?>