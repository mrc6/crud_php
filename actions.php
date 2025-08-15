<?php session_start(); ?>
<?php
  require "connect.php";
  
  if(isset($_POST['create_usuario'])){
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : ""; 
    $query = "INSERT INTO usuarios (nome, email, data_nascimento, senha) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";
    mysqli_query($conexao, $query);
    
    if (mysqli_affected_rows($conexao) > 0){
	  $_SESSION['message'] = "Usuário criado com sucesso!";
	  header('Location:index.php');
	  exit;
	} 
	else {
	  $_SESSION['message'] = "Algo deu errado, usuário não foi criado!";
	  header('Location:index.php');
	  exit;
	}
  }
  
  if(isset($_POST['update_usuario'])){
	$usuario_id = mysqli_real_escape_string($conexao, $_POST['usuario_id']);
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha'])); 
    $query = "UPDATE usuarios SET nome='$nome', email='$email', data_nascimento='$data_nascimento'";
    if (!empty($senha)){
	  $query .= ", senha='" . password_hash($senha, PASSWORD_DEFAULT) . "'";
	}
    $query .= " WHERE id='$usuario_id'";   
    mysqli_query($conexao, $query);
    
    if (mysqli_affected_rows($conexao) > 0){
	  $_SESSION['message'] = "Usuário atualizado com sucesso!";
	  header('Location:index.php');
	  exit;
	} 
	else {
	  $_SESSION['message'] = "Algo deu errado, usuário não foi atualizado!";
	  header('Location:index.php');
	  exit;
	}
  }
  
  if(isset($_POST['delete_usuario'])){
    $usuario_id = mysqli_real_escape_string($conexao, $_POST['delete_usuario']);
    $query = "DELETE FROM usuarios WHERE id='$usuario_id'";
    
    mysqli_query($conexao, $query);
    
    if (mysqli_affected_rows($conexao) > 0){
	  $_SESSION['message'] = "Usuário deletado com sucesso!";
	  header('Location:index.php');
	  exit;
	} 
	else {
	  $_SESSION['message'] = "Algo deu errado, usuário não foi deletado!";
	  header('Location:index.php');
	  exit;
	}
  }
?>
