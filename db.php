<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'lsp_petsqushop';

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die('Gagal terhubung ke Database');
