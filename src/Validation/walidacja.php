<?php
namespace kf24\nrpparser\Validation;

class walidacja {
    
    /*
     * Walidacja numeru nip-u
     */
    public function nip($attribute,$value,$parametr)
    {
        $pNIP= "/^([0-9]{10})$/";
        $pRm = "/([_ .-])/";
        $val = preg_replace($pRm, '',$value);
        if(preg_match($pNIP, $val))
        {
           $pNIPtab = [6,5,7,2,3,4,5,6,7];
           $NIP = $val;
           $pNIP_tmp = (int)($NIP[0])*$pNIPtab[0];
           for($i=1; $i<9; $i++)
                $pNIP_tmp += (int)($NIP[$i])*$pNIPtab[$i]; 
           $pNIP_tmp=$pNIP_tmp % 11;
           if($pNIP_tmp==10)$pNIP_tmp=0;
           return preg_match("/^([0-9]{9})({$pNIP_tmp})$/", $val);
        }
        return false;
    }
}