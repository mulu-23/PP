<?php
$phrases = [
    "ЧЕГО СКАЗАТЬ-ТО ХОТЕЛ, МИЛОК?!",
    "АСЬ?! ГОВОРИ ГРОМЧЕ, ВНУЧЕК!",
    "НЕТ, НИ РАЗУ С ## ГОДА!",
    "ДО СВИДАНИЯ, МИЛЫЙ!"
];

$exitCount = 0;

echo $phrases[0] . "\n";

while (true) {
    $line = trim(fgets(STDIN));
    
    if (strpos($line, '!') === false) {
        echo $phrases[1] . "\n";
        $exitCount = 0;
        continue;
    }
    
    $upper = strtoupper($line);
    if ($upper == 'ПОКА!') {
        $exitCount++;
        if ($exitCount >= 3) {
            echo $phrases[3] . "\n";
            break;
        }
        $year = rand(1930, 1950);
        $response = str_replace('##', $year, $phrases[2]);
        echo $response . "\n";
        continue;
    }
    
    if (strpos($line, '!') !== false) {
        $year = rand(1930, 1950);
        $response = str_replace('##', $year, $phrases[2]);
        echo $response . "\n";
        $exitCount = 0;
    }
}