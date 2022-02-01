<?php

class BenefietAvond
{
    function kostenBenefietConcert($aantalBezoekers, $prijsTickets) {
        $aantalBezoekers = 1200;
        $prijsTickets = 45;
        $totaalBedrag = round($aantalBezoekers * $prijsTickets);
        $maxBandUitgaven = round((20 / 100)* $totaalBedrag);

        if ($aantalBezoekers <600 || >2500) {
            alert("Concert afgelast, het aantal bezoekers valt buiten de prognose.");
        }
        if ($prijsTickets <25 || >75){
            alert("Deze ticketprijzen zijn niet realistisch, de verkoopprijs moet tussen de 25 en 75 euro liggen.");
        }
        if ($maxBandUitgaven < 3500) {
            alert("Voor dit bedgrag is geen band beschikbaar, verhoog de ticketprijs.");
        }
        return $maxBandUitgaven;   
    }
    
}
//phpunit doet het niet. wget werkt ook niet op mijn laptop, en ook de composer wil niet installeren. Jammer maar kan er niet veel aan doen. 
?>