<?php
function aSaber($v, $n)
    {
        $n = 0;
        $i = $n-1; $n++;
        $result = 0; $n++;
        while ($i >=0)
        {
            $result = $result + $v[$i];
            $i = $i-1;
            $n++;
        }
        echo "La complejidad del algoritmo es: ", $n, "<br>"; 
        return $result;
   
    }
    $arreglo = array(1,2,3,4);
    echo aSaber($arreglo,count($arreglo));
?>