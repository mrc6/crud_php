<?php //https://www.youtube.com/watch?v=aIQXgNmx_ug  ?>
<?php require "connect.php"; ?>
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
						  <td>1</td>
						  <td>Teste</td>
						  <td>teste@gmail.com</td>
						  <td>15/01/1983</td>
						  <td>
						    <a href="" class="btn btn-secondary btn-sm">Visualizar</a>
						    <a href="" class="btn btn-success btn-sm">Editar</a>
						    <form action="" method="POST" class="d-inline">
						      <button type="submit" name="delete_usuario" value="1" class="btn btn-danger btn-sm">
						        Excluir
						      </button>
						    </form>
						  </td>
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
