<?php

require_once dirname(__DIR__) . "/lib/database.php";

$conn = get_conn();
$equipe = $conn->query("SELECT nome, cargo, descricao FROM membro");
?>

<section id="equipe">
    <div class="container">
        <div class="section-title">
            <h2>Nossa Equipe</h2>
        </div>
        <div class="team-container">
            <?php foreach ($equipe as $membro): ?>
                <div class="team-member">
                    <div class="member-info">
                        <h3><?= $membro['nome'] ?></h3>
                        <p class="role"><?= $membro['cargo'] ?></p>
                        <p><?= $membro['descricao'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
