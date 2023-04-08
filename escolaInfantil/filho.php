<?php
include "conecta.php";
if(isset($_POST['prinome'])){
$nome1 = $_POST['fprinome'].' '.$_POST['fultnome'];
}
if(isset($_POST['email'])){
$sql = "INSERT INTO filho (cd_filho, nm_filho, ds_idade, ds_peso, ds_altura, ds_comp) VALUES (NULL, '".$nome1."','".$_POST['idade']."','".$_POST['peso']."','".$_POST['altura']."','".$_POST['complemento']."')";
if($conn->query($sql) === TRUE){
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
<?php
include "conecta.php";
if(isset($_POST['prinome'])){
$nome = $_POST['prinome'].' '.$_POST['ultnome'];
}
if (isset($_POST['email'])){
$query1 ="SELECT * FROM filho";
if ($result = $conn->query($query1)){
while ($obj = $result->fetch_object()){
$id = $obj->cd_filho;
}
}
$sql = "INSERT INTO usuario (cd_usuario, nome, endereco, email, senha, id_filho, cep) VALUES (NULL, '".$nome."','".$_POST['endereco']."','".$_POST['email']."','".$_POST['senha']."', '".$id."', '".$_POST['cep']."')";
header("location:conta1.php");
$query1 ="SELECT * FROM usuario";
if ($conn->query($sql) === TRUE) {
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>