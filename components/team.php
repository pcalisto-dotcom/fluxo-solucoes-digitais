<?php

require_once dirname(__DIR__) . "/lib/database.php";

$conn = get_conn();
$equipe = $conn->query("SELECT nome, cargo, descricao, linkedin, github FROM membro");
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

                        <div class="member-social">
                            <?php if (!empty($membro['linkedin'])): ?>
                                <a href="<?= $membro['linkedin'] ?>"
                                    target="_blank"
                                    class="member-social-icon"
                                    aria-label="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            <?php endif; ?>

                            <?php if (!empty($membro['github'])): ?>
                                <a href="<?= $membro['github'] ?>"
                                    target="_blank"
                                    class="member-social-icon"
                                    aria-label="GitHub">
                                    <i class="fab fa-github"></i>
                                </a>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>