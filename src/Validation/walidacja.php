<?php
namespace kf24\nrpparser\Validation;

class walidacja {
    
    /*
     * Walidacja numeru pesel
     */
    public function pesel($attribute,$value,$parametr)
    {
                // walidacja numeru Pesel
                $pPesel = '/^([0-9]{11})$/';
                $th_val = preg_replace("/([_ .-])/", '',$value);
                if(preg_match($pPesel, $th_val))
                {
                 $pPeseltab = [1,3,7,9,1,3,7,9,1,3];
                 $Pesel = $th_val;
                 $pPesel_tmp = (int)($Pesel[0])*$pPeseltab[0];
                 for($i=1; $i<10; $i++)
                     $pPesel_tmp+= (int)($Pesel[$i])*$pPeseltab[$i];
                 $pPesel_tmp=$pPesel_tmp % 10;
                if($pPesel_tmp==10)$pPesel_tmp=0;

                 return preg_match("/^([0-9]{10})({$pPesel_tmp})$/", $th_val);
                }
                return false ;   
    }
    
    
    /*
     * Walidacja numeru regon
     */
    public function regon($attribute,$value,$parametr)
    {
        $pregon = "/^([0-9]{9})$/";
        $th_val = preg_replace("/([_ .-])/", '',$value);
        if(preg_match($pregon, $th_val))
            {
                 $regon = $th_val;
                 $regon_tmp = (int)($regon[0]);
                 for($i=1; $i<8; $i++)
                     $regon_tmp*=(int)($regon[$i]);
                 $regon_tmp=$regon_tmp % 11;
                 if($regon_tmp==10)$regon_tmp=0;
                 return preg_match("/^([0-9]{8})({$regon_tmp})$/", $th_val);
            }
        return false ;   
    }
    
    
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