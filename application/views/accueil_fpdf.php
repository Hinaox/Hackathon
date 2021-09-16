<?php
    require("fpdf.php");
    var_dump($categorie);
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

        function Body()
        {
            // $this->SetFont('Times','',17);
			// foreach($categorie as $cat)
            // {
            //     $this->Text(30,40,"1-".$cat['nom']);
            // }
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
    $pdf->AddPage();
	$pdf->SetFont('Times','B',12);
	$pdf->SetTextColor(0,0,0);
    $pdf->Body();
    $pdf->Output();
?>