<?php 

namespace App\Libraries;

class Hash{

    static function encrypt($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }

    
    static  function verify($userPassword,$dbUserPassword){
        
        
        return password_verify($userPassword, $dbUserPassword);
       //return hash_equals($dbUserPassword, crypt($userPassword, $dbUserPassword));
       //return $userPassword.'<br>'.$dbUserPassword;
        
    }
}


?>