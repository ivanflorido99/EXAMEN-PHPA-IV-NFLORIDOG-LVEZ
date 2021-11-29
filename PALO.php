<?php

$cadena=$_POST["cadena1"];



function esPolindromo($cadena)
{
    if (strlen($cadena)<2) {
        return false;
    }

    $cadena=strtolower(str_replace($cadena));
 
    for ($i=0;$i<strlen($cadena);$i++) {
        if ($cadena[$i]!=$cadena[strlen($cadena)-$i-1]) {
            return false;
        }
    }
    return true;
}

}
switch ($cadena) {
    case 'espoliondormo':
        espoliondormo($cadena)
        break;
    }




?>