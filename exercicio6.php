<?php  
    print "Digite a temperatura em celcius que deseja converter:\n";
    $celcius = (int) fgets(STDIN);
    
    $celcius1 = $celcius*1.8;
    $celcius2 = $celcius1+32;

    print "A conversão para fahrenheit sera $celcius2 F.\n\n";
