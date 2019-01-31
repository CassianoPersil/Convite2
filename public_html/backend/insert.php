<?php 
  

$username = 'root';
$password = '';
   
try {
  $pdo = new PDO('mysql:host=localhost;dbname=cha_cassiano', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('INSERT INTO `familia`(`nome_familia`, `telefone`, `quantidade`, `confirmado`) VALUES (:nome,:telefone,0,0)');
  $stmt->execute(array(
    ':nome' => $_POST['familia_nome'],
    ':telefone' => $_POST['telefone']
  ));
   
 	if($stmt->rowCount()>0){
 		header('Location: ../teste.php');
 	} 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>