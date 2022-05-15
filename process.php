<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username== 'dileep'&& $password =='pass'){

        echo ("login success");
    }
    else{

        echo("invalid password");
    }
?>