<?php
declare(strict_types=1);

class SuperHero
{
    // propiedades y métodos
    /* public $name;
    public $powers;
    public $planet;

    public function __construct($name, $powers, $planet)
    {
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet;
    } */

    /* Promoted properties -> PHP 8 */
    public function __construct(
        readonly private string $name, /* Prevenir modificación */ /* Private restringe la visibilidad externa */
        public array $powers,
        public string $planet
    ) {
    }

    public function attack()
    {
        return "¡$this->name ataca con sus poderes";
    }

    function description()
    {
        $powers = implode(', ', $this->powers); /* Convertir array en cadena de texto */

        return "$this->name es un superhéroe que viene de
        $this->planet y tiene los siguientes poderes:
        $powers";
    }

    public static function random() {
        $names = ['Thor', 'Spiderman', 'Iron Man'];
        $powers = [
            ['Fuerza', 'Volar', 'Matrillo'],
            ['Traje', 'Telaraña', 'Fuerza'],
            ['Volar', 'Inteligencia', 'Dinero'],
        ];
        $planets = ['Asgard', 'Tierra', 'Tierra'];

        $name = $names[array_rand($names)]; // Llave random del array 
        $power = $powers[array_rand($powers)]; // Llave random del array 
        $planet = $planets[array_rand($planets)]; // Llave random del array

        return new self($name, $power, $planet); /* Crear una clase con los datos del método estático */
    }
}

/* $hero = new SuperHero('Superman', ['Fuerza', 'rayos lásers'], 'Krypton');
echo $hero->description(); // Método público */

$hero = SuperHero::random(); /* Acceder a random de la clase SuperHero -> Acceder a método estático */
echo $hero->description();