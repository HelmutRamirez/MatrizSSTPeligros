<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['actividad'] = isset($_POST['actividad']) ? $_POST['actividad'] : '';
    $_SESSION['peligro'] = isset($_POST['peligro']) ? $_POST['peligro'] : '';
    $_SESSION['riesgo'] = isset($_POST['riesgo']) ? $_POST['riesgo'] : '';
    $_SESSION['descripcion'] = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
    $_SESSION['consecuencias'] = isset($_POST['consecuencias']) ? $_POST['consecuencias'] : '';
    $_SESSION['medidas_preventivas'] = isset($_POST['medidas_preventivas']) ? $_POST['medidas_preventivas'] : '';
    $_SESSION['medidas_correctivas'] = isset($_POST['medidas_correctivas']) ? $_POST['medidas_correctivas'] : '';

    require('fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->SetFillColor(0, 128, 0); 
    $pdf->Cell(0, 10, utf8_decode('Matriz - Sst'), 0, 1, 'C', true); 
    $pdf->Ln(12);

    $pdf->SetFont('Arial', '', 12);
    $pdf->SetTextColor(0, 0, 0); 
    $pdf->SetFillColor(230, 230, 230);
    $pdf->SetDrawColor(50, 50, 50);

    $anchoColumna = 140;
    $altoFila = 7;

    function addRow($pdf, $titulo, $contenido, $anchoColumna, $altoFila) {
        $pdf->Cell(50, $altoFila, utf8_decode($titulo), 1, 0, 'L', true); 
        $pdf->MultiCell($anchoColumna, $altoFila, utf8_decode($contenido), 1, 'L', false);
        $pdf->Ln(1);
    }

    addRow($pdf, 'Actividad:', $_SESSION['actividad'], $anchoColumna, $altoFila);
    addRow($pdf, 'Peligro:', $_SESSION['peligro'], $anchoColumna, $altoFila);
    addRow($pdf, 'Riesgo:', $_SESSION['riesgo'], $anchoColumna, $altoFila);
    addRow($pdf, 'Descripción:', $_SESSION['descripcion'], $anchoColumna, $altoFila);
    addRow($pdf, 'Consecuencias:', $_SESSION['consecuencias'], $anchoColumna, $altoFila);
    addRow($pdf, 'Medidas Preventivas:', $_SESSION['medidas_preventivas'], $anchoColumna, $altoFila);
    addRow($pdf, 'Medidas Correctivas:', $_SESSION['medidas_correctivas'], $anchoColumna, $altoFila);

    $pdf->Output('D', 'Matriz-Sst.pdf');
    ob_end_flush();
}
