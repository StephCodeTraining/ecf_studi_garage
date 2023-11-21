<?php 

$is_employer = false;

$pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');

    foreach ($pdo->query('SELECT * FROM employers', PDO::FETCH_ASSOC) as $user) {
        if ($_POST['login-email'] === $user['email']
        && $_POST['login-mdp'] === $user['mdp']
        && $user['admin'] === "1") {
            include '.\space-admin.php';
            $is_employer = true;
        } else if($_POST['login-email'] === $user['email'] 
        && $_POST['login-mdp'] === $user['mdp']
        && $user['admin'] === null) {
            include 'space_employer.php';
            $is_employer = true;
        }  
    }
    if ($is_employer === false)
    {
        include '.\login_failed.php';
    }

