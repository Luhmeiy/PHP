<!DOCTYPE html>
<?php 
    session_start();
    include "default/conect2.php"; 
?>
<html>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<meta charset="utf-8">
<head>
	<title>RPG - Cyberpunk</title>
<?php include "default/bootstrap.php"; ?>
</head>
<body>
<?php include "default/navbar.php"; ?>
<?php
if (isset($_POST['submit'])){ //verifica se a variável foi definida
    if ($result = $mysqli->query("SELECT * FROM sheet WHERE id_sheet_user = ".$_SESSION['COD_USER']."")) {
        /* determine number of rows result set */
        $row_cnt = $result->num_rows;
        if ($row_cnt == 0) {
            $query = "INSERT INTO sheet (cd_sheet, nm_sheet, img_sheet, id_role, id_sheet_user) VALUES (NULL, '".$_POST['name']."', '".$_POST['name']."', '".$_GET['hidden']."', '".$_SESSION['COD_USER']."')";
            if ($result = $mysqli->query($query)){
                while ($obj = $result->fetch_object()){
                    header("location:alert.php?al=1",true); //redireciona o usuário
        	    }
        	}
        }
        else{
        }
    }
}
if (isset($_POST['submit'])){
    if ($result = $mysqli->query("SELECT * FROM steet WHERE id_sheet_user = ".$_SESSION['COD_USER']."")) {
        $row_cnt = $result->num_rows;
        if ($row_cnt == 0) {
            $qnt = $_POST['qnt'];
            $id = $_POST['id'];
            foreach ($id as $index => $code) {
                $query = "INSERT INTO steet (cd_stt_sheet, nm_stt_sheet, id_stt_sheet, vl_stt_sheet) VALUES (NULL, '".$code."', '".$_SESSION['COD_USER']."', '".$qnt[$index]."')";
                if ($result = $mysqli->query($query)){
                }
            }
        }
        else {
        }
    }
    else {
    }
}
?>
<div class="container">
    <form method="POST">
    <div class="row justify-content-center">
    <?php
        $query = "SELECT * FROM roles, user WHERE cd_role = ".$_GET['hidden']." AND cd_user = ".$_SESSION['COD_USER'];"";
        if ($result = $mysqli->query($query)){
            while ($obj = $result->fetch_object()){
        	    printf ("<center><h2 class='card-title'>%s</h2></center>
    	                 <img class='card-img-top' src='%s' alt='Card image cap'>
		                 <p class='card-text'>Categoria: <b style='float: right;'>%s</b></p>", $obj->nm_role, $obj->img_role, $obj->cat_role);
            }
        }
    ?>
    </div>
    <div class="row">
        <div class="col-md-6">
<?php
    echo $_POST['item'];
    $query = "SELECT * FROM itens WHERE cat_gun = ".$_GET['item']."";
    echo "<div class='col-md-6'>
          <div class='col-md-12' id='input'>
          <label class='radio-inline'>
          <input type='radio' name='item' value='".$_GET['item']."' style='margin-left: 5px;'> Opção ".$_GET['item']."
          <ul>";
    if ($result = $mysqli->query($query)){
        while ($obj = $result->fetch_object()){
    	    printf ("<li><p>%s</p></li>", $obj->nm_gun);
        }
    }
    echo "</ul>
          </label>
          </div>
          </div>";
?>
        </div>
        <div class="col-md-6">
        <?php
            $query = "SELECT * FROM stts WHERE id_stt_user = ".$_GET['hidden']."";
            if ($result = $mysqli->query($query)){
                while ($obj = $result->fetch_object()){
                    printf ("<div class='col-md-12'>%s 
    	                     <b style='float: right;'>%s</b>
        	                 <input type='hidden' value='%s'name='qnt[]' disabled>
                             <input type='hidden' value='%s' name='id[]'>
        	                 </div>", $obj->nm_stt, $obj->vl_stt, $obj->vl_stt, $obj->nm_stt);
                }
            }
        ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2>Qual será o nome de seu aventureiro?</h2>
        <input class="form-control" placeholder="..." name="name" style="width: 80%; margin-bottom: 10px;" required>
    </div>
    <div class="row justify-content-center">
        <button class='btn btn-success' type='submit' name="submit" style="margin-bottom: 10px;">Salvar Ficha</button>
    </div>
    </form>
</div>
<?php include "default/footer.php"; ?>
</body>
</html