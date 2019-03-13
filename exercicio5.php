<?php  
    print "Digite quantos quilômetros deseja percorrer?\n";
    $km = (int) fgets(STDIN);
    
    print "Digite a velocidade média para a viajem:\n";
    $velo = (int) fgets(STDIN);

    $tempo = (float)$km/$velo;

    print "O tempo esperado para a viajem sera $tempo horas.\n\n";
