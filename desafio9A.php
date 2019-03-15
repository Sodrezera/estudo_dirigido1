<?php  
    print "Digite quantos metros quadrados deseja pintar:\n";
    $metros = (int) fgets(STDIN);

	$latao_rendimentos = 18*6;
	$galao_rendimentos = 3.6*6;
	$latao_preço = 80;
	$galao_preço = 25;

	$lataoqtd = ceil($metros/$latao_rendimentos);
	$latao_preço_total = $lataoqtd*$latao_preço;

	print "Você precisara de $lataoqtd latão de tinta, e custara $latao_preço_total reais.\n\n";
