<?php
 
/**
 * Conecta com o MySQL usando PDO
 */
function db_connect()
{
    $PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
 
    return $PDO;
}

function insert_familia(){
	try {
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
}