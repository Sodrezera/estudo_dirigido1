<?php  
    print "Digite a quantidade do seu salário:\n";
    $salario = (int) fgets(STDIN);    
    print "Digite a porcentagem do seu aumento:\n";
    $aumento = (int) fgets(STDIN);
    $aumento1 = $aumento/100;
    $novosalario = $salario*$aumento1;
    $novosalario1 = $salario+$novosalario;
    print "Seu novo salário com o aumento de $aumento%, sera: $novosalario1.\n\n";
