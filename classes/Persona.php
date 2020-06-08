<?php 
class Persona {
    public $matricola;
    public $nome;
    public $cognome;

    public function __construct($_matricola, $_nome, $_cognome) {
        $this->matricola = $_matricola;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }
    public function nomeCognome() {
        return $this->nome . ' ' . $this->cognome;
    }
}
$persona1 = new Persona(rand(1000, 9000), 'Carmine', 'Vitale');

?>