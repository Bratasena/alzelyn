<?php
/**
 * Created by PhpStorm.
 * User: Brian R
 * Date: 11/10/2018
 * Time: 16:06
 */

class LoginController
{
    public function login()
    {
        require_once('view/pages/v_login.php');
    }

    public function auth()
    {
        if (Login::cekAkun($_POST['username'], $_POST['password']) == 0) {
            ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
                alert("Username / Password salah");
            </script>
            <?php
            require_once('view/pages/v_login.php');
        } else if (Login::cekAkun($_POST['username'], $_POST['password']) == 1) {
            $_SESSION['user'] = $_POST['username'];
            header("Location:index.php?controller=home&action=homeAdmin");
        } else if (Login::cekAkun($_POST['username'], $_POST['password']) == 2) {
            $_SESSION['user'] = $_POST['username'];
            header("Location:index.php?controller=home&action=homePenjual");
        } else if (Login::cekAkun($_POST['username'], $_POST['password']) == 3) {
            $_SESSION['user'] = $_POST['username'];
            header("Location:index.php?controller=home&action=homePembeli");
        }
    }
}

?>