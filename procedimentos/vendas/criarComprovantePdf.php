<?php 
// Carregar dompdf
require_once '../../lib/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$id = $_GET['idvenda'];


// Passar url onde vai mostrar relatório em PDF
$html = file_get_contents("http://localhost:8000/view/vendas/comprovanteVendaPdf.php?idvenda=".$id);

// Instanciamos um objeto da classe DOMPDF
$pdf = new DOMPDF();

// Definindo o tamanho do papel e orientação
$pdf->set_paper(array(0,0,104,250));

// Carregar o conteúdo html.
$pdf->load_html(utf8_decode($html));

// Renderizar PDF.
$pdf->render();

// Enviando pdf para o navegador
$pdf->stream('relatorioVenda.pdf');
