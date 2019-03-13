<?php
    print "Quantos metro você deseja converter?\n";
    $metro = (int)fgets(STDIN);
    $convertimento = $metro*1000;

        print "Convertido para milímitros ficara: $convertimento\n";
