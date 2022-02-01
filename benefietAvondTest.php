<?php

@dataProvider testKostenBenefietConcert


class BenefietAvondTest 
{
    function testKostenBenefietConcert($aantalBezoekers, $prijsTickets)
    {
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
        if ($maxBandUitgaven > 7000){
            alert("Te duur, zoek een goedkopere band")
        }
        if ($totaalBedrag < 2000) {
            alert("Veel te weinig, verhoog de ticket prijzen of adverteer beter.")
        }
        
        return $maxBandUitgaven;   


    }

}



?>