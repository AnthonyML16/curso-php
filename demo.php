<?php
$name = 'Anthony';
$isDev = true;
$age = 65;

define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

$output = "Hola \"$name\", con edad de $age.";
$outputAge = match (true) {
    $age < 2   => "Eres un bebé, $name",
    $age < 10  => "Eres un niño, $name",
    $age < 18  => "Eres un adolescente, $name",
    $age == 18 => "Eres mayor de edad, $name",
    $age < 35  => "Eres un adulto joven, $name",
    $age < 60  => "Eres un adulto viejo, $name",
    default    => "Estas para la otra, $name",
};

$bestLanguajes = ['PHP', 'Javascript', 'Python', 1];
$bestLanguajes[] = 'Java'; /* Añade al final del array */
$bestLanguajes[3] = 'Typescript'; /* Cambiar elemento del array */

$person = [
    'name' => 'Anthony',
    'age' => 21,
    'isDev' => true,
    'languajes' => ['PHP', 'Javascript', 'Python'],
];
$person['name'] = 'Luis';
$person['languajes'][] = 'Java';
?>

<ul>
    <?php foreach ($bestLanguajes as $key => $languaje) : ?>
        <li><?= $key . ' ' . $languaje; ?></li>
    <?php endforeach; ?>
</ul>

<h2><?= $outputAge; ?></h2>

<img src="<?= LOGO_URL; ?>" alt="PHP logo" width="200">
<h1>
    <?= "¡Mi primera app!"; ?>
</h1>
<h2>
    <?= $output; ?>
</h2>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>