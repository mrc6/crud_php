<?php 
  session_start();
  require "connect.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuário - Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
	  <?php include("navbar.php"); ?>
	  <div class="container mt-5">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="card">
	          <div class="card-header">
	            <h4>Editar Usuário
	              <a href="index.php" class="btn btn-danger float-end">Voltar</a>
	            </h4>
	          </div>
	          <div class="card-body">
				<?php
				  if($_GET['id']){
				    $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
				    $query = "SELECT * FROM usuarios WHERE id='$usuario_id'";
				    $result = mysqli_query($conexao, $query);
				    if(mysqli_num_rows($result) > 0){
					  $usuario = mysqli_fetch_array($result);
				?>
				<form action="actions.php" method="POST">
					<input type="hidden" name="usuario_id" value="<?= $usuario['id'] ?>" ></input>
					<div class="mb-3">
					  <label>Nome</label>
					  <input class="form-control" name="nome" value="<?= $usuario['nome'] ?>" >
					  </input>
					</div>
					<div class="mb-3">
					  <label>Email</label>
					  <input class="form-control" name="email" value="<?= $usuario['email'] ?>" >
					  </input>
					</div>
					<div class="mb-3">
					  <label>Data Nascimento</label>
					  <input class="form-control" type="date" name="data_nascimento" value="<?= $usuario['data_nascimento'] ?>" >
					  </input>
					</div>
				    <div class="mb-3">
					  <label>Senha</label>
					  <input class="form-control" type="password" name="senha" ></input>
					</div>
					<div class="mb-3">
					  <button type="submit" name="update_usuario" class="btn btn-primary">Salvar</button>
					</div>
	            </form>
				<?php 
				    }
				    else {
				      echo "<h5>Usuário não encontrado!</h5>";
				    }
			      }
				?>
	        </div>
	      </div>
	    </div>
	  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>

