<?php 

$pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');

if ($_POST['login-email'] === 'steph.codetraining@yahoo.com' && $_POST['login-mdp'] === 'mdp') {
    include '.\space-admin.php';
} else {
    foreach ($pdo->query('SELECT email, mdp FROM employers', PDO::FETCH_ASSOC) as $key => $value) {
        if($_POST['login-email'] === $value['email'] && $_POST['login-mdp'] === $value['mdp']) {
            include 'space_employer.php';
        } else {
            echo 'Cet accès est réservé au personel de l\'entreprise .. ' ;
        }
    }
}