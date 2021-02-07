<?php


$cnt = 0; 
$modulus = 2; // In welchem Körper wird gerechnet?

for ($x = 0; $x<$modulus; $x++) {
    for ($y=0; $y<$modulus; $y++){
        
        // PHP Modulo Fuck-up
        $formelRechts = ($y*$y +$x*$y );
        $ergRechts = ($formelRechts%$modulus); 
        if ($ergRechts <0){
            $ergRechts += abs($modulus);
        }

        // PHP Modulo Fuck-up
        $formelLinks = ($x*$x*$x +1);
        $ergLinks = ( $formelLinks % $modulus); 
        if ($ergLinks <0){
            $ergLinks += abs($modulus);
        }

        if (  $ergLinks == $ergRechts  ){
            $cnt++;
            print "Punkt: (" . $x . ", " . $y . ")\n";    
        }
    }
}
print "Anzahl der Punkte: " .$cnt;

?> 
