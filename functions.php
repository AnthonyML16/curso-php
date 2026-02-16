<?php
declare(strict_types=1);

function render_template(string $template, array $data = []){
    extract($data);
    require "templates/$template.php";
}

function get_data(string $url): array {
    $result = file_get_contents($url); // si solo se quiere hacer un GET de una API
    $data = json_decode($result, true);
    return $data;
}

function get_until_message (int $days): string {
    return $outputAge = match (true) {
        $days == 0 => "Hoy se estrena",
        $days <= 1  => "Mañana se estrena",
        $days <= 7  => "Esta semana se estrena",
        $days <= 30 => "Este mes se estrena",
        default    => "Falta $days días para el estreno",
    };
}
?>