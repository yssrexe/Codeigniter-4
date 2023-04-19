<?php 

namespace App\Libraries;
use App\Models\UserModel;

class Hash
{
    public static function encrypt($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

        //Check password
    public static function check($userpassword, $dbuserpassword)
    {
        if(password_verify($userpassword, $dbuserpassword))
        {
            return true;
        }
        return false;
    }
}