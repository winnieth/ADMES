<?php

session_start();

if (isset($_POST['admin'])){

    $usertype = $_POST['admin'];
    $_SESSION['usertype']=$usertype;
    header('Location: loginform.php?logintype=admin');

}
elseif (isset($_POST['prog'])) {
    $usertype = $_POST['prog'];
    $_SESSION['usertype']=$usertype;
    header('Location: loginform.php?logintype=prog');
}
elseif (isset($_POST['area'])) {
    $usertype = $_POST['area'];
    $_SESSION['usertype']=$usertype;
    header('Location: loginform.php?logintype=area');
}
elseif (isset($_POST['accr'])) {
    $usertype = $_POST['prog'];
    $_SESSION['usertype']=$usertype;
    header('Location: loginform.php?logintype=accr');
}
        
?>