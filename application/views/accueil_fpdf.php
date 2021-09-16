<?php
    require("fpdf.php");
    class PDF extends FPDF
	{
		//en-tete
		function Header()
		{
			$this->Image(site_url("assets/img/logo.png"),10,5,40);
			$this->SetFont('Arial','',10);
			$this->SetTextColor(0,0,0);
			$this->Text(170,12,"Wiki-Madagasikara");
		
			//Titre
			$this->SetFont('Times','',17);
			$this->SetTextColor(25,135,85);
			$this->Text(72,40,"FIZAHAN-TAKELAKA");
        }

        function Footer()
        {
            // Positionnement à 1,5 cm du bas
            $this->SetY(-15);
            // Police Arial italique 8
            $this->SetFont('Arial','I',8);
            // Numéro de page
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }

		function ImprovedTable($header, $data)
		{
			// En-tête
		    foreach($header as $col)
		        $this->Cell(40,7,$col,1);
		    $this->Ln();
		    // Données
		    for($i=0;$i<count($data);$i++)
		    {
		        $this->Cell($data[$i],6,$col,1);
		        $this->Ln();
		    }
		}
	}

    $pdf=new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
	$pdf->SetFont('Times','B',16);
    $height=0;
    $pdf->Text(15,55,"I/BOKY");
    $number=1;
    foreach($livre as $li)
    {   
        $pdf->SetFont('Arial','',11);
        $pdf->Cell(0,10,$li);
        $height+=8;
        $number+=1;
    }
    // $pdf->SetFont('Times','B',16);
    // $height+=10;
    // $pdf->Text(30,$height,"II/LAHATSORATRA");
    // $numberAr=1;
    // foreach($article as $ar)
    //  {
    //     $pdf->SetFont('Arial','',11);
    //     $height+=8;
    //     $pdf->Text(30,$height,$ar);
    //     $numberAr+=1;   
    // }
    $pdf->Output();
?>