<h3>Horaires d'ouverture:</h3>
<table class="rounded" >
    <?php
    if($pdo = new PDO('mysql:dbname=garage_v_parrot;host=localhost', 'root', '')) { ?>
            <thead>
                <tr>
                    <?php
            foreach ($pdo->query('SELECT * FROM horaires ;', PDO::FETCH_ASSOC) as $day) {
                echo '<th>' .  substr($day['jour'], 0, 3) . '</th>';
            } ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            foreach ($pdo->query('SELECT * FROM horaires ;', PDO::FETCH_ASSOC) as $day) {
                echo '<td>' .  $day['ouverture_matin'] . '</td>';
            } ?>
        </tr>
        <tr>
            <?php
            foreach ($pdo->query('SELECT * FROM horaires ;', PDO::FETCH_ASSOC) as $day) {
                echo '<td>' .  $day['fermeture_matin'] . '</td>';
            } ?>
        </tr>
        <tr>
            <?php
            foreach ($pdo->query('SELECT * FROM horaires ;', PDO::FETCH_ASSOC) as $day) {
                echo '<td>' .  $day['ouverture_apres_midi'] . '</td>';
            } ?>
        </tr>
        <tr>
            <?php
            foreach ($pdo->query('SELECT * FROM horaires ;', PDO::FETCH_ASSOC) as $day) {
                echo '<td>' .  $day['fermeture_apres_midi'] . '</td>';
            } ?>
        </tr>
    </tbody>
    <?php } ?>
</table>