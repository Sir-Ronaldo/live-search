<?php
include_once("conn.php");

$pesquisa = filter_input(INPUT_POST, 'palavra', FILTER_DEFAULT);

$sql = "SELECT * FROM exercicios WHERE exercicio LIKE '%$pesquisa%'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) <= 0) {
  echo 'Nenhum exercício encontrado...';
}else {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<option>".$row['exercicio']."</option>";
  }
}

?>