<?php
// include class
require_once("conexion.php");
require('../../boucher/fpdf.php');

//Consulta a la db ecesarioa para armar el boucher

$voucherId = $_GET['voucherId'];
$sql = "SELECT p.pago_id as boletaId, p.fecha as fecha, p.asientos as cantidad, p.precio as precio, c.nombres as nombre, c.apellidos as apellidos, c.dni as dni, pl.nombre_pelicula as pelicula FROM pago p 
    INNER JOIN pelicula pl on p.pelicula_id = pl.id_pelicula 
    inner JOIN cliente c on p.cliente_id = c.cod_usuario
                                WHERE p.pago_id = $voucherId";
                                //se ejecuta la conecxion a base de datos
$resultado = $cnx->query($sql);
$voucher = $resultado->fetchObject();
//una ves que ya optenemos toda la inforamcion del pago, nosotros lo que hacemos es utilizar una libreria externa para poder generar el pdf
//aca le damos parametros de como se va crear el documneto
$total = number_format(($voucher->precio * (int)$voucher->cantidad), 2, '.', ',');
//aca se crea el pdf en blanco que le vamos a estar dandole o agregandole celdas del comprobante de pago
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell(0,11,'Center Films',0,0,'C');
$pdf->SetFont('Arial','',16);
$pdf->Ln();
//en la fecha se va registrar la fecha que se a realizado en el pago
$pdf->Cell(0,8,'Fecha: ' . date('Y-m-d', strtotime($voucher->fecha))  , 0, 0, 'R');
$pdf->Ln();
$pdf->Cell(0,8,'Nro: BO22-0000' . $voucher->boletaId  , 0, 0, 'R');
$pdf->Ln();

$pdf->SetFont('Arial','',13);
$pdf->Cell(30,8,'RUC');
$pdf->Cell(10,8,'20123456781');
$pdf->Ln();



$pdf->SetFont('Arial','',13);
$pdf->Cell(30,8,'Cliente');
$pdf->Cell(10,8,$voucher->nombre . ' ' . $voucher->apellidos);
$pdf->Ln();
$pdf->Cell(30,8,'DNI');
$pdf->Cell(10,8,$voucher->dni);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',13);
$pdf->Cell(110,8,'Descripcion');
$pdf->Cell(20,8,'Cant');
$pdf->Cell(30,8,'precio');
$pdf->Cell(30,8,'Sub Total');
$pdf->Ln();

$pdf->SetFont('Arial','',13);
$pdf->Cell(110,8,$voucher->pelicula);
$pdf->Cell(20,8,$voucher->cantidad);
$pdf->Cell(30,8,$voucher->precio);
$pdf->Cell(30,8, $total);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Cell(0,8,'Total: S/. ' . $total , 1, 0, 'R');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Cell(0,8,'Gracias por su preferencia', 0, 0, 'C');
$pdf->Output();
?>