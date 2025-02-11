<?php

    include("./Alunno.php");

    $alunno1 = new Alunno();
    $alunno1 -> setNome("Gaia");
    $alunno1 -> setCognome("Faberi");
    $alunno1 -> setEta(19);

    $alunno2 = new Alunno();
    $alunno2 -> setNome("Matteo");
    $alunno2 -> setCognome("Fabiani");
    $alunno2 -> setEta(18);

    $alunno3 = new Alunno();
    $alunno3 -> setNome("Omg");
    $alunno3 -> setCognome("Omgone");
    $alunno3 -> setEta(19);

    $alunni = ["alunno1" => $alunno1, "alunno2" => $alunno2, "alunno3" => $alunno3];
    foreach ($alunni as $studenti => $alunno) {
        echo $alunno->stampa() . ", ";
    }
?>