<?php
require_once("./Studente.php");
require_once("./Persona.php");

    $stud = new Studente();
    $stud -> setNome("Gaia");
    $stud -> setCognome("Faberi");
    $stud -> setMatricola("hikwefwf");
    echo json_encode($stud);
?>