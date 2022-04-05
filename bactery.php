<?php
$greenB = $_POST['greenB'];
$redB = $_POST['redB'];
$takt = $_POST['takt'];

$newRedB = 0;
$newGreenB = 0;

    for($i = 0; $i<$takt; $i++){
        $newRedB = 0;
        $newGreenB = 0;
        for($j = 0; $j<$redB;$j++){
            $newRedB = $newRedB+4;
            $newGreenB = $newGreenB+3;
        }
        for($j = 0; $j<$greenB;$j++) {
            $newGreenB = $newGreenB+5;
            $newRedB = $newRedB+2;
        }
        $redB = $newRedB;
        $greenB = $newGreenB;
    }


exit("Число красных бактерий - ".$redB.' число зеленных бактерий - '.$greenB);



?>