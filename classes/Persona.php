<?php 
class Persona {
    public $matricola;
    public $nome;
    public $cognome;

    public function __construct( $_nome, $_cognome) {
        
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }
    // public function nomeCognome() {
    //     return $this->nome . ' ' . $this->cognome;
    // }
}


?>