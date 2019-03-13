<?php  
    print "Digite quantos cigarros você fuma por dia:\n";
    $pordia = (int) fgets(STDIN);    
    print "Digite por quantos anos você fuma:\n";
    $anos = (int) fgets(STDIN);
    $diastotais = $anos*365;
    $cigarrototais = $diastotais*$pordia;
    $tempoperdido = round((($cigarrototais*10)/24)/60);
    print "Você perdeu $tempoperdido dias da sua vida.\n\n";
