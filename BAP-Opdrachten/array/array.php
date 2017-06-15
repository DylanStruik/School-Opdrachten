<?php
opdracht1();
opdracht2();
opdracht3();
opdracht4();
opdracht5();
opdracht6();

function opdracht1()
{
    echo '<h3>Opdracht 1.1</h3>';
    $nummer1 = array('2', '4', '6', '1', '3', '5');
    foreach ($nummer1 as $i) {
        echo "$i<br>";
    }
}

function opdracht2()
{
    echo '<h3>Opdracht 1.2</h3>';
    $nummer1 = array('2', '4', '6', '1', '3', '5');
    $verandering = array(5 => '8');
    $anders = array_replace($nummer1, $verandering);
    foreach ($anders as $let) {
        echo "$let<br>";
    }
}

function opdracht3()
{
    echo '<h3>Opdracht 1.3</h3>';
    $nummer1 = array('2', '4', '6', '1', '3', '5');
    array_push($nummer1, "9", "7");
    foreach ($nummer1 as $let) {
        echo "$let<br>";
    }
}

function opdracht4()
{
    echo '<h3>Opdracht 1.4</h3>';
    $mixed = array('4', 'januari', 'februari', '12', 'maart', '11', 'april');
    foreach ($mixed as $i) {
        echo "$i<br>";
    }
}

function opdracht5()
{
    echo '<h3>Opdracht 1.5</h3>';
    $mixed = array('4', 'januari', 'februari', '12', 'maart', '11', 'april', 'mei', 'juni', '8');
    $veranderd = array(0 => 'fietspomp', 1 => 'ventiel', 2 => 'lucht');
    $aanpassing = array_replace($mixed, $veranderd);
    foreach ($aanpassing as $let) {
        echo "$let<br>";
    }
}

function opdracht6(){
    echo '<h3>Opdracht 1.5</h3>';
    $subjects = array("PHP" => "Ingrit",
        "JavaScript" => "Ed",
        "Engels" => "Paul");

    foreach ($subjects as $vak => $leeraar) {
        echo '<p>De docent van ' . $vak . " is " . $leeraar . '</p>';
    }
}
