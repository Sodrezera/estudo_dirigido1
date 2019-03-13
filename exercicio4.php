<?php  
    print "Digite o preço da mercadoria:\n";
    $preço = (int) fgets(STDIN);
    
    print "Digite o desconto do seu produto:\n";
    $desconto = (int) fgets(STDIN);

    $preço1 = $desconto/100;
    $novopreço = $preço*$preço1;
    $novopreço1 = $preço-$novopreço;

    print "Seu produto com um desconto de $desconto%, sera: $novopreço1.\n\n";
