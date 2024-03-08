<?php

if (isset($_POST['id_membro'])) {
    $pdo = new PDO('mysql:host=localhost:3306;dbname=app_cms', 'root', 'password');
    $sql = $pdo->prepare("DELETE FROM `tb_equipe` WHERE id = :id_membro");
    $sql->execute(['id_membro' => $_POST['id_membro']]);
    echo "TESTE";
}