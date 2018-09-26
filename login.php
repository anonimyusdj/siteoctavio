<?php
            
                $user=$_REQUEST['user'];
                $pass=$_REQUEST['pass']
                if($user=="octavio@admin.com" && $pass=="123"){
                    header("location: octavio/index.html");
                }else{
                    echo "<script> alert('Usuario o Contraseña incorrectos')<script>";
                }
           
    ?>