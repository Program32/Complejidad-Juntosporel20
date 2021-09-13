<?php
    function aSaber($v,$tamano)
    {
        $n = 0;
        $result = 0;
        $i = $tamano-1;
        while (i>=0)
        {
            $result=$result+ $v[i];
            $i=$i-2;
            $n++;
        }
        echo "La complejidad es: ", $n, "<br>";
        return $result;    
    }
    $v=[2,6,9,7,8]
    echo aSaber($v, count($v));
?>