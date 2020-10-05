<?php
//Vai sair da página e ser redirecionado a página de login
session_start();
unset($_SESSION['cLogin']);
header("Location: ./");
?>