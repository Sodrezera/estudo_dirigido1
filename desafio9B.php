<?php  
    print "Digite quantos metros quadrados deseja pintar:\n";
    $metros = (int) fgets(STDIN);

	$latao_rendimentos = 18*6;
	$galao_rendimentos = 3.6*6;
	$latao_preço = 80;
	$galao_preço = 25;

	$lataoqtd = ceil($metros/$latao_rendimentos);
	$faltou = $metros % $latao_rendimentos;
    $galaoqtd = ceil($metros/$galao_rendimentos);
    $galao_preço_total = $galao_preço * $galaoqtd;

	print "Você precisara de $galaoqtd latão de tinta, e custara $galao_preço_total reais.\n\n";