<?php  
    print "Digite quantos quilômetros deseja percorrer:\n";
    $km = (int) fgets(STDIN);    
    print "Digite a velocidade média para a viajem:\n";
    $velo = (int) fgets(STDIN);
    $tempo = $km/$velo;
    $tempo1= $tempo*60;
    print "O tempo esperado para a viajem sera $tempo1 minutos.\n\n";
