<?php

/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:08
 */

require_once 'init.php';

class Login
{

    public static function cekAkun($username, $password)
    {
        global $con;
        $pass = md5($password);
        $sql = "select * from users where username = '$username' and password = '$pass'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id_user'] = $row['id_user'];
            return $row['level'];
        } else {
            return 0;
        }
    }
}

?>