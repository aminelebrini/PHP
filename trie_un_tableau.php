<?php
    $tab = [1,5,7,3,9,8];
    $length = sizeof($tab);
        for($x = 0; $x < $length; $x++)
        {
             $tmp;
            for($z = 0; $z < $length - $x - 1; $z++)
            {
                if($tab[$z] > $tab[$z+1])
                {
                    $tmp = $tab[$z];
                    $tab[$z] = $tab[$z+1];
                    $tab[$z+1] = $tmp; 
                }
            }
        }
        print_r($tab);
?>