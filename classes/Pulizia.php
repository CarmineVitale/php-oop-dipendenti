<?php 
include_once __DIR__ . '/Persona.php';
class Pulizia extends Persona {
    public $orario;
    public $attrezzatura;
    

    public function __construct ( $_nome, $_cognome, $_orario, $_attrezzatura) {
        parent::__construct ($_nome, $_cognome);
        $this->orario = $_orario;
        $this->attrezzatura = $_attrezzatura;
        
    }

    // public function print() {
    //     return $this->nomeCognome() . ' ' . $this->orario . ' ' . $this->attrezzatura;
    // }

}

$operai = [
    ['Brad', 'Pitt', '8:00/14:00', 'Scopa'],
    ['Angelina', 'Jolie', '14:00/20:00', 'Paletta'],
    ['Tim', 'Burton', '20:00/2:00', 'Cestino']
];

$produzione = [];

foreach ($operai as $operaio) {
    $produzione[] = new Pulizia(...$operaio);
}
//var_dump($produzione);

?>