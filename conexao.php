<?php
// define('HOST', '127.0.0.1');
// define('USUARIO', 'root');
// define('SENHA', '');
// define('DB','fib');

// $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Nao foi possivel conectar');

define('HOST', 'ec2-50-16-241-192.compute-1.amazonaws.com');
define('USUARIO', 'cktohxctskgqym');
define('SENHA', 'e53d0af2ea7c7688fec3909f104f64143b12e46a67d35a5e8a230c9236b36c74');
define('DB','dbdn07u65ldit7');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Nao foi possivel conectar');

?>