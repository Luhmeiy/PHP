<?php
session_start();
include "default/conecta.php";
    $senha = md5($_GET['id']);
    if ($result = $mysqli->query("SELECT * FROM user WHERE email = '".$_GET['email']."'")) {
        /* determine number of rows result set */
        $row_cnt = $result->num_rows;
        if ($row_cnt == 0) {
            $query = "INSERT INTO user (cd_user, email, nm_user, senha) VALUES (NULL,'".$_GET['email']."','".$_GET['name']."','".$senha."')";
            if ($result = $mysqli->query($query)){
            while ($obj = $result->fetch_object()){
		        $query = "SELECT * FROM user WHERE email = '".$_GET['email']."' AND senha = '".$senha."'"; //verifica se os dados do login conferem
                if ($result = $mysqli->query($query)){
                while ($obj = $result->fetch_object()){
                    $_SESSION['COD_USER'] = $obj->cd_user; //adiciona o código de usuário na sessão
                    header("location:alert.php?al=2",true); //redireciona o usuário
                }
                }
        	}
        	}
        }
        else{
            $query = "SELECT * FROM user WHERE email = '".$_GET['email']."' AND senha = '".$senha."'"; //verifica se os dados do login conferem
            if ($result = $mysqli->query($query)){
            while ($obj = $result->fetch_object()){
                $_SESSION['COD_USER'] = $obj->cd_user; //adiciona o código de usuário na sessão
                header("location:alert.php?al=2",true); //redireciona o usuário
            }
            }
        }
    }
?>