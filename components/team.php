<?php
$equipe = [
    [
        "nome" => "Maria Silva",
        "cargo" => "CEO e Desenvolvedora Full-Stack",
        "descricao" => "Responsável pela gestão da empresa e desenvolvimento de sistemas complexos. Especialista em PHP e React."
    ],
    [
        "nome" => "João Santos",
        "cargo" => "Desenvolvedor Back-End",
        "descricao" => "Especialista em banco de dados MySQL/MariaDB e desenvolvimento de APIs RESTful. Focado em segurança e performance."
    ],
    [
        "nome" => "Ana Oliveira",
        "cargo" => "Desenvolvedora Front-End",
        "descricao" => "Cria interfaces intuitivas e responsivas com HTML, CSS e JavaScript. Especialista em experiência do usuário (UX)."
    ],
    [
        "nome" => "Carlos Ferreira",
        "cargo" => "Analista de Sistemas",
        "descricao" => "Analisa necessidades dos clientes e traduz em requisitos técnicos para a equipe de desenvolvimento."
    ]
];
?>

<section id="equipe">
    <div class="container">
        <div class="section-title">
            <h2>Nossa Equipe</h2>
        </div>
        <div class="team-container">
            <?php foreach ($equipe as $membro): ?>
                <div class="team-member">
                    <div class="member-img">
                        <i class="fas fa-user"></i>
                    </div>
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
