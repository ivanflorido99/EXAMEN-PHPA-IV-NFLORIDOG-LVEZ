<?php

$sueldo1=$_POST["sueldo1"];
$tipoimpositivo=$_POST["tipoimpositivo"];

$tipoimpositivo(5,15,20,30,45);


$res=$sueldo1*$tipoimpositivo;



    if ($sueldo1<10000) {
        $res=$tipoimpositivo=5;
            echo "su tipo impositivo es  : ".$res;
 
        }
    


        elseif ($sueldo1 10000==20000) {
            $res=$tipoimpositivo=20;
            echo "su tipo impositivo es  : ".$res;
        }    


     elseif ($sueldo1 20000==35000) {
        $res=$tipoimpositivo=20;
        echo "su tipo impositivo es  : ".$res;

     }

        elseif ($sueldo1 35000==60000) {
            $res=$tipoimpositivo=30;
            echo "su tipo impositivo es  : ".$res;
        }


            elseif ($sueldo1<60000) {
                $res=$tipoimpositivo=45;
                echo "su tipo impositivo es  : ".$res;
        


     }

else {
    Echo "error"
    
}



?>