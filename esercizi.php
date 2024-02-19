<?php
// Replicare la batmobile

// class Batmobile
// {
//     public $front;
//     public $back;

//     public function __construct(ParteAnteriore $_front, PartePosteriore $_back)
//     {
//         $this->front = $_front;
//         $this->back = $_back;
//     }

//     public function attackButton()
//     {
//         $this->front->attacca();
//     }
//     public function defendButton()
//     {
//         $this->back->difendi();
//     }
// }

// abstract class ParteAnteriore
// {
//     abstract public function attacca();
// }

// class Lasers extends ParteAnteriore
// {
//     public function attacca()
//     {
//         echo "Laserati le palle \n";
//     }
// }

// class MachineGun extends ParteAnteriore
// {
//     public function attacca()
//     {
//         echo "Mitragliati i sentimenti \n";
//     }
// }

// class Rockets extends ParteAnteriore
// {
//     public function attacca()
//     {
//         echo "Razzi nell'iperspazio \n";
//     }
// }

// abstract class PartePosteriore
// {
//     abstract public function difendi();
// }

// class Shields extends PartePosteriore
// {
//     public function difendi()
//     {
//         echo "Scudami tuttoh \n";
//     }
// }

// class Smegma extends PartePosteriore
// {
//     public function difendi()
//     {
//         echo "Smegmali tuttih \n";
//     }
// }

// class Spring extends PartePosteriore
// {
//     public function difendi()
//     {
//         echo "Fammi molleggiare \n";
//     }
// }

// $macchina1 = new Batmobile(new Lasers, new Shields);

// $macchina1->attackButton();
// $macchina1->defendButton();


//? replicare Il Ristorante

// class Resaturant
// {
//     public $dishes;
//     public $drinks;

//     public function __construct(PiattiMenù $_dishes, DrinkMenù $_drinks)
//     {
//         $this->dishes = $_dishes;
//         $this->drinks = $_drinks;
//     }

//     // Metodo che stampa il menù
//     public function printMenù()
//     {
//         echo "Il nostro menù; \n";
//         echo "Piatti: \n";
//         foreach ($this->dishes->piatti as $piatto) {
//             echo "- $piatto->name : $piatto->price \n";
//         }
//         echo "Drinks: \n";
//         foreach ($this->drinks->bevande as $bevanda) {
//             echo "- $bevanda->name : $bevanda->price \n";
//         }
//     }
// }

// class Dishes
// {
//     public $name;
//     public $price;

//     public function __construct(string $_name, float $_price)
//     {
//         $this->name = $_name;
//         $this->price = $_price;
//     }
// }

// class Drinks
// {
//     public $name;
//     public $price;

//     public function __construct(string $_name, float $_price)
//     {
//         $this->name = $_name;
//         $this->price = $_price;
//     }
// }

// class PiattiMenù
// {
//     public $piatti;

//     public function __construct(array $_piatti)
//     {
//         $this->piatti = $_piatti;
//     }
// }

// $piatti = new PiattiMenù([
//     new Dishes('Carbonara', 14),
//     new Dishes('Lasagna', 18),
//     new Dishes('Amatriciana', 12),
// ]);

// class DrinkMenù
// {
//     public $bevande;

//     public function __construct(array $_bevande)
//     {
//         $this->bevande = $_bevande;
//     }
// }

// $drink = new DrinkMenù([
//     new Drinks('Acqua', 2),
//     new Drinks('Coca cola', 3.5),
//     new Drinks('Vino', 23),
//     new Drinks('Birra', 6),
// ]);

// $rest1 = new Resaturant($piatti, $drink);

// $rest1->printMenù();

// Creare un Computer con Dependency Injection e Object Composition, composto da
// RAM
// Scheda Madre
// Scheda Video
// altro

// class Computer
// {
//     public $ram;
//     public $schedaVideo;
//     public $schedaMadre;
//     public $cpu;

//     public function __construct(Ram $_ram, SchedaVideo $_schedaVideo, SchedaMadre $_schedaMadre, Cpu $_cpu)
//     {
//         $this->ram = $_ram;
//         $this->schedaVideo = $_schedaVideo;
//         $this->schedaMadre = $_schedaMadre;
//         $this->cpu = $_cpu;
//     }

//     public function mioPc()
//     {
//         echo "Composizione pc: \n";
//         echo $this->ram->modello . " " .  $this->ram->quantità . "\n";
//         echo $this->schedaVideo->modello . " " .  $this->schedaVideo->capacitàMemoria . "\n";
//         echo $this->schedaMadre->modello . "" . $this->schedaMadre->socket . "\n";
//         echo $this->cpu->modello . $this->cpu->frequenza . "\n";
//     }
// }

// class Ram
// {
//     public $modello;
//     public $quantità;

//     public function __construct(string $_modello, string $_quantità)
//     {
//         $this->modello = $_modello;
//         $this->quantità = $_quantità;
//     }
// }

// class SchedaVideo
// {
//     public $modello;
//     public $capacitàMemoria;

//     public function __construct(string $_modello, string $_capacitàMemoria)
//     {
//         $this->modello = $_modello;
//         $this->capacitàMemoria = $_capacitàMemoria;
//     }
// }

// class Cpu
// {
//     public $modello;
//     public $frequenza;

//     public function __construct(string $_modello, string $_frequenza)
//     {
//         $this->modello = $_modello;
//         $this->frequenza = $_frequenza;
//     }
// }

// class SchedaMadre
// {
//     public $modello;
//     public $socket;

//     public function __construct(string $_modello, string $_socket)
//     {
//         $this->modello = $_modello;
//         $this->socket = $_socket;
//     }
// }

// $pc1 = new Computer(
//     new Ram("G.Skill Trident Z", "16 GB"),
//     new SchedaVideo("GeForce RTX 3060", "12GB"),
//     new SchedaMadre("Asus ROG Strix B550-F Gaming", "AM4"),
//     new Cpu("AMD Ryzen 7 5800X", "4.7 Ghz")
// );

// $pc1->mioPc();
