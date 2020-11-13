<?php

/**
 * Comprueba si el rut ingresado es valido
 *
 * @param $rut string
 * @return true o false
 */

function valida_rut($Rut)
{
    $rut = preg_replace('/[^k0-9]/i', '', $Rut);
    $dv  = substr($Rut, -1);
    $numero = substr($Rut, 0, strlen($Rut)-1);
    $i = 2;
    $suma = 0;
    foreach(array_reverse(str_split($numero)) as $v)
    {
        if($i==8)
            $i = 2;

        $suma += $v * $i;
        ++$i;
    }

    $dvr = 11 - ($suma % 11);

    if($dvr == 11)
        $dvr = 0;
    if($dvr == 10)
        $dvr = 'K';

    if($dvr == strtoupper($dv))
        return true;
    else
        return false;
}
