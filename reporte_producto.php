<?php

require('fpdf/fpdf.php');

class PDF extends FPDF {
    function Header(){
        $this->Image('img/logo2.png',12,5,60);
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(90);
        $this->Cell(10,40,'REPORTE DE PRODUCTOS',0,0,'C');
        $this->Ln(30);
    }

    function Footer(){
        $this->SetY(-10);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0,10,'B&L TECHNOLOGY S.A.C '.$this->PageNo());
    }
}

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFillColor(95,186,167);
$pdf->Cell(4);
$pdf->Cell(15,10,'ID',1,0,'C',1);
$pdf->Cell(73,10,'SERVICIO',1,0,'C',1);
$pdf->Cell(25,10,'PRECIO',1,0,'C',1);
$pdf->Cell(70,10,'PROMOCION',1,1,'C',1);

$pdf->SetFont('Times','',12);

$con=mysqli_connect('localhost','root','','cable_net');
if ($con==false) {

} else {
    $consulta=mysqli_query($con, "select * from servicio");

    while($resultado=mysqli_fetch_array($consulta)) {
        $pdf->Cell(4);
        $pdf->Cell(15,8,$resultado['idservicio'],1,0,'C');
        $pdf->Cell(73,8,$resultado['descripcion'],1,0,'L');
        $pdf->Cell(25,8,$resultado['precio'],1,0,'C');
        $pdf->Cell(70,8,$resultado['promocion'],1,1,'L');
    }

    $pdf->Output();
}

?>