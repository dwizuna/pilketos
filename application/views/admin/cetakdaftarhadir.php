<?php 
		ob_start();
		$pdf = new FPDF('l', 'mm', 'a4');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(320,7,'REKAP DATA GURU DAN MURID MENGAJI PADA PENDIDIKAN AL-QURAN (TPA)',0,1,'C');
		$pdf->Cell(10,7,'',0,1);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(50,7, 'KECAMATAN', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, 'GIRIRENG', 0,1);
		$pdf->Cell(50,7, 'KABUPATEN', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, 'WAJO', 0,1);
		$pdf->Cell(50,7, 'PROVINSI', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, 'SULAWESI SELATAN', 0,1);
		$pdf->Cell(50,7, 'TANGGAL', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, date('d/m/Y'), 0,1);
		$pdf->Cell(10,7,'',0,1);
		$pdf->Cell(10,14, 'No',1,0, 'C');
		$pdf->Cell(45,14, 'Desa / Kel',1,0, 'C');
		$pdf->Cell(50,7, 'Nama Lembaga',1,0, 'C');
		$pdf->Cell(35,14, 'Nama Pimpinan',1,0, 'C');
		$pdf->Cell(40,14, 'Alamat',1,0, 'C');
		$pdf->Cell(22,7, 'Tahun',1,0, 'C');
		$pdf->Cell(22,7, 'Jumlah',1,0, 'C');
		$pdf->Cell(60,7, 'Jumlah Murid Mengaji',1,0, 'C');
		$pdf->Cell(30,14, 'Ket',1,0, 'C');
		$pdf->Cell(1,7, '',0,1, 'C');
		$pdf->Cell(55,7, '',0,0, 'C');
		$pdf->Cell(50,7, 'Pendidikan Al-Quran',1,0, 'C');
		$pdf->Cell(75,7, '',0,0, 'C');
		$pdf->Cell(22,7, 'Berdiri',1,0, 'C');
		$pdf->Cell(22,7, 'Guru',1,0, 'C');
		$pdf->Cell(30,7, 'Aktif',1,0, 'C');
		$pdf->Cell(30,7, 'Tamat',1,0, 'C');
		$pdf->Cell(30,7, '' , 0,1);
		$pdf->Cell(10,5, '1', 1,0, 'C');
		$pdf->Cell(45,5, '2', 1,0, 'C');
		$pdf->Cell(50,5, '3', 1,0, 'C');
		$pdf->Cell(35,5, '4', 1,0, 'C');
		$pdf->Cell(40,5, '5', 1,0, 'C');
		$pdf->Cell(22,5, '6', 1,0, 'C');
		$pdf->Cell(22,5, '7', 1,0, 'C');
		$pdf->Cell(30,5, '8', 1,0, 'C');
		$pdf->Cell(30,5, '9', 1,0, 'C');
		$pdf->Cell(30,5, '10', 1,1, 'C');
		
		$pdf->Output();
		ob_end_flush(); 
?>