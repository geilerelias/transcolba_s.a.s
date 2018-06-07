<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MiClase {

   /**
    * @assert (1, 2, 3) == 3
    * @assert (2, 3, 1) == 3
    * @assert (3, 2, 1) == 3.
    * @assert (2, 1, 3) == 3.
 **/
    public function numero_mayor($a,$b,$c){
        if ($a>$b && $a>$c) {
            return $a;
        }else if($b>$c){
            return $b;
        }else{
            return $c;
        }
    }
}
