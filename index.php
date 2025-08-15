<?php //https://www.youtube.com/watch?v=aIQXgNmx_ug  ?>
<?php 
  session_start();
  require "connect.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
	  <?php include("navbar.php"); ?>
	  <div class="container mt4">
		<?php include('message.php'); ?>
	    <div class="row">
			<div class="col-md-12">
				<div class="card">
				  <div class="card-header">
					  <h4>Lista de usuários
					    <a href="usuario-create.php" class="btn btn-primary float-end">Adicionar usuário</a>
					  </h4>
				  </div>
				  <div class="card-body">
				    <table class="table table-bordered table-stripped">
						<thead><tr>
							<th>ID</th>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Data de nascimento</th>
							<th>Ações</th>
						</tr></thead>
						<tbody>
						  <?php 
							$query = 'SELECT * FROM usuarios';
							$usuarios = mysqli_query($conexao, $query);
							if(mysqli_num_rows($usuarios) > 0){
							  foreach($usuarios as $usuario){
						  ?>
						  <tr>
							  <td><?= $usuario['id'] ?></td>
						    <td><?= $usuario['nome'] ?></td>
						    <td><?= $usuario['email'] ?></td>
						    <td><?= date('d/m/Y', strtotime($usuario['data_nascimento'])) ?></td>
						    <td>
						      <a href="user-view.php?id=<?= $usuario['id'] ?>" class="btn btn-secondary btn-sm">Visualizar</a>
						      <a href="user-edit.php?id=<?= $usuario['id'] ?>" class="btn btn-success btn-sm">Editar</a>
						      <form action="actions.php" method="POST" class="d-inline">
						        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir ?')" name="delete_usuario" value="<?= $usuario['id'] ?>" class="btn btn-danger btn-sm">
						          Excluir
						        </button>
						      </form>
						    </td>
						  </tr>
						  <?php 
					          }
					        }
					        else {
							  echo "<h5>Nenhum usuário encontrado</h5>";
							}
						  ?>
						</tbody>
				    </table>
				  </div>
				</div>
			</div>
	    </div>
	  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
