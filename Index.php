<?php

require_once 'classes/Escritorio.php';
require_once 'classes/Armario.php';
require_once 'classes/Gaveta.php';
require_once 'classes/itens/Documento.php';
require_once 'classes/itens/Objeto.php';
require_once 'classes/itens/Pasta.php';


$documento1 = new Documento("Contrato de Trabalho", "Contrato assinado pela Tray", "2024-01-01");
$documento2 = new Documento("Relatório de Finanças", "Relatório de 2023", "2023-12-31");
$documento3 = new Documento("Proposta Comercial", "Proposta realizada para o cliente Vinícius", "2023-10-15");
$documento4 = new Documento("Planejamento Estratégico", "Planos para os próximos 3 anos da empresa", "2022-05-20");
$documento5 = new Documento("Planos de Emergência", "Planos de ação para situações de emergência", "2023-01-14");
$documento6 = new Documento("Contrato para Prestações de Serviço", "Contrato com fornecedores de TI", "2021-06-29");

$objeto1 = new Objeto("Celular", "Celular Redmi note 11s", 180.0);
$objeto2 = new Objeto("Carimbo", "Carimbo oficial do escritório", 0.2);
$objeto3 = new Objeto("Grampeador", "Grampeador Tilibra", 0.25);
$objeto4 = new Objeto("Caderno de Reuniões", "Caderno Tilibra", 2.6);
$objeto5 = new Objeto("Lanterna de Emergência", "Lanterna Tática - Invictus", 3.0);
$objeto6 = new Objeto("Marcador de Texto", "Marca Texto Cis", 0.02);

$pasta1 = new Pasta("Relatórios Contábeis", "Pasta contendo relatórios contábeis e financeiros da empresa", "Financeiro");
$pasta2 = new Pasta("Registro de Vendas", "Pasta com registros de vendas anteriores", "Vendas");
$pasta3 = new Pasta("Projetos", "Pasta com projetos e estratégias de expansão", "Projetos");
$pasta4 = new Pasta("Protocolos de Saúde", "Pasta de instruções de sagurança e saúde", "Saúde");
$pasta5 = new Pasta("Registros de Manutenção", "Pasta de histório de manutenção dos equipamentos", "Operacional");


$gaveta1 = new Gaveta([$documento1, $objeto1]);
$gaveta2 = new Gaveta([$documento2, $objeto2, $pasta1]);
$gaveta3 = new Gaveta([$documento3, $objeto3, $pasta2]);
$gaveta4 = new Gaveta([$documento4, $objeto4, $pasta3]);
$gaveta5 = new Gaveta([$documento5, $objeto5, $pasta4]);
$gaveta6 = new Gaveta([$documento6, $objeto6, $pasta5]);


$armario1 = new Armario([$gaveta1, $gaveta2]);
$armario2 = new Armario([$gaveta3, $gaveta4]);
$armario3 = new Armario([$gaveta5, $gaveta6]);


$escritorio = new Escritorio([$armario1, $armario2, $armario3]);


$escritorio->auditoria();

?>