<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB', 'marcob');
define('PORT', '3306');
define('SOCKET', '/opt/lampp/var/mysql/mysql.sock');

//mysqli_connect(host, username, password, dbname, port, socket)
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB, PORT, SOCKET) or die ('Não foi possivel conectar!!!');

?>
