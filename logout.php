<?php 
require 'validacao.php';
session_destroy();
header('Location: login' );
?>