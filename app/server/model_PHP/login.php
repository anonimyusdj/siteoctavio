<?php
        if($_POST){
            if(isset($_REQUEST['user']) && !empty($_REQUEST['user']) && isset($_REQUEST['pass']) && !empty($_REQUEST['pass'])){
                $user=$_REQUEST['user'];
                $pass=$_REQUEST['pass']
                if($user=="octavio@admin.com" && $pass=="123"){
                    header("location: octavio/index.html");
                }else{
                    echo "<script> alert('Usuario o Contraseña incorrectos')<script>";
                }
            }else{
                echo "<script> alert('Parametros Vacios')<script>";
            }
        }
    ?>