<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_name";

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexão
if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}
echo "Conexão estabelecida com sucesso";

// Fechar conexão
mysqli_close($conn);
?>