<?php 
include_once __DIR__ . '/Persona.php';

class Dirigente extends Persona {
    public $ufficio;
    public $stipendio;

    public function __construct ( $_nome, $_cognome, $_ufficio, $_stipendio) {
        parent::__construct ( $_nome, $_cognome);
        $this->ufficio = $_ufficio;
        $this->stipendio = $_stipendio;
    }

    public function printAll() {
        return $this->nomeCognome() . ' ' . $this->ufficio . ' ' . $this->stipendio;
    }
    public function RAL($num) {
        if (!is_int($num)) {
            throw new Exception('Il parametro non è un numero');
        }
        return $this->stipendio * $num;
    }
}

$dirigenti = [
    ['Paolo', 'Duzioni', '106A', rand(2000,5000)],
    ['Carmine', 'Vitale', '105C', rand(500 ,1000)],
    ['Lorenzo', 'Balsano', '115D', rand(2000,5000)]
];
$org = [];

foreach ($dirigenti as $dirigente) {
    
    $org[] = new Dirigente(...$dirigente);
    
}
//var_dump($org);
?>