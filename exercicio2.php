<?php
    print "De uma quantidade de dias:\n";
    $dias = (int) fgets(STDIN);
    $hora = $dias*24;
    $minutos = $hora*60;
    $segundos = $minutos*60;
    print "O seu dia tera $hora horas, $minutos minutos, e um total de $segundos segundo.\n\n";
