<?php
function aSaber($v, $tamano)
    {
        $n = 0;
        $i = 0; $n++;
        $result = 0; $n++;
        while ($i < $tamano)
        {
            $result = $result + $v[$i];
            $i = $i+1;
            $n++;
        }
        echo 'El número de instruciones es:', $n, "<br>";
        return $result;

    }
    $arreglo = array(1,2,3,4);
    echo aSaber($arreglo, count($arreglo));
?>