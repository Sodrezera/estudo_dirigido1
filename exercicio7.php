<?php  
    print "Digite quantos quilômetros você percorreu:\n";
    $km = (int) fgets(STDIN)*0.15;    
    print "Digite por quantos dias você alugou o carro:\n";
    $dias = (int) fgets(STDIN)*60;
    $aluguel= $dias+$km;
    print "O preço pelo carro alugado sera $aluguel reais.\n\n";
