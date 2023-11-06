<h4>Derniers commentaires:</h4>
<?php

$br = '<br>';

$pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '');

$deleteCommentaire = 'DELETE FROM commentaires WHERE valid ="0";';

if ($pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '')) {
    foreach ($pdo->query('SELECT * FROM commentaires ;', PDO::FETCH_ASSOC) as $com) {
    if($com['valid'] === "0" ) {
        if($pdo->exec($deleteCommentaire)) {
            echo 'Commentaires non valid supprimés';
        }
    } elseif ($com['valid'] === "1" ) {
            ?>
        <div class="card commentaire">
            <div class="card-body">
            <h6 class="card-title">
                <?php echo $com['note'] . '/5  ' . $com['nom'] . ' : ' ?></h6>
            <p class="card-text">
                <?= '" ' . $com['message'] .'" ' .$br;  ?>
            </p>
            </div>
        </div>
        
    <?php
        }
    } 
}

?>

