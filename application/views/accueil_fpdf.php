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
            $this->SetY(30);
            //Titre
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
    $pdf->SetFont('Times','B',17);
    $pdf->SetTextColor(0,96,46);
    $pdf->Text(72,40,"FIZAHAN-TAKELAKA");
    $pdf->SetTextColor(0,0,0);
	$pdf->SetFont('Times','B',16);
    $pdf->Ln(25);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(10,0,"I/BOKY");
    $pdf->Ln(4);
    $number=1;
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',11);
    foreach($livre as $li)
    {   
        $pdf->Cell(10,8,$li,0,1);
        $number+=1;
    }
    $pdf->Ln(8);
    $pdf->SetFont('Times','B',16);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(10,0,"II/LAHATSORATRA");
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln(3);
    foreach($article as $ar)
    {
        $pdf->Cell(10,8,$ar,0,1);
    }

    //debut livre
    $pdf->Ln(8);
    $pdf->SetFont('Times','B',16);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(10,0,"I/BOKY");
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln(10);
    
    for($i=0;$i<count($bookPdf);$i++)
    {
        $pdf->SetFont('Arial','',15);
        $pdf->Cell(187,10,"LOHATENY: ".strtoupper($bookPdf[$i]['titre']),1,0,'C');
        $pdf->Ln(20);
        $pdf->Cell(75,45,$pdf->Image($picBook[$i].".png",$pdf->GetX(), $pdf->GetY(),70,90));
        $pdf->Cell(75,10,"Mpanoratra : ".$bookPdf[$i]['auteur'],0,2);
        $pdf->Cell(75,10,"Sokajy : ".$bookPdf[$i]['categories'],0,2);
        $pdf->Cell(75,10,"Daty nampidirana : ".$bookPdf[$i]['daty'],0,2);
        $pdf->MultiCell(0,5,"Mombamombany : ".$bookPdf[$i]['texte'],0,1);
        //$pdf->Ln(100);
        $pdf->AddPage();
    }

    //debut article
    $pdf->Ln(8);
    $pdf->SetFont('Times','B',16);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(10,0,"II/LAHATSORATRA");
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln(10);

    for($i=0;$i<count($articlePdf);$i++)
    {
        $pdf->SetFont('Arial','',15);
        $pdf->MultiCell(187,10,"LOHATENY: ".strtoupper($articlePdf[$i]['titre']),1,1);
        $pdf->Ln(20);
        // $pdf->Cell(75,45,$pdf->Image($picArticle[$i],$pdf->GetX(), $pdf->GetY(),70,90));
        $pdf->Cell(75,10,"Sokajy : ".$articlePdf[$i]['categories'],0,2);
        $pdf->Cell(75,10,"Daty nampidirana : ".$articlePdf[$i]['daty'],0,2);
        $pdf->MultiCell(0,5,"Mombamombany : ".$articlePdf[$i]['texte'],0,1);
        //$pdf->Ln(100);
        if($i!=count($articlePdf)-1){
            $pdf->AddPage();
        }
       
    }
    
    $pdf->Output();
?>